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
                    @foreach(App\Models\Order::cart_view() as $cart)
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

                    @endforeach


                    <tr>
                    </tr>


                    <tr>
                        <td colspan="5"></td>
                        <td>Total - <strong>{{$total}} Tk</strong></td>
                    </tr>
                </tbody>

            </table>

        </div>
        <div class="col-md-6 mt-5">
            <div class="card justify-content-center"">
                    <div class=" card-header">
                @include('backend.inc.admin-partials')
                <h3>Step 3 : Confirmation</h3>
            </div>
            <div class="card-body">
                <form action="{{route('confirm.orders')}}" method="post">
                    @csrf
                    @foreach(App\Models\Order::cart_view() as $cart)
                    <input type="hidden" name="user_id" value="{{$cart->user_id}}">
                    <input type="hidden" name="product_id" value="{{$cart->product_id}}">
                    <input type="hidden" name="cart_id" value="{{$cart->id}}">
                    @endforeach

                    @foreach(App\Models\Order::getUser() as $user)
                    <input type="hidden" name="customer_name" value="{{$user->name}}">
                    @endforeach

                    <button class="btn btn-primary" type="submit">Confirm</button>
                </form>
            </div>

        </div>

    </div>


</div>
</div>

@endsection