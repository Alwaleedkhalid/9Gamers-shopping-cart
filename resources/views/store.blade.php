@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        @foreach ($latestProduct as $Product)
            <div class="col-md-4">
                <div class="card">
                    <img src="{{$Product->image}}" class="card-img-top">
                    <div class="card-body">
                      <h5 class="card-title">{{$Product->title}}</h5>
                      <p class="card-text">{{$Product->price}} SR</p>
                      <a href="#" class="btn btn-primary">buy</a>
                    </div>
                  </div>
            </div>    
        @endforeach
    </div>
</div>
@endsection
