<?php

namespace App\Http\Controllers;

use App\Project;

class ProjectsController extends Controller
{
    public function index() {

      $projects = Project::all();


      return view('projects.index', ['projects' => $projects]);


    }

    public function show(Project $project) {

      return view('projects.show', compact('project'));

    }

    public function create() {

      return view('projects.create');

    }

    public function store() {

      request()->validate([
        'title' => ['required', 'min:3'],
        'description' => ['required', 'min:3']
      ]);

      Project::create(request(['title', 'description']));

      return redirect('/projects');

    }

    public function edit(Project $project) {


    //  dd($project->title);

      return view('projects.edit', compact('project'));

    }

    public function update(Project $project) {
      $project->update(request(['title', 'description']));

      return redirect('/projects');
    }

    public function destroy(Project $project) {

    //  dd('hedllo '.$id);
      $project->delete();

      return redirect('/projects');

    }

}
