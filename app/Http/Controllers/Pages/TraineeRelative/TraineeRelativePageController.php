<?php

namespace App\Http\Controllers\Pages\TraineeRelative;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MTraineeRelative;
use Illuminate\Support\Facades\Auth;

class TraineeRelativePageController extends Controller
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


        $request->validate(
            [
                'name' => 'required|max:255',
                'name_kana' => 'required|max:255',
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );

        $request['customer_id'] = Auth::user()->customer_id;
        $request['created_by_id'] = Auth::id();
        $request['updated_by_id'] = Auth::id();

        MTraineeRelative::create($request->except('_token'));

        return redirect()->route('view.trainee_relative.index')
            ->with('success', 'TraineeRelative created successfully!');
    }

    public function edit($id)
    {
        $trainee_relative = MTraineeRelative::findOrFail($id);
        return view('pages.trainee_relative.edit', compact('trainee_relative'));
    }

    public function update(Request $request, $id)
    {
        $trainee_relative = MTraineeRelative::findOrFail($id);


        $request->validate(
            [
                'name' => 'required|max:255',
                'name_kana' => 'required|max:255',
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );
        $request['updated_by_id'] = Auth::id();
        $trainee_relative->update($request->except('customer_id'));

        return redirect()->route('view.trainee_relative.index')
            ->with('success', 'TraineeRelative updated successfully!');
    }

    public function destroy($id)
    {
        $post = MTraineeRelative::findOrFail($id);
        $post->delete();

        return redirect()->route('view.trainee_relative.index')
            ->with('success', 'Trainee Relative deleted successfully!');
    }
}
