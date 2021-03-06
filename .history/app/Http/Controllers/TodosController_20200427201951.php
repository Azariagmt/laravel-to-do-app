<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        dd($todos);
        return view('todos.index', [
            'todos' => $todos
        ]);
    }
    public function show($todoId){
      
        $todo = Todo::find($todoId);
        dd($todo);
        return view('todos.show',[
            'todo' => $todo
        ]);
    }
}
