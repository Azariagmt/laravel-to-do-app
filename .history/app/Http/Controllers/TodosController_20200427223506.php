<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Todo;

class TodosController extends Controller
{
    public function index(){
        $todos = Todo::all();
        return view('todos.index', [
            'todos' => $todos
        ]);
    }
    public function show($todoId){
      
        $todo = Todo::find($todoId);
        return view('todos.show',[
            'todo' => $todo
        ]);
    }
    public function new(){
        return view('todos.new');
    }
}
