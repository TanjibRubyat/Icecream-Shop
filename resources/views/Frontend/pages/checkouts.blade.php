@extends('frontend.layouts.master')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <table class="table table-striped mt-5" width="100%">
        
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>USER ID</th>
                    <th>PRODUCT ID</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Sub Total price</th>
                    
                </tr>
                @php
                    $total =0;
                @endphp
                @foreach($carts as $cart)
                <tr>
                    <td>{{$cart->id}}</td>
                    <td>{{$cart->user_id}}</td>
                    <td>{{$cart->product_id}}</td>
                    <td>{{$cart->product_quantity}}</td>
                    <td>{{$cart->product->price}} Tk</td>
                    @php 
                        $total += $cart->product_quantity * $cart->product->price;
                        $subtotal = $cart->product_quantity * $cart->product->price;
                    @endphp
                    <td>{{$subtotal}} Tk</td>
                    
                </tr>
                <tr>                   
                </tr>
                @endforeach
                
                <tr>
                    <td colspan="5"></td>
                    <td>Total - <strong>{{$total}} Tk</strong></td>
                </tr>
            </tbody>
           
        </table>
            </div>

            <div class="col-md-6 mt-5">
                <div class="card justify-content-center"">
                    <div class="card-header">
                        
                        <h3>Step 1 : Shipping Address</h3>
                    </div>
                        <div class="card-body">
                            @foreach(App\Models\Address::users() as $data)
                            <form action="{{route('checkouts.store')}}" method="post">
                            @csrf
                                <input class="border-radius border-width pl-3" type="hidden" name="user_id" value="{{$data->id}}">
                                @foreach($carts as $cart)
                                <input class="border-radius border-width pl-3" type="id" name="cart_id" value="{{$cart->id}}">
                                @endforeach
                                
                                <input class="border-radius border-width pl-3" type="text" name="name" value="{{$data->name}}"><br><br>
                                <input class="border-radius border-width pl-3" type="email" name="email" value="{{$data->email}}"><br><br>
                                <input class="border-radius border-width pl-3" type="string" name="address" placeholder="Address"><br><br>
                                <input class="border-radius border-width pl-3" type="text" name="city" placeholder="City"><br><br>
                                <input class="border-radius border-width pl-3" type="string" name="phone" placeholder="Phone"><br><br>
                                <button type="submit" class="btn btn-primary">Save</button>
                            </form>
                            @endforeach
                        </div>
                    
                </div>

            </div>
        </div>
    </div>


@endsection