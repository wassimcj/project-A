@extends('layout.app')


@section ('content')
<h1> Create</h1>
    {!! Form::open(['action' => 'PostController@store', 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name' ,'Chocolat name')}}
        {{Form::text('name' ,'', ['class' => 'form-control', 'placeholder' => 'Chocolat name'])}}
         </div>
         {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection