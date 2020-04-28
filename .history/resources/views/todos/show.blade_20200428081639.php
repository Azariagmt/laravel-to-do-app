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
        <a href="/todos/{{$todo->}}"></a>
        </div>
        </div>
@endsection