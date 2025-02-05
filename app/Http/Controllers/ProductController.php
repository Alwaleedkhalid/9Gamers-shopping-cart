<?php

namespace App\Http\Controllers;

use App\Product;
use App\cart;
use Cartalyst\Stripe\Laravel\Facades\Stripe;
// use RealRashid\SweetAlert\Facades\Alert;
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
        if (session('success')) {

            toast(session('success'),'success');
        }

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
     
        $request->validate([
            'qty' => 'required|numeric|min:1'
        ]);
        
        $cart = new Cart(session()->get('cart'));
        $cart->updateQty($product->id, $request->qty);
        session()->put('cart', $cart);

        return redirect()->route('cart.show')->with('success', 'Product updated');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $cart = new Cart( session()->get('cart'));
        $cart->remove($product->id);

        if( $cart->totalQty <= 0 ) {
            session()->forget('cart');
        } else {
            session()->put('cart', $cart);
        }

        return redirect()->route('cart.show')->with('success', 'Product was removed');
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
            
         return redirect()->back()->with('success', 'product was added');
    }
    
    public function ShowCart()
    {

        if (session()->has('cart')) {
            $cart = new cart(session()->get('cart'));
        } else {
            $cart = null;
        }

        if (session('success')) {

            toast(session('success'),'success');
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
            'currency' => 'SAR',
            'source' => $request->stripeToken,
            'amount'   => $request->amount,
            'description' => ' Test from laravel new app'
        ]);

        $chargeId = $charge['id'];

        if ($chargeId) {
            // save order in orders table ...
            auth()->user()->orders()->create([
                'cart' => serialize( session()->get('cart'))
            ]);
            
            // clearn cart 

            session()->forget('cart');  
            return redirect()->route('store')->with('success', " Payment was done. Thanks");
        } else {
            return redirect()->back();
        }
        
    }
}
