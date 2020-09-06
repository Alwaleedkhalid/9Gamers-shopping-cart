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

<div class="container">
	<div class="row">
    @foreach ($latestProduct as $Product)
		<div class="col-md-4">
      <a href="{{route('cart.add', $Product->id)}}">
        <div class="profile-card-2"><img src="{{$Product->image}}" class="card-img-top">
          {{-- <div class="profile-name">{{$Product->title}}</div> --}}
          <div class="profile-name">{{$Product->price}} SR</div>
          <div class="profile-username"><i class="fas fa-shopping-cart"></i> Add To Cart</div>
          </a>
      </div>
  </div>
  @endforeach



	</div>
</div>
@endsection
