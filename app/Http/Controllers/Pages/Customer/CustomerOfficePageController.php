<?php

namespace App\Http\Controllers\Pages\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MCustomer;
use App\Models\MCustomerOffice;
use App\Models\MCustomerStaff;
use Illuminate\Support\Facades\Auth;

class CustomerOfficePageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.customer_office.index');
    }

    public function create($customer_id)
    {
        $customer =  MCustomer::findOrFail($customer_id);
        return view('pages.customer_office.create', compact('customer'));
    }

    public function store(Request $request, $customer_id)
    {
        $customer =  MCustomer::findOrFail($customer_id);
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

        $request['customer_id'] = $customer->customer_id;
        $request['created_by_id'] = Auth::id();
        $request['updated_by_id'] = Auth::id();

        MCustomerOffice::create($request->except('_token'));

        return redirect()->route('view.customer.edit', ['id' => $customer->customer_id])
            ->with('success', 'CustomerOffice created successfully!');
    }

    public function edit($id)
    {
        $customer_office = MCustomerOffice::findOrFail($id);
        $customers = MCustomer::all('customer_id', 'name');
        return view('pages.customer_office.edit', compact('customer_office', 'customers'));
    }

    public function update(Request $request, $id)
    {
        $customer_office = MCustomerOffice::findOrFail($id);

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

        $customer_office->update($request->except(['customer_id', '_token']));

        return redirect()->route('view.customer.edit', ['id' => $customer_office->customer_id])
            ->with('success', 'CustomerOffice updated successfully!');
    }

    public function destroy($id)
    {
        $office = MCustomerOffice::findOrFail($id);
        $customer_id = $office->customer_id;
        MCustomerStaff::where('customer_office_id', $id)->delete();
        $office->delete();

        return redirect()->route('view.customer.edit',['id'=>$customer_id])
            ->with('success', 'Office deleted successfully!');
    }
}
