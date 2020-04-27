@extends('layouts')

@section('content')
<h1 class="text-center">
Create a to do
</h1>
<div class="row justify-content-center">
<div class="card card-default">
<div class="card-header">
Create a to do
</div>
<div class="card-body">
<form action="">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="name">
</div>
<div class="form-group">
<textarea type="text-area" class="form-control" cols="30" row="10" name="description"></textarea>
</div>
</form>
</div>
</div>
</div>
@endsection