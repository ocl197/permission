<?php

namespace OliverCharlesLowe\Permission\Http\Controllers;

use Illuminate\Routing\Controller;
use OliverCharlesLowe\Permission\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        return view('permission::tasks.index', compact('tasks'));
    }
    public function store(Request $request)
    {
        $task = Task::create($request->all());
        return redirect()->route('permission.tasks.index');
    }
    public function edit(Task $task)
    {
        return view('permission::tasks.edit', compact('task'));
    }
    public function update(Request $request, Task $task)
    {
        $task->update($request->all());
        return redirect()->route('permission.tasks.index');
    }
    public function destroy(Task $task)
    {
        $task->delete();
        return redirect()->route('permission.tasks.index');
    }
}
