@extends('layout.app')


@section ('content')
<h1> Create</h1>
    {!! Form::open(['action' => 'PerfumesController@store', 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name' ,'Perfume name')}}
        {{Form::text('name' ,'', ['class' => 'form-control', 'placeholder' => 'Perfume name'])}}
         </div>
         {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection