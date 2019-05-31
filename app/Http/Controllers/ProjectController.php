<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Project;

class ProjectController extends Controller
{
    //
    public function index()
    {
    	$project=Project::all();

    	// return $project; //to return json data
    	return view('Project.project',[
    		'project'=> $project
    	]);
    }
    public function create()
    {
    	return view('Project.createProject');
    }
    public function store()
    {
    	$project= new Project();
    	$project->title= request('title');
    	$project->description=request('description');
    	$project->save();

    	return redirect('/project');
    }
    public function update($id)
    {

        $project=Project::find($id);
        $project->title=request("title");
        $project->description=request("description");

        $project->save();

        return redirect('/project');

    }
    public function destroy($id)
    {
        Project::find($id)->delete();
        return redirect('/project');
    }
    public function edit($id) 
    {
    	$project=Project::findorfail($id);  // or fail give the 404 error
    	return view('Project.edit',compact('project'));
    }
    public function show($id)
    {
        $project=Project::find($id);
        return $project;
    }
}
