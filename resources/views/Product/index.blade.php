@extends('layouts.app')

@section('content')
<div class="container">
    @if( session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif
    <div class="row justify-content-center">
        @foreach ($Products as $Product)
            <div class="col-md-4">
                <div class="card mb-2">
                    <img src="{{$Product->image}}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{$Product->title}}</h5>
                      <p class="card-text">{{$Product->price}} SR</p>
                      <a href="{{route('cart.add', $Product->id)}}" class="btn btn-primary">buy</a>
                    </div>
                  </div>
            </div>    
        @endforeach
    </div>
</div>
@endsection
