@extends('')
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
        </div>
        </div>
        <script src="" async defer></script>
    </body>
</html>