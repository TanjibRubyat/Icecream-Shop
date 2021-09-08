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
                @foreach(App\Models\PaymentMethod::cart_item() as $cart)
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
                        
                        <h3>Step 2 : Payment Method</h3>
                    </div>
                        <div class="card-body">
            
                            <form action="{{route('payment.store')}}" method="post">
                            @csrf
                            @foreach(App\Models\PaymentMethod::getUser() as $user)
                                <input type="hidden" name="user_id" value="{{$user->user_id}}">
                            @endforeach
                            @foreach(App\models\PaymentMethod::cart_show() as $cart)
                                <input type="id" name="cart_id" value="{{$cart->id}}">
                            @endforeach
                                <select name="payment_method" id="">
                                <option value="">Select</option>
                                @foreach($pays as $pay) <!--From PaymentMethodController.php-->
                                    <option value="{{$pay->id}}">{{$pay->name}}</option>
                                @endforeach
                                </select><br><br>
                                <button class="btn btn-success" type="submit">Save</button>
                                
                            </form>
                            
                        </div>
                    
                </div>

            </div>
        </div>
    </div>

@endsection