<?php

namespace App\Http\Controllers\Pages\StayFacility;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MStayFacility;
use Illuminate\Support\Facades\Auth;

class StayFacilityPageController extends Controller
{
    public function index(Request $request)
    {
        return view('pages.stay_facility.index');
    }

    public function create()
    {
        return view('pages.stay_facility.create');
    }


    public function store(Request $request)
    {

        $request->validate(
            [
                'name' => 'required|max:50',
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );

        MStayFacility::create($request->except('_token'));

        return redirect()->route('view.stay_facility.index')
            ->with('success', 'Training Facility created successfully!');
    }

    public function edit($id)
    {
        $model = MStayFacility::findOrFail($id);
        return view('pages.stay_facility.edit', compact('model'));
    }

    public function update(Request $request, $id)
    {
        $stay_facility = MStayFacility::findOrFail($id);

        $request->validate(
            [
                'name' => 'required|max:50',
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );
        $request['updated_by_id'] = Auth::id();
        $stay_facility->update($request->except('customer_id'));

        return redirect()->route('view.stay_facility.index')
            ->with('success', 'Training Facility updated successfully!');
    }

    public function destroy($id)
    {
        $post = MStayFacility::findOrFail($id);
        $post->delete();

        return redirect()->route('view.stay_facility.index')
            ->with('success', 'Training Facility deleted successfully!');
    }
}
