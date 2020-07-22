@extends('layout.app')


@section ('content')
<h1> Edit</h1>
    {!! Form::open(['action' => ['PerfumesController@update', $perfume->id], 'method' => 'POST']) !!}
    <div class='form-group'>
        {{Form::label('name' ,'Perfume name')}}
        {{Form::text('name' ,$perfume->name, ['class' => 'form-control', 'placeholder' => 'perfume name'])}}
         </div>
         {{Form::hidden('_method','PUT')}}
         {{Form::submit('Submit', ['class' => 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection