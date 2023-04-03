@extends('user.header_footer')
@section('index_body')

<div class="container">
  <div class="row">
  @foreach($res as $value)
  <div class="col-sm-4">
  <div class="card " style="width:100%;height:500px ">

    <img class="card-img-top" src="/image/{{$value->image}}" alt="Card image" width=90% height="260px">
    <div class="card-body">

      <h4 class="card-title">{{$value->name}}</h4>
      <p class="card-text">{{$value->price}}</p>
      <p class="card-text">{{$value->description}}</p>
      <p class="card-text">{{$value->productid}}</p>
      <a href="/booking/{{$value->id}}" class="btn btn-primary stretched-link">Book Now</a>
    </div>
  </div>
  </div>
  @endforeach
  </div>
</div>

@endsection