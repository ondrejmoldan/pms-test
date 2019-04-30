<?php

namespace App\Http\Controllers;

use App\Task;
use App\Project;

class ProjectTasksController extends Controller
{
    public function store(Project $project)
    {
        $attributes = request()->validate([
            'name' => ['required', 'min:3'],
            'description' => ['required', 'max:255']
        ]);
        $project->addTask($attributes);

        return back();
    }
}
