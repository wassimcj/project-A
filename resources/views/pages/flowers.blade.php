@extends('layout.app')

@section('content')

   
    <h1>{{$title}}</h1>


@if(count($flowers) > 0)
<ul class="list-group">
    @foreach ($flowers as $flower)
    <li class="list-group-item">{{$flower}}</li>
    @endforeach
</ul>
@endif



    <p>here you can buy flowers</p>

    @endsection