@extends('layouts.app')

@section('content')
  <h1>Todo List</h1>
  <div class="container col-md-6 col-sm-6">
  @if(count($todos) > 0)
    @foreach($todos as $todo)
      <div class="well">
        <h3><a href="todo/{{$todo->id}}">{{$todo->text}}</a>
          <br><br>
          <span class="label label-danger">{{$todo->due}}</span></h3>
      </div>
    @endforeach
  @endif
<div>
@endsection
