<?php

namespace App\Http\Controllers\Pages\Company;

use App\Http\Controllers\Controller;
use App\Models\MCompany;
use App\Models\MCompanyOffice;
use App\Models\MCompanystaff;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyPageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.company.index');
    }

    public function create($customer_id)
    {
        return view('pages.company.create',compact('customer_id'));
    } 
 

    public function store(Request $request,$customer_id)
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
        $request['customer_id'] = $customer_id;

        MCompany::create($request->except('_token'));

        return redirect()->route('view.company.index')
            ->with('success', 'Company created successfully!');
    }

    public function edit($id)
    {
        $company = MCompany::with('offices')->findOrFail($id);
        return view('pages.company.edit', compact('company'));
    }

    public function update(Request $request, $id)
    {  
        $company = MCompany::findOrFail($id);

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
        $company->update($request->except('_token','customer_id'));

        return redirect()->route('view.company.index')
            ->with('success', 'Company updated successfully!');
    }

    public function destroy($id)
    {
        $post = MCompany::findOrFail($id);
        MCompanystaff::where('company_id',$id)->delete();
        MCompanyOffice::where('company_id',$id)->delete();
        $post->delete();

        return redirect()->route('view.company.index')
            ->with('success', 'Company deleted successfully!');
    }
}