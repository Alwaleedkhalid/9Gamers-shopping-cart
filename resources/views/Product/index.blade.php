@extends('layouts.app')

@section('content')
    {{-- @if( session()->has('success'))
        <div class="alert alert-success">{{ session()->get('success') }}</div>
    @endif --}}
    <div class="container">
        <div class="row">
                        @foreach ($Products as $Product)
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

@endsection
