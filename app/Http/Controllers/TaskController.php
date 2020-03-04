<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\TaskRequest;
use App\Models\Task;


class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::orderBy('created_at', 'asc')->get();

        return view('tasks', [
            'tasks' => $tasks
        ]);
    }

    public function create()
    {
        return view('tasks');
    }


    public function store(TaskRequest $request)
    {
        $task = new Task();
        $task->name = $request->name;
        $task->save();

        return redirect()->route('tasks.index')->with([
            'success' => __('messages.success') . " " . $task->name,
        ]);
    }

    public function show($id)
    {
        //
    }

     public function edit($id)
    {
        //
    }

    public function update(TaskRequest $request, $id)
    {
        //
    }

     public function destroy(Task $task)
    {
        $task->delete();

        return redirect()->route('tasks.index');

    }

}
