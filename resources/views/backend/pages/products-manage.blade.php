@extends('backend.layouts.admin-master')

@section('content')

<div class="container mt-5 mb-0">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-5">
        @include('backend.inc.admin-partials')
            <table class="table table-striped mt-5" width="100%">
            <tbody>
                <tr>
                    <th>Name</th>
                    <th>Images</th>
                    <th>Description</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>     Edit</th>
                </tr>
                @foreach($products as $product)
                <tr>
                    <td>{{$product->product_name}}</td>
                    <td><img src="{{asset('images')}}/{{$product->images}}"/></td>
                    <td>{{$product->description}}</td>
                    <td>{{$product->quantity}}</td>
                    <td>{{$product->price}}</td>
                    <td><button class="btn btn-primary"><a class="color" href="products-edit/{{$product->id}}">Edit</a></button>
                        <button class="btn btn-danger"><a class="color" href="{{route('admin.products.delete',$product->id)}}">Delete</a></button></td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@endsection