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
<form action="{{}}" method="POST">
<div class="form-group">
<input type="text" class="form-control" name="name" placeholder="name">
</div>
<div class="form-group">
<textarea type="text-area" class="form-control" placeholder="description" cols="5" rows="5" name="description"></textarea>
</div>
<div class="form-group text-center">
<button type="submit" class="btn btn-success"> Create to do</button>
</div>
</form>
</div>
</div>
</div>
@endsection