@extends('layout.app')
<ul class="nav navbar-nav navbar-right">
    <li>
      <a href="/chocolats/create">Add chocolat</a>
    </li>
  </ul>


@section ('content')
<h1> Chocolats</h1>
@if(count($chocolats) > 0)

@foreach($chocolats as $chocolats)
<div class="well">
    
<h3><a href ="/chocolats/{{$chocolats->id}}"> {{$chocolats->name}} </a></h3>

@endforeach



@else
<p>no chocolats found</p>
@endif
</div>
<h6>delivery available in casablanca and rabat</h6>
@endsection