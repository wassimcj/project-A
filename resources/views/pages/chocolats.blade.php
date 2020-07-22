@extends('layout.app')

@section('content')
<h1>{{$title}}</h1>


@if(count($chocolats) > 0)
<ul class="list-group">
    @foreach ($chocolats as $chocolat)
    <li class="list-group-item">{{$chocolat}}</li>
    @endforeach
</ul>
@endif



    <p>here you can buy chocolat</p>
   
    @endsection
