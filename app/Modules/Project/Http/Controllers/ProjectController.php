<?php

namespace App\Modules\Project\Http\Controllers;

use Illuminate\Http\Request;
use App\Modules\Project\Http\Requests\ProjectRequest;

use App\Modules\Project\Models\Project;
use App\Http\Controllers\Controller;
use Damnyan\Cmn\Services\ApiResponse;
use Illuminate\Support\Facades\Validator;

class ProjectController extends Controller
{
    /**
    * Display a listing of the resource.
    *
    * @return App\Modules\Project\Models\Project
    */
    public function index(){
        return Project::with('manager')->getOrPaginate();
        // $projects = Project::getOrPaginate();
        // return (new ApiResponse)->resource($projects);
    }

    /**
    * Display the specified resource.
    *
    * @param App\Modules\Project\Models\Project $project
    *
    * @return App\Modules\Project\Models\Project
    */
    public function show(Project $project){
        return $project->with('tasks')->findOrFail($project['id']);
    }

    /**
    * Store a newly created resource in storage.
    *
    * @return App\Modules\Project\Models\Project
    */
    public function store(ProjectRequest $request){
        $project = Project::create($request->all());
        return response()->json($project,201);
    }

    public function update(ProjectRequest $request, Project $project){
        $project->update($request->all());
        return response()->json($project,200);
    }

    public function destroy(Project $project){
        $project->delete();
        return 204;
    }
}
