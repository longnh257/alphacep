<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MCustomer;

class CustomerPageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.customer.index');
    }

    public function create()
    {
        return view('pages.customer.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'tel' => 'required|max:255',
            'name' => 'required|max:255'
        ]);

        MCustomer::create($validatedData);

        return redirect()->route('view.customer.index')
            ->with('success', 'Customer created successfully!');
    }

    public function edit($id)
    {
        $post = MCustomer::findOrFail($id);
        return view('pages.customer.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'tel' => 'required|max:255',
            'name' => 'required|max:255'
        ]);

        $post = MCustomer::findOrFail($id);
        $post->update($validatedData);

        return redirect()->route('view.customer.index')
            ->with('success', 'Customer updated successfully!');
    }

    public function destroy($id)
    {
        $post = MCustomer::findOrFail($id);
        $post->delete();

        return redirect()->route('view.customer.index')
            ->with('success', 'Post deleted successfully!');
    }
}
