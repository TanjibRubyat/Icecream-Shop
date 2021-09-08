@extends('Frontend.layouts.master')

@section('content')

<section class=" slider_section position-relative">
      <a href="" class="btn-img">
        <img src="{{asset('frontend_assets/images/btn-img.png')}}" alt="">
      </a>

      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <div class="slider_number-container ">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">01</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1">02</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2">03</li>
            <li data-target="#carouselExampleIndicators" data-slide-to="3">04</li>
          </ol>
          <div class="number-box">
            <span>
              /04
            </span>
          </div>
        </div>

        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1>
                      Ice <br>
                      Cream <br>
                      Shop
                    </h1>
                    <p>
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua
                    </p>
                    <div>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('frontend_assets/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1>
                      Ice <br>
                      Cream <br>
                      Shop
                    </h1>
                    <p>
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua
                    </p>
                    <div>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('frontend_assets/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1>
                      Ice <br>
                      Cream <br>
                      Shop
                    </h1>
                    <p>
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua
                    </p>
                    <div>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('frontend_assets/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item ">
            <div class="container-fluid">
              <div class="row">
                <div class="col-lg-4 offset-lg-2 col-md-5 offset-md-1">
                  <div class="detail_box">
                    <h1>
                      Ice <br>
                      Cream <br>
                      Shop
                    </h1>
                    <p>
                      consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et dolore magna aliqua
                    </p>
                    <div>
                      <a href="">Buy Now</a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="img-box">
                    <img src="{{asset('frontend_assets/images/slider-img.png')}}" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </section>
    <!-- end slider section -->
  </div>

  <!-- our ice cream section -->
  <section class="our_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Our ice cream
          </span>
        </h2>
      </div>
      <div class="our_container">
        <div class="box">
          <div class="img-box">
            <img src="{{asset('frontend_assets/images/ice-1.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Coffee Ice Cream
            </h5>
            <p>
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <a href="">
              See More
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('frontend_assets/images/ice-2.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Mix Ice Cream
            </h5>
            <p>
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <a href="">
              See More
            </a>
          </div>
        </div>
        <div class="box">
          <div class="img-box">
            <img src="{{asset('frontend_assets/images/ice-3.png')}}" alt="">
          </div>
          <div class="detail-box">
            <h5>
              Fruit Ice Cream
            </h5>
            <p>
              adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
              veniam, quis nostrud
            </p>
            <a href="">
              See More
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end our ice cream section -->

  <!-- about section -->
  <section class="about_section layout_padding-bottom">
    <div class="bg-img">
      <img src="images/about-bg.png" alt="">
    </div>
    <div class="container">
      <div class="about_container">
        <div class="row">
          <div class="col-lg-5 col-md-6">
            <div class="img-box">
              <img src="images/about-img.png" alt="">
            </div>
          </div>
          <div class="col-lg-7 col-md-6 ">
            <div class="detail-box">
              <div class="heading_container">
                <h2>
                  <span>
                    About
                  </span>
                </h2>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end about section -->


  <!-- shop section -->
  <section class="shop_section layout_padding">
    <div class="container">
      <h2>
        Best Ice Cream Flavours <br>
        In <br>
        Shop
      </h2>
      <p>
        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
        magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
      </p>
      <a href="">
        Order Now
      </a>
    </div>
  </section>

  <!-- end shop section -->

  <!-- blog section -->

  <section class="blog_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Blog
          </span>
        </h2>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/blog-img.jpg" alt="">
              <div class="img_date">
                <h6>
                  02 <br>
                  FEB <br>
                  2020
                </h6>
              </div>
            </div>
            <div class="detail-box">
              <h4>
                consectetur adipiscing elit, sed
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="box">
            <div class="img-box">
              <img src="images/blog-img.jpg" alt="">
              <div class="img_date">
                <h6>
                  02 <br>
                  FEB <br>
                  2020
                </h6>
              </div>
            </div>
            <div class="detail-box">
              <h4>
                consectetur adipiscing elit, sed
              </h4>
              <p>
                Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
              </p>
              <a href="">
                Read More
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- end blog section -->

  <!-- client section -->

  <section class="client_section layout_padding-bottom">
    <div class="bg-img">
      <img src="images/client-bg.png" alt="">
    </div>
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            what is says our customer
          </span>
        </h2>
      </div>
      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <div class="row">
              <div class="col-md-6">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client-1.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      <span>
                        Eiusmod
                      </span>
                      <img src="images/quote.png" alt="">
                    </h6>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client-2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      <span>
                        Tempor
                      </span>
                      <img src="images/quote.png" alt="">
                    </h6>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client-1.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      <span>
                        Eiusmod
                      </span>
                      <img src="images/quote.png" alt="">
                    </h6>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client-2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      <span>
                        Tempor
                      </span>
                      <img src="images/quote.png" alt="">
                    </h6>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <div class="row">
              <div class="col-md-6">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client-1.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      <span>
                        Eiusmod
                      </span>
                      <img src="images/quote.png" alt="">
                    </h6>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="box">
                  <div class="img-box">
                    <img src="images/client-2.png" alt="">
                  </div>
                  <div class="detail-box">
                    <h6>
                      <span>
                        Tempor
                      </span>
                      <img src="images/quote.png" alt="">
                    </h6>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore et
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel_btn-container">
          <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>

    </div>
  </section>
  <!-- end client section -->

  <!-- contact section -->
  <section class="contact_section layout_padding">
    <div class="bg-img">
      <img src="images/contact-bg.png" alt="">
    </div>
    <div class="container">
      <div class="heading_container">
        <h2>
          <span>
            Request A Call Back
          </span>
        </h2>
      </div>
      <div class="layout_padding">
        <div class="row">
          <div class="col-md-6 ">
            <form action="">
              <div class="contact_form-container">
                <div>
                  <div>
                    <input type="text" placeholder="Name" />
                  </div>
                  <div>
                    <input type="email" placeholder="Email" />
                  </div>
                  <div>
                    <input type="text" placeholder="Phone Number" />
                  </div>
                  <div class="mt-5">
                    <input type="text" placeholder="Message" />
                  </div>
                  <div class="mt-5">
                    <button type="submit">
                      Send
                    </button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          <div class="col-md-6">
            <div class="map_container">
              <div class="map-responsive">
                <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyA0s1a7phLN0iaD6-UE7m4qP-z21pH0eSc&q=Eiffel+Tower+Paris+France" width="600" height="300" frameborder="0" style="border:0; width: 100%; height:100%" allowfullscreen></iframe>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- end contact section -->


  <!-- offer section -->

  <div class="offer_section">
    <div class="container">
      <div class="offer_container">
        <div class="btn-box">
          <a href="">Buy Now</a>
        </div>
        <div class="detail-box">
          <h2>
            <span>
              50%
            </span>
            Offer on Every Ice Cream
          </h2>
        </div>
        <div class="img-box">
          <img src="images/offer-img.png" alt="">
        </div>
      </div>
    </div>
  </div>

  <!-- end offer section -->


  <!-- info section -->
  <section class="info_section ">
    <div class="container">
      <div class="info_container">
        <div class="info_social">
          <div class="d-flex justify-content-center">
            <h3 class="">
              Contact Us
            </h3>
          </div>
          <div class="social_box">
            <a href="">
              <img src="images/fb.png" alt="">
            </a>
            <a href="">
              <img src="images/twitter.png" alt="">
            </a>
            <a href="">
              <img src="images/linkedin.png" alt="">
            </a>
            <a href="">
              <img src="images/instagram.png" alt="">
            </a>
          </div>
        </div>
        <div class="info_form">
          <form action="">
            <input type="text" id="email2" placeholder="Enter Your Email">
            <button>
              subscribe
            </button>
          </form>
        </div>
        <div class="info_contact layout_padding2">
          <div class="row">
            <div class="col-md-4">
              <a class="link-box">
                <div class="img-box">
                  <img src="images/location.png" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    No.123 Chalingt Gates, loram ipusm
                  </h6>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a class="link-box">
                <div class="img-box">
                  <img src="images/phone.png" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    +01 1234567890
                  </h6>
                </div>
              </a>
            </div>
            <div class="col-md-4">
              <a class="link-box">
                <div class="img-box">
                  <img src="images/mail.png" alt="">
                </div>
                <div class="detail-box">
                  <h6>
                    demo@gmail.com
                  </h6>
                </div>
              </a>
            </div>
          </div>



        </div>
      </div>
    </div>
  </section>

  <!-- end info_section -->

@endsection