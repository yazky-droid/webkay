<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
      $projects =  Project::all();
      return view('projects.index',compact('projects'));
    }

    public function show(Request $request)
    {
        if(!$request->has('id') || !Project::where('id','=',$request->id)->exists() ){
            abort(404,'Page Not Found');
        }
        $project = Project::where('id','=',$request->id)->take(1)->get()[0];
        return view('projects.show',compact('project'));
    }

    public function landing()
    {
        $projects = Project::take(3)->get();
        return view("landing.index",compact('projects'));
    }
}
