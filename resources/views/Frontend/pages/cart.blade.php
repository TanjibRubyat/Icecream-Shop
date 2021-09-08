@extends('frontend.layouts.master')

@section('content')

<div class="container">
    <div class="row">
        <table class="table table-striped mt-5" width="100%">
        @include('backend.inc.admin-partials')
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>USER ID</th>
                    <th>PRODUCT ID</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Sub Total price</th>
                    <th> Edit</th>
                </tr>
                @php
                    $total =0;
                @endphp
                @foreach($carts as $cart)
                <tr>
                    <td>{{$cart->id}}</td>
                    <td>{{$cart->user_id}}</td>
                    <td>{{$cart->product_id}}</td>
                    <td><form action="{{route('cart.quantity',$cart->id)}}" method="post">
                    @csrf
                    <input type="number" name="product_quantity" value="{{$cart->product_quantity}}">
                    <button class="btn btn-primary" type="submit">Update</button>
                    </form>        
                    </td>
                    <td>{{$cart->product->price}} Tk</td>
                    @php 
                        $total += $cart->product_quantity * $cart->product->price;
                        $subtotal = $cart->product_quantity * $cart->product->price;
                    @endphp
                    <td>{{$subtotal}} Tk</td>
                    <td><button class="btn btn-danger"><a class="black"  href="{{route('cart.destroy',$cart->id)}}">Remove item</a></button></td>
                </tr>
                <tr>                   
                </tr>
                @endforeach
                
                <tr>
                    <td colspan="5"></td>
                    <td>Total - <strong>{{$total}} Tk</strong></td>
                </tr>
                
                <div class="pr-1 mt-5">
                <a href="{{route('checkouts.index')}}"><button class="btn btn-lg btn-success">Checkout</button></a>
                </div> 
                <div class="mt-5">
                <button type="button" class="btn btn-lg btn-dark">Continue shopping</button>   
                </div> 
                 
                     
            </tbody>
           
        </table>
         
    </div>
</div>


@endsection