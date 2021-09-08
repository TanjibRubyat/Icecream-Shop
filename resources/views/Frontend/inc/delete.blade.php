@extends('frontend.layouts.master')

@section('content')

<div class="container mt-5 mb-0">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card mt-5">
                <div class="card-header">{{ __('Delete cart items') }}</div>
                    <div class="card-body">
                        <form action="{{route('cart.destroy',$cart->id)}}" method="post">
                        @csrf
                            <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

@endsection