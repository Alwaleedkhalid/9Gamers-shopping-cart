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
                                    <p class="card-text">{{$product['price']}} SAR</p>
                                    <form action="{{ route('product.update',$product['id'])}}" method="post">
                                        @csrf
                                        @method('put')
                                        <input type="text" name="qty" id="qty" value="{{$product['qty']}}">
                                        <button type="submit" class="btn btn-secondary btn-sm">Change</button>

                                    </form>
                                    <form action="{{ route('product.remove', $product['id'] )}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm ml-4 float-right" style="margin-top: -27px;">delete</button>
                                    </form>
                                </div>
                            </div>
                            </div>
                        </div>
                    @endforeach
                    <p><strong>Total : {{$cart->totalPrice}} SAR</strong></p>
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
                                Total Amount is {{$cart->totalPrice}} SAR
                                </p>
                                <p>
                                Total Quantities is {{$cart->totalQty}}
                                </p>
                                <a href="{{ route('cart.chekout' , $cart->totalPrice)}}" class="btn btn-primary btn-sm">Chekout</a>
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