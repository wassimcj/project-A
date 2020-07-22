@extends('layout.app')


@section ('content')
<a href="/perfumes" class="btn btn-primary ">Go back</a>
<h1> {{$perfume->name}}</h1>
<hr>
<a href="/perfumes/{{$perfume->id}}/edit" class="btn btn-primary"> Edit</a>

{!!Form::open(['action' => ['PerfumesController@destroy',$perfume->id],'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection