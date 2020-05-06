@extends('layouts.app')

@section('content')
  <h1>Create Todo</h1>
  <div class="container col-md-6 col-sm-6 well">
  {!! Form::open(['action' => 'TodosController@store', 'method' => 'POST']) !!}
    {{ Form::bsText('text') }}
    {{ Form::bsTextArea('body') }}
    {{ Form::bsText('due') }}
    {{ Form::bsSubmit('Submit', ['class' => 'btn btn-primary']) }}
  {!! Form::close() !!}
</div>
@endsection
