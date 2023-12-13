<?php

namespace App\Http\Controllers\Pages;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MCustomerStaff;
use App\Models\MCustomerOffice;
use Illuminate\Support\Facades\Auth;

class CustomerStaffPageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.customer_staff.index');
    }

    public function create()
    {
        $offices = MCustomerOffice::all('customer_office_id', 'name');
        return view('pages.customer_staff.create', compact('offices'));
    }

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'tel' => 'required|regex:/^\d{10}$/',
            'customer_office_id' => 'required',
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

        MCustomerStaff::create($request->except('_token'));

        return redirect()->route('view.customer_staff.index')
            ->with('success', 'CustomerOffice created successfully!');
    }

    public function edit($id)
    {
        $customer_staff = MCustomerStaff::findOrFail($id);
        $offices = MCustomerOffice::all('customer_office_id', 'name');

        return view('pages.customer_staff.edit', compact(['customer_staff','offices']));
    }

    public function update(Request $request, $id)
    {
        $customer_staff = MCustomerStaff::findOrFail($id);
        $request->validate([
            'name' => 'required|max:255',
            'name_kana' => 'required|max:255',
            'tel' => 'required|regex:/^\d{10}$/',
            'customer_office_id' => 'required',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'name_kana.required' => 'The name kana field is required.',
            'name_kana.max' => 'The name kana must not exceed :max characters.',
            'tel.required' => 'The telephone field is required.',
            'tel.regex' => 'The telephone field must be a 10-digit number.',
        ]);
        $customer_staff->update($request->input());

        return redirect()->route('view.customer_staff.index')
            ->with('success', 'CustomerStaff updated successfully!');
    }

    public function destroy($id)
    {
        $staff = MCustomerStaff::findOrFail($id);
        $staff->delete();

        return redirect()->route('view.customer_staff.index')
            ->with('success', 'Staff deleted successfully!');
    }
}
