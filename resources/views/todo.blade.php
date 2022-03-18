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

@extends('main')
@section('container')
<div class="col-lg-4">



       <form action="{{ url("todo") }}" method="POST">
           @csrf
        <div class="input-group mb-3">
            <input name="task"  type="text" class="form-control" placeholder="add your task">
            <button class="btn btn-outline-secondary" type="submit">Add</button>
        </div>  

 </form> 

 <ul class="list-group">
     @foreach ($todos as $todo)
     <li class="list-group-item d-flex justify-content-between align-items-center">
      <p style="width: 150px;margin:0">{{ $todo->task }}</p>
      <div class="row">
      <div class="col">
          <a href="todo/{{ $todo->id  }}/edit" class="btn btn-warning">edit</a>
      </div>
      <div class="col">
          <form method="POST" action="{{url("todo",$todo->id)}}">
              @csrf
              @method("Delete")
              <button class="btn btn-danger">hapus</button>
              </div>
            </form>
      </div>

     </li>
     @endforeach
 </ul>
 </div>

 @endsection