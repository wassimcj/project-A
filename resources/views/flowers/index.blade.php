@extends('layout.app')
<ul class="nav navbar-nav navbar-right">
    <li>
      <a href="/flowers/create">Add flower</a>
    </li>
  </ul>

@section ('content')
<h1> Flowers</h1>
@if(count($flowers) > 0)

@foreach($flowers as $flowers)
<div class="well">
    
<h3><a href ="/flowers/{{$flowers->id}}"> {{$flowers->name}} </a></h3>

@endforeach
@else
<p>no flowers found</p>
@endif
</div>
<h6>delivery available in casablanca, rabat and tanger</h6>
@endsection