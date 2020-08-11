@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    My Cart
                </h1>
            </div>
        </div>

        {{-- alert start --}}
        <div class="alert alert-info alert-dismissible fade show text-center" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
          <strong>Your cart is empty!</strong> 
        </div>
        
        <script>
          $(".alert").alert();
        </script>
        {{-- alert end --}}

        <div class="row">
            <div class="col-12">
                {{-- start cart table --}}

                <table class="table">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Price</th>
                            <th>Subtotal</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- start item row --}}
                        @foreach($products as $product)
                        <tr>
                            <td scope="row">{{$product->name}}</td>
                            <td>{{$product->quantity}}</td>
                            <td>&#8369; {{number_format($product->price,2)}}</td>
                            <td>&#8369; {{number_format($product->subtotal,2)}}</td>
                            <td>
                                <a href="#" class="btn btn-sm btn-outline-danger">Remove</a>
                            </td>
                        </tr>
                        @endforeach
                        {{-- end item row --}}
                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="3" class="text-right">Total</td>
                            <td><strong>&#8369; {{number_format($total,2)}}</strong></td>
                            <td>
                                <a href="#" class="btn btn-sm w-100 btn-success">Checkout</a>
                                <a href="#" class="btn btn-sm btn-success w-100 my-1">Login to checkout</a>
                            </td>
                        </tr>
                    </tfoot>
                </table>

                {{-- end cart table --}}
            </div>
        </div>

        {{-- clear cart --}}
        <div class="row">
            <div class="col-12">
                <a href="#" class="btn btn-sm btn-outline-danger">Clear Cart</a>
            </div>
        </div>

    </div>
    
@endsection