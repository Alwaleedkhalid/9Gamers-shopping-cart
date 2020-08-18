<?php

namespace App\Http\Controllers;

use App\Product;
use App\cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Products = Product::all();
        
        return view('Product.index' ,compact('Products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addTocrat(Product $product)
    {
        if (session()->has('cart')) {
            $cart = new cart(session()->get('cart'));
        } else {
            $cart = new cart();
        }
            $cart->add($product);
            // dd($cart);
            session()->put('cart', $cart);
            
         return redirect()->route('product.index')->with('success', 'product was added');
    }
    
    public function ShowCart()
    {
        if (session()->has('cart')) {
            $cart = new cart(session()->get('cart'));
        } else {
            $cart = null;
        }
        
        return view('Cart.show', compact('cart'));
    }
    
    public function chekout($amount)
    {
        
        return view('cart.chekout', compact('amount'));
    }


    public function charge(Request $request)
    {
      
        //  return dd($request->stripeToken);
        $charge = Stripe::charges()->create([
            'currency' => 'USD',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => ' Test from laravel new app'
        ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...
            // clearn cart 

            session()->forget('cart');  
            return redirect()->route('store')->with('success', " Payment was done. Thanks");
        } else {
            return redirect()->back();
        }
    }
}
