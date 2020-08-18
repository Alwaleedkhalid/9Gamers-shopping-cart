@extends('layouts.app')

@section('content')
    <div class="container">
        @if ($cart)      
            <div class="row">
                <div class="col-8">
                    @foreach ($cart->items as $product)
                        <div class="card mb-3" style="max-width: 540px;">
                            <div class="row no-gutters">
                            <div class="col-md-4">
                                <img src="{{$product['image']}}" class="card-img" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{$product['title']}}</h5>
                                    <p class="card-text">$ {{$product['price']}}</p>
                                    <input type="text" name="qty" id="qty" value="{{$product['qty']}}">
                                    <a href="#" class="btn btn-primary btn-sm">Change</a>
                                    <a href="#" class="btn btn-danger btn-sm">Delete</a>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                    <p><strong>Total : $ {{$cart->totalPrice}}</strong></p>
                </div>


                <div class="col-4">
                    <div class="card bg-light text-dark">
                        <div class="card-body">
                            <h3 class="card-titel">
                                Your Cart
                                <hr>    
                            </h3>
                            <div class="card-text">
                                <p>
                                Total Amount is ${{$cart->totalPrice}}
                                </p>
                                <p>
                                Total Quantities is {{$cart->totalQty}}
                                </p>
                                <a href="#" class="btn btn-primary btn-sm">Chekout</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <p>No Item Yet !</p>    
        @endif
    </div>
@endsection