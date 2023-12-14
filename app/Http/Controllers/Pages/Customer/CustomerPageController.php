<?php

namespace App\Http\Controllers\Pages\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MCustomer;
use App\Models\MCustomerOffice;
use App\Models\MCustomerStaff;
use Illuminate\Support\Facades\Auth;

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

        $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'tel' => 'required|regex:/^\d{10}$/',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'name_kana.required' => 'The name kana field is required.',
            'name_kana.max' => 'The name kana must not exceed :max characters.',
            'tel.required' => 'The telephone field is required.',
            'tel.regex' => 'The telephone field must be a 10-digit number.',
        ]);

        $request['created_by_id'] = Auth::id();
        $request['updated_by_id'] = Auth::id();

        MCustomer::create($request->except('_token'));

        return redirect()->route('view.customer.index')
            ->with('success', 'Customer created successfully!');
    }

    public function edit($id)
    {
        $customer = MCustomer::with('offices')->findOrFail($id);
        return view('pages.customer.edit', compact('customer'));
    }

    public function update(Request $request, $id)
    {  
        $customer = MCustomer::findOrFail($id);

        $request->validate([
        'name' => 'required|max:255',
        'name_kana' => 'required|max:255',
        'tel' => 'required|regex:/^\d{10}$/',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'name_kana.required' => 'The name kana field is required.',
            'name_kana.max' => 'The name kana must not exceed :max characters.',
            'tel.required' => 'The telephone field is required.',
            'tel.regex' => 'The telephone field must be a 10-digit number.',
        ]);
        $customer->update($request->input());

        return redirect()->route('view.customer.index')
            ->with('success', 'Customer updated successfully!');
    }

    public function destroy($id)
    {
        $post = MCustomer::findOrFail($id);
        MCustomerStaff::where('customer_id',$id)->delete();
        MCustomerOffice::where('customer_id',$id)->delete();
        $post->delete();

        return redirect()->route('view.customer.index')
            ->with('success', 'Customer deleted successfully!');
    }
}
