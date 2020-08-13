<?php

namespace App\Http\Controllers;

use App\Transaction;
use App\Product;
use Illuminate\Http\Request;
use Str;
use Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {    


       $transactions = Transaction::all();



        return view('transactions.index')->with('transactions', $transactions);

         

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
        // get the details needed
        $transaction = new Transaction;

        // transaction_code
        $transaction->transaction_code = strtoupper(Str::random(10));

        // total
        $transaction->total = 0;

        // user_id
        $transaction->user_id = Auth::user()->id;

        // save transaction to database
        $transaction->save();

        // populate the pivot table
        // query to database to get the products
        $products = Product::find(array_keys(session('cart')));

        // compute the subtotal
        foreach($products as $product) {
            $product->quantity = session("cart.$product->id");
            $product->subtotal = $product->price * $product->quantity;
            $transaction->total += $product->subtotal;

        // query to database (product_transaction)
            $transaction->products()->attach($product->id, [

                'quantity' => $product->quantity,
                'subtotal' => $product->subtotal,
                'price' => $product->price
            ]);
        }

        $transaction->save();

        // this will clear cart
        session()->forget('cart');

        return redirect(route('transactions.show', $transaction->id));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {
               

        
        return view('transactions.show')->with('transaction', $transaction);
            

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
