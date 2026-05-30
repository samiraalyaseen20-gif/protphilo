<?php

namespace App\Http\Controllers;

use App\Models\Project;

class ProjectController extends Controller
{
    /**
     * Display the project details page.
     */
    public function show(Project $project)
    {
        $project->load('images');
        return view('project-show', compact('project'));
    }
}
