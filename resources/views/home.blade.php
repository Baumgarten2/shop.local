@extends('layouts.master')

@section('title')
Home Page
@endsection

@section('content')

@foreach($products->chunk(3) as $productChunk)
   <div class="card-group">
       @foreach($productChunk as $product)
       <div class="col-sm-6 col-md-4">
         <div class="card border-secondary mb-3" style="max-width: 20rem;">
              <img class="card-img-top" src="{{$product->image}}" alt="Card image cap">
              <div class="card-body text-secondary">
              <h4 class="card-title">{{$product->title}}</h4>
              <p class="card-text">{{$product->description}}</p>


              <div class="pull-left price">${{$product->price}}</div>
              <a href="№" class="btn btn-primary pull-right">Go somewhere</a>
            </div>
          </div>
       </div>
      @endforeach
  </div>
@endforeach
<!--
<div class="row">
<div class="col-sm-6 col-md-4">
<div class="card border-secondary mb-3" style="max-width: 20rem;">
  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/10/12/01/01/car-1733256__340.jpg" alt="Card image cap">
  <div class="card-body text-secondary">
    <h4 class="card-title">Secondary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="clearfix">
    <a href="№" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div class="card border-secondary mb-3" style="max-width: 20rem;">
  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/10/12/01/01/car-1733256__340.jpg" alt="Card image cap">
  <div class="card-body text-secondary">
    <h4 class="card-title">Secondary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="clearfix">
    <a href="№" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>

<div class="col-sm-6 col-md-4">
<div class="card border-secondary mb-3" style="max-width: 20rem;">
  <img class="card-img-top" src="https://cdn.pixabay.com/photo/2016/10/12/01/01/car-1733256__340.jpg" alt="Card image cap">
  <div class="card-body text-secondary">
    <h4 class="card-title">Secondary card title</h4>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    <div class="clearfix">
    <a href="№" class="btn btn-primary">Go somewhere</a>
    </div>
  </div>
</div>
</div>
</div>
-->
@endsection
