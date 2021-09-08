@extends('backend.layouts.admin-master')

@section('content')

<div class="container mt-5 mb-0">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card mt-5">
                <div class="card-header">{{ __('Delete products') }}</div>
                    <div class="card-body">
                        <form action="{{route('admin.products.destroy',$item->id)}}" method="post">
                        @csrf
                            <p>Are you sure ?</p>
                            <button class="btn btn-primary" type="submit">Yes</button></a>
                            <a href="{{route('admin.products.manage')}}"><button class="btn btn-danger">No</button></a>
                        </form>
                    </div>
                </div>    
            </div>
        </div>
    </div>
</div>

@endsection