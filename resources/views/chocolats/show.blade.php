@extends('layout.app')


@section ('content')
<a href="/chocolats" class="btn btn-primary ">Go back</a>
<h1> {{$chocolat->name}}</h1>
<hr>
<a href="/chocolats/{{$chocolat->id}}/edit" class="btn btn-primary"> Edit</a>

{!!Form::open(['action' => ['PostController@destroy',$chocolat->id],'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}
@endsection