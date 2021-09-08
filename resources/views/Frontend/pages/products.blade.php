@extends('Frontend.layouts.master')

@section('content')

<section class="our_section layout_padding">

  <div class="container">

    <div class="heading_container">
      <h2>
        <span>
          Our ice cream
        </span>
      </h2>
    </div>
    @include('backend.inc.admin-partials')
    @foreach($products as $product)
    <div class="row">
      <div class="our_container">
        <div class="box">

          <div class="img-box">

            <img src="{{asset('images')}}/{{$product->images}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              {{$product->product_name}}
            </h5>
            <p><b>
              {{$product->description}}
              </b>
            </p>

            @include('frontend.inc.addtocart')
          </div>

        </div>
      </div>
      @endforeach


    </div>
    </div>

</section>

@endsection