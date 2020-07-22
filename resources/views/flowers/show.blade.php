@extends('layout.app')


@section ('content')
<a href="/flowers" class="btn btn-primary ">Go back</a>
<h1> {{$flower->name}}</h1>
<hr>
<a href="/flowers/{{$flower->id}}/edit" class="btn btn-primary"> Edit</a>

{!!Form::open(['action' => ['FlowersController@destroy',$flower->id],'method' => 'POST', 'class' => 'pull-right'])!!}
{{Form::hidden('_method', 'DELETE')}}
{{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
{!!Form::close()!!}

@endsection