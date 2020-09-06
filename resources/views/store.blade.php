@extends('layouts.app')

@section('content')
<div class="container">

    {{-- <div class="jumbotron">
        <h1 class="display-4">9 Gamers Store </h1>
        <p class="lead">This is a beta v for Store </p>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="{{route('product.index')}}" role="button">Learn more</a>
    </div>
    <div class="row justify-content-center">
        @foreach ($latestProduct as $Product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{$Product->image}}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{$Product->title}}</h5>
                      <p class="card-text">{{$Product->price}} SR</p>
                      <a href="{{route('cart.add', $Product->id)}}" class="btn btn-primary">buy</a>
                    </div>
                  </div>
            </div>    
        @endforeach
    </div> --}}

</div>

<div class="container_product">
    <div class="overlay">
      <div class = "items"></div>
      <div class = "items head">
        <p>Flower Embroidery Hoop Art</p>
        <hr>
      </div>
      <div class = "items price">
        <p class="old">$699</p>
        <p class="new">$345</p>
      </div>
      <div class="items cart">
        <i class="fas fa-shopping-cart"></i>
        <span>ADD TO CART</span>
    </div>
  </div>
  </div>
@endsection
