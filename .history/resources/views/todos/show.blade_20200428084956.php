@extends('layouts')
@section('content')
<div class="container">
<h1 class="text-center my-5">
        {{$todo->name}}
        </h1>
        <div class="card card-default">
        <div class="card-header">
        Description
        </div>
        <div class="card-body">
        {{$todo->description}}
        </div>
        <div class="card-body">
        <a href="/todos/{{$todo->id}}/edit" class="btn btn-info btn-sm my-5">Edit</a>
        <a href="/todos/{{$todo->id}}/delete" class="btn btn-danger btn-sm my-5">Delete</a>

       </div>
        </div>
        </div>
@endsection