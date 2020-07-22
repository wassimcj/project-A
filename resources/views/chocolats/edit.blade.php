@extends('layout.app')


@section ('content')
<h1> Edit</h1>
    {!! Form::open(['action' => ['PostController@update', $chocolat->id], 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name' ,'Chocolat name')}}
        {{Form::text('name' ,$chocolat->name, ['class' => 'form-control', 'placeholder' => 'Chocolat name'])}}
         </div>
         {{Form::hidden('_method','PUT')}}
         {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection