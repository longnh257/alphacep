<?php

namespace App\Http\Controllers\Pages\Project;

use App\Http\Controllers\Controller;
use App\Models\MCompany;
use App\Models\MSendingAgency;
use App\Models\MTrainee;
use App\Models\MTrainingFacility;
use Illuminate\Http\Request;
use App\Models\Project;
use App\Models\ProjectTrainee;
use App\Models\ProjectTraineeContract;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ProjectTraineeContractPageController extends Controller
{
    public function create($trainee_id)
    {
        $project_trainee = ProjectTrainee::findOrFail($trainee_id);
        $this_project_trainee_ids = ProjectTraineeContract::get()->pluck('trainee_id');
        $trainee = MTrainee::whereNotIn('trainee_id', $this_project_trainee_ids)->get();
        $training_facility = MTrainingFacility::all();
        $sending_agency = MSendingAgency::all();
        return view('pages.project_trainee_contract.create', compact(
            'project_trainee',
            'trainee',
            'training_facility',
            'sending_agency',
        ));
    }


    public function store(Request $request, $project_id)
    {
        Project::findOrFail($project_id);
        $request->validate(
            [
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );

        $request['project_id'] = $project_id;
        ProjectTraineeContract::create($request->except('_token'));

        return redirect()->route('view.project.index')
            ->with('success', trans('messages.project.created_success'));
    }

    public function edit($id)
    {
        $project_trainee = ProjectTraineeContract::findOrFail($id);
        $training_facility = MTrainingFacility::all();
        $sending_agency = MSendingAgency::all();
        return view('pages.project_trainee.edit', compact('project_trainee', 'training_facility', 'sending_agency'));
    }

    public function update(Request $request, $id)
    {
        $project = ProjectTraineeContract::findOrFail($id);

        $request->validate(
            [
            ],
            trans('validation.messages'),
            trans('validation.attributes'),
        );

        $project->update($request->input());

        return redirect()->route('view.project.index')
            ->with('success', trans('messages.project.updated_success'));
    }

    public function destroy($id)
    {
        $post = ProjectTraineeContract::findOrFail($id);
        $post->delete();

        return redirect()->route('view.project.index')
            ->with('success', trans('messages.project.deleted_success'));
    }
}
