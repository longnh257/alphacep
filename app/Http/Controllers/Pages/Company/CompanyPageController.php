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

    public function create()
    {
        return view('pages.company.create');
    } 
 

    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required|max:255',
            'company_name_kana' => 'required|max:255',
            'tel' => 'required|regex:/^\d{10}$/',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'company_name_kana.required' => 'The name kana field is required.',
            'company_name_kana.max' => 'The name kana must not exceed :max characters.',
            'tel.required' => 'The telephone field is required.',
            'tel.regex' => 'The telephone field must be a 10-digit number.',
        ]);

        $request['created_by_id'] = Auth::id();
        $request['updated_by_id'] = Auth::id();

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
        'company_name_kana' => 'required|max:255',
        'tel' => 'required|regex:/^\d{10}$/',
        ], [
            'name.required' => 'The name field is required.',
            'name.max' => 'The name must not exceed :max characters.',
            'company_name_kana.required' => 'The name kana field is required.',
            'company_name_kana.max' => 'The name kana must not exceed :max characters.',
            'tel.required' => 'The telephone field is required.',
            'tel.regex' => 'The telephone field must be a 10-digit number.',
        ]);
        $company->update($request->input());

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