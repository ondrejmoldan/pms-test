<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Task;

class TasksController extends Controller
{
    public function index()
    {

    }

    public function create()
    {

    }

    public function show(Task $task)
    {
        return view('tasks.show', compact('task'));
    }

    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }

    public function update(Task $task)
    {
        $task->update(request(['name', 'description']));
        return redirect('/tasks');
    }

    public function destroy(Task $task)
    {

    }

    public function store()
    {

    }
}
