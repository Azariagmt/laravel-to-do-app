<?php

use Illuminate\Support\Facades\Route;
use App\Todo;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/todos', 'TodosController@index')->name('todos');

Route::get('todos/{todo}', 'TodosController@show')->name('todo');

Route::get('/new-to-do', 'TodosController@new')->name('new');

Route::post('/new', 'TodosController@create')->name('new');

Route::get('/todos/{todo}/edit', 'TodosController@edit')->name('edit');

Route::post('/todos/{todo}/update-todos', 'TodosController@update')->name('update');

Route::get('/todos/{todo}/delete',function(Todo $todo){
    $todo->delete();
    return redirect('/todos')->with('status', 'Todo deleted!');
});

Route::