<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MCustomer;
use App\Models\MCustomerOffice;
use Illuminate\Support\Facades\Auth;

class CustomerOfficePageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.customer_office.index');
    }

    public function create()
    {
        $customers = MCustomer::all('customer_id','name');
        return view('pages.customer_office.create', compact('customers'));
    }
    
    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'tel' => 'required|regex:/^\d{10}$/',
            'customer_id' => 'required',
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

        MCustomerOffice::create($request->except('_token'));

        return redirect()->route('view.customer_office.index')
            ->with('success', 'CustomerOffice created successfully!');
    }

    public function edit($id)
    {
        $customer_office = MCustomerOffice::findOrFail($id);
        $customers = MCustomer::all('customer_id','name');
        return view('pages.customer_office.edit', compact('customer_office','customers'));
    }

    public function update(Request $request, $id)
    {
        $customer_office = MCustomerOffice::findOrFail($id);

        $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'tel' => 'required|regex:/^\d{10}$/',
            'customer_id' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'name_kana.required' => 'The name kana field is required.',
            'name_kana.max' => 'The name kana must not exceed :max characters.',
            'tel.required' => 'The telephone field is required.',
            'tel.regex' => 'The telephone field must be a 10-digit number.',
        ]);

        $customer_office->update($request->input());

        return redirect()->route('view.customer_office.index')
            ->with('success', 'CustomerOffice updated successfully!');
    }

    public function destroy($id)
    {
        $office = MCustomerOffice::findOrFail($id);
        $office->delete();

        return redirect()->route('view.customer_office.index')
            ->with('success', 'Office deleted successfully!');
    }
}
