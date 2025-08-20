<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TaskController extends Controller
{
    // menampilkan semua task milik user yang login
    public function myTasks()
    {
        $tasks = Task::where('user_id', Auth::id())->with('project')->get();
        return view('tasks.my', compact('tasks'));
    }

    // user update status task
    public function updateStatus(Request $request, Task $task)
    {
        // pastikan hanya user pemilik task yang bisa update
        if ($task->user_id !== Auth::id()) {
            abort(403, 'Unauthorized');
        }

        $request->validate([
            'status' => 'required|in:pending,in-progress,completed',
        ]);

        $task->update([
            'status' => $request->status
        ]);

        return redirect()->route('dashboard')->with('success', 'Task updated!');
    }
}

