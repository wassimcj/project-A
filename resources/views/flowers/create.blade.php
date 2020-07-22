@extends('layout.app')


@section ('content')
<h1> Create</h1>
    {!! Form::open(['action' => 'FlowersController@store', 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name' ,'Flower name')}}
        {{Form::text('name' ,'', ['class' => 'form-control', 'placeholder' => 'Flower name'])}}
         </div>
         {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection