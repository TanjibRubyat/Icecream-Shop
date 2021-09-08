@extends('backend.layouts.admin-master')

@section('content')

<div class="container mt-5 mb-0">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
        @include('backend.inc.admin-partials')
            <table class="table table-striped mt-5" width="100%">
            <tbody>
                <tr>
                    <th>User ID</th>
                    <th>Product Id</th>
                    <th>Cart ID</th>
                    <th>Customer Name</th>
                    <th>     Edit</th>
                </tr>
                @foreach($order as $orders)
                <tr>
                    <td>{{$orders->user_id}}</td>
                    <td>{{$orders->product_id}}</td>
                    <td>{{$orders->cart_id}}</td>
                    <td>{{$orders->customer_name}}</td>
                    
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection