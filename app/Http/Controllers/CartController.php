<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $cart = [
        //     id => qty
        // ]

        // $products = [
        //     [
        //         id = 3,
        //         name => Mouse
        //     ]
        //      [
        //         id = 3,
        //         name => Cat
        //     ]
        // ]
        // dd(session('cart'));
        $products = Product::find(array_keys(session('cart')));
        $total = 0;

        // add the subtotal and compute for total price

        foreach($products as $product) {
            // insert quntity property
            $product->quantity = session("cart.$product->id");

            // compute and insert for subtotal property
            $product->subtotal = $product->price * $product->quantity;

            // update total price
            $total += $product->subtotal;
        }

        // foreach(session('cart') as $id => $value) {
        //     $product = Product::find($id);
        //     $product->quantity = session("cart.$id");
        //     $product->subtotal = $product->price * $product->quantity;
        //     $products[] = $product;
        //     $total += $product->subtotal;
        // }
        return view('carts.index')->with('products', $products)
            ->with('total', $total);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
               
        // first vaidate the quantity input
        $request->validate([

            'quantity' => 'required|integer|min:1'
        ]);


        // Route::put('/cart/{id}', function)
        // there's we go the id
        $quantity = $request->quantity;

        // to get id
        // $productId = $id;


        // store to session
        // $cart = [
        //     id => quantity
        // ]

        $request->session()->put("cart.$id", $quantity);

        // session('cart');

        return redirect(route('cart.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
