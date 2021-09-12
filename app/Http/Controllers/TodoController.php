<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Todo;

class TodoController extends Controller
{
    //
    public function index()
    {
        $task = Todo::all();
        return view('todo.index', ['tasks' => $task]);
    }

    public function showCreateView()
    {
        return view('todo.create');
    }

    public function creteTask()
    {
        request()->validate([
            'todo' => 'required'
        ]);
        Todo::create([
            'todo' => request('todo')
        ]);

        return redirect('/');
    }
}