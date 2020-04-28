@extends('layouts')
@section('content')
       <div class="container">
        <div class="card card-default">
        <div class="card-header">
        <h1 class="text-center my-5">To dos</h1>
        </div>
        <div class="card-body">
        @if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif
        <ul class="list-group">
        @foreach($todos as $todo)
         <li class="list-group-item">
         {{$todo->name}}
         <a href="/todos/{{$todo->id}}" class="btn btn-sm btn-warning  float-right">View</a>

         <a href="/todos/{{$todo->id}}" class="btn btn-sm btn-primary float-right">View</a>
          </li>
        @endforeach
        </ul>
</div>
</div>
</div>
@endsection