<?php

namespace App\Modules\Project\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    public function showAllProjects(){
        $projects = Project::all();
        return $projects;
    }

    public function index(){
        $projects = Project::all();
        return $projects;
    }

    public function show(Project $project){
        return $project;
    }

    public function store(ProjectRequest $request){

        $project = Project::create($request->all());
        return response()->json([
            'success' => true,
            'data' => $project,
        ]);
    }

    public function update(ProjectRequest $request, Project $project){

        return response()->json([
            'success' => true,
            'data' => $project->update($request->all()),
          ]);
    }

    public function delete(Project $project){
        return response()->json([
            'success' => $project->delete(),
        ]);
    }
}
