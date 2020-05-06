@extends('layouts.app')

@section('content')
<div class="container col-md-4 col-sm-4">
  <a class="btn btn-default" href="/">Go Back</a>
  <h2><a href="todo/{{$todo->id}}">{{$todo->text}}</a></h2>
  <p>Due Date</p>
  <div class="label label-danger">{{$todo->due}}</div>
  <hr>
  <h3>Body</h3>
  <p>{{$todo->body}}</p>
  <br><br>
  <a href="/todo/{{ $todo->id }}/edit" class="btn btn-primary">Edit</a>
  {!! Form::open(['action' => ['TodosController@destroy', $todo->id] , 'method' => 'POST' , 'class'=>'pull-right']) !!}
       {{ Form::hidden('_method', 'DELETE' ) }}
       {{ Form::bsSubmit('Delete', ['class' => 'btn btn-danger']) }}
  {!! Form::close() !!}
</div>
@endsection
