<?php

namespace App\Http\Controllers\Pages\Project;

use App\Http\Controllers\Controller;
use App\Models\MSendingAgency;
use App\Models\MTrainingFacility;
use Illuminate\Http\Request;
use App\Models\ProjectTrainee;
use App\Models\ProjectDocument;


class ProjectDocumentPageController extends Controller
{
    public function create($project_trainee_id)
    {
        $project_trainee = ProjectTrainee::findOrFail($project_trainee_id);
        return view('pages.project_document.create', compact(
            'project_trainee',
        ));
    }


    public function store(Request $request, $project_trainee_id)
    {

        ProjectTrainee::findOrFail($project_trainee_id);
        $request['project_trainee_id'] = $project_trainee_id;
        $request->validate(
            [],
            trans('validation.messages'),
            trans('validation.attributes'),
        );
        ProjectDocument::create($request->except('_token'));

        return redirect()->route('view.project.index')
            ->with('success', trans('messages.project.created_success'));
    }

    public function edit($id)
    {
        $project_document = ProjectDocument::findOrFail($id);
        return view('pages.project_document.edit', compact('project_document'));
    }

    public function update(Request $request, $id)
    {
        $project = ProjectDocument::findOrFail($id);
        $request['project_trainee_id'] = $project->project_trainee_id;
        $request->validate(
            [],
            trans('validation.messages'),
            trans('validation.attributes'),
        );

        $project->update($request->input());

        return redirect()->route('view.project.index')
            ->with('success', trans('messages.project.updated_success'));
    }

    public function destroy($id)
    {
        $post = ProjectDocument::findOrFail($id);
        $post->delete();

        return redirect()->route('view.project.index')
            ->with('success', trans('messages.project.deleted_success'));
    }
}
