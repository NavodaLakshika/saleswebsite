@extends('layout.layout')


@section('content')
<div class="card" style="width: 18rem;">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title  navoda">Card title</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
      <a href="#" class="navoda">Go somewhere </a>
      <img src="{{asset('image/123.jpg')}}" style="width:5rem">
    </div>
  </div>
    
@endsection