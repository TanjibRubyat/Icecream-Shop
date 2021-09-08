@extends('backend.layouts.admin-master')

@section('content')




<div class="container mt-5 mb-0">
    <div class="row justify-content-center">
        <div class="col-md-8 mt-3">
            <div class="card mt-5">
                <div class="card-header">{{ __('Create products') }}</div>
                <div class="card-body">
                @include('backend.inc.admin-partials')
                    <form action="{{route('admin.products.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="form-group row">
                            <label for="product_name" class="col-md-4 col-form-label text-md-right">Product name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="product_name">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">Product description</label>

                            <div class="col-md-6">
                                <textarea name="description" class="form-control" id="description" cols="30" rows="10"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="quantity" class="col-md-4 col-form-label text-md-right">Product quantity</label>

                            <div class="col-md-6">
                                <input id="quantity" type="numeric" class="form-control" name="quantity">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">Product price</label>

                            <div class="col-md-6">
                                <input id="price" type="numeric" class="form-control" name="price">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="images" class="col-md-4 col-form-label text-md-right">Product name</label>

                            <div class="col-md-6">
                                <input id="images" type="file" class="form-control" name="images">
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Upload') }}
                                </button>
                            </div>
                        </div>


                </div>
            </div>
        </div>
    </div>

    </form>
    @endsection