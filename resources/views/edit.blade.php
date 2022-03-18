@extends('main')
@section('container')
@if (session('success'))
<div class="alert-success">
    <p>{{ session('success') }}</p>
</div>
@endif

@if ($errors->any())
<div class="alert-danger">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error}}</li>
        @endforeach
    </ul>
</div>
@endif

<div class="col-lg-4">



       <form action="{{ url("todo",$todo->id) }}" method="POST">
           @csrf
           @method("PUT")
        <div class="input-group mb-3">
            <input name="task"  type="text" class="form-control" placeholder="add your task">
            <button class="btn btn-outline-secondary" type="submit">Add</button>
        </div>  

 </form> 
 </div>

 @endsection