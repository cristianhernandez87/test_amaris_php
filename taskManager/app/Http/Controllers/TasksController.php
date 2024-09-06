<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TasksController extends Controller
{
    //

    public function store(Request $request) {
        dd('entrando');
        $request -> validate([
            'task_name' => 'required|max:255'
        ]);

        $task = new Task();
        $task -> task_name = $request -> task_name;
        $task -> save();

        return redirect() -> route('tasks') -> with('message', 'Task created successfully');
    }
}
