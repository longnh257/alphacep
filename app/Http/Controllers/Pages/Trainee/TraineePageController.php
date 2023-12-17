<?php

namespace App\Http\Controllers\Pages\Trainee;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MTrainee;
use Illuminate\Support\Facades\Auth;

class TraineePageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.trainee.index');
    }

    public function create()
    {
        return view('pages.trainee.create');
    } 
 

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'name_kana.required' => 'The name kana field is required.',
            'name_kana.max' => 'The name kana must not exceed :max characters.',
        ]);

        $request['customer_id'] = Auth::user()->customer_id;
        $request['created_by_id'] = Auth::id();
        $request['updated_by_id'] = Auth::id();

        MTrainee::create($request->except('_token'));

        return redirect()->route('view.trainee.index')
            ->with('success', 'Trainee created successfully!');
    }

    public function edit($id)
    {
        $trainee = MTrainee::findOrFail($id);
        return view('pages.trainee.edit', compact('trainee'));
    }

    public function update(Request $request, $id)
    {  
        $trainee = MTrainee::findOrFail($id);

        $request->validate([
        'name' => 'required|max:255',
        'name_kana' => 'required|max:255',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'name_kana.required' => 'The name kana field is required.',
            'name_kana.max' => 'The name kana must not exceed :max characters.',
        ]);
        $request['updated_by_id'] = Auth::id();
        $trainee->update($request->except('customer_id'));

        return redirect()->route('view.trainee.index')
            ->with('success', 'Trainee updated successfully!');
    }

    public function destroy($id)
    {
        $post = MTrainee::findOrFail($id);
        $post->delete();

        return redirect()->route('view.trainee.index')
            ->with('success', 'Trainee deleted successfully!');
    }
}
