@extends('layout.app')

@section('content')
<h1>{{$title}}</h1>

    
@if(count($perfumes) > 0)
<ul class="list-group">
    @foreach ($perfumes as $perfume)
    <li class="list-group-item">{{$perfume}}</li>
    @endforeach
</ul>
@endif




    <p>here you can buy perfumes</p>
   
    @endsection
