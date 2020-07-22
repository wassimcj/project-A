@extends('layout.app')


@section ('content')
<h1> Edit</h1>
    {!! Form::open(['action' => ['FlowersController@update', $flower->id], 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name' ,'Flower name')}}
        {{Form::text('name' ,$flower->name, ['class' => 'form-control', 'placeholder' => 'Flower name'])}}
         </div>
         {{Form::hidden('_method','PUT')}}
         {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection