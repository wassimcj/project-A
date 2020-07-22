@extends('layout.app')
<ul class="nav navbar-nav navbar-right">
    <li>
      <a href="/perfumes/create">Add perfume</a>
    </li>
  </ul>

@section ('content')
<h1> Perfumes</h1>
@if(count($perfumes) > 0)

@foreach($perfumes as $perfumes)
<div class="well">

<h3><a href ="/perfumes/{{$perfumes->id}}"> {{$perfumes->name}} </a></h3>

@endforeach
@else
<p>no perfumes found</p>
@endif
</div>
<h6>delivery available in casablanca only</h6>
@endsection