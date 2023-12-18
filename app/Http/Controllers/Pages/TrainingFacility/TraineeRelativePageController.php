<?php

namespace App\Http\Controllers\Pages\TrainingFacility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MTrainingFacility;
use Illuminate\Support\Facades\Auth;

class TrainingFacilityPageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.trainee_relative.index');
    }

    public function create()
    {
        return view('pages.trainee_relative.create');
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

        MTrainingFacility::create($request->except('_token'));

        return redirect()->route('view.trainee_relative.index')
            ->with('success', 'TrainingFacility created successfully!');
    }

    public function edit($id)
    {
        $trainee_relative = MTrainingFacility::findOrFail($id);
        return view('pages.trainee_relative.edit', compact('trainee_relative'));
    }

    public function update(Request $request, $id)
    {  
        $trainee_relative = MTrainingFacility::findOrFail($id);

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
        $trainee_relative->update($request->except('customer_id'));

        return redirect()->route('view.trainee_relative.index')
            ->with('success', 'TrainingFacility updated successfully!');
    }

    public function destroy($id)
    {
        $post = MTrainingFacility::findOrFail($id);
        $post->delete();

        return redirect()->route('view.trainee_relative.index')
            ->with('success', 'Trainee Relative deleted successfully!');
    }
}
