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
    public function create(){
        $this->validate(request(),[
            'name'=>'required',
            'description' =>'required'
        ]);
        $data = request()->all();
        $todo = new Todo();
        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;
        $todo->save();

        return redirect('/todos');
    }
}
