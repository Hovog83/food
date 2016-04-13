@extends('front.layout.main')
@section('content')
  <div id="slider">
    <div class="container">
      <div class="tp-banner-container">
        <div class="tp-banner">
          <ul>
            <!-- SLIDE  -->
            <li data-transition="fade" data-slotamount="7" data-masterspeed="1500" >
              <!-- MAIN IMAGE -->
              <img src="{{asset('/assets/front/img/metrodir-slides-1.jpg')}}" data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" alt="">
            </li>
            <!-- SLIDE  -->
            <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
              <!-- MAIN IMAGE -->
              <img src="{{asset('/assets/front/img/metrodir-slides-2.jpg')}}" data-bgposition="center" data-bgfit="cover" data-bgrepeat="no-repeat" alt="">
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="main-content">
    <!-- Start Categories-List -->
    <div class="categories list">
      <div class="container">
        <div class="row">
        @foreach($catLIst as $value)

          <div class="category-box col-lg-4 col-md-4 col-sm-6">
            <header class="category-header realestate clearfix">
              <a href="/services/{{$value["id"]}}">
                <div class="category-icon"><i class="{{$value["icone"]}}"></i></div>
                <div class="category-title">
                  <h5>{{trans('interface.'.$value["codeTitle"])}}</h5>
                  <strong class="count">(6)</strong>
                </div>
              </a>
            </header>
            <div class="category-list">
              <ul class="custom-list">
                @foreach($value["get_sub"] as $key => $val)
                <li>
                <a href="/services/{{$value["id"]}}/{{$val["id"]}}" title=""><i class="{{$val["icone"]}}"></i>{{trans('interface.'.$val["codeTitle"])}}</a>
                </li>
                @endforeach
              </ul>
            </div>
          </div>
        @endforeach

        </div>
      </div>
    </div>
    <!-- End Categories-List -->
    
    <!-- Start Companies-Sliders -->
    <div class="companies-sliders">
      <div class="container">

        <!-- Start Featured-Companies-Slider -->
        <h5 class="companies-slider-title">Featured Companies</h5>
        <div class="row">
          <div class="companies-slider featured">
            <div class="company-box col-lg-3">
              <div class="company-rating">
                <ul class="custom-list">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
              <div class="overlay">
                <img src="{{asset('/assets/front/img/company-thumb2.jpg')}}" alt="">
                <div class="overlay-shadow">
                  <div class="overlay-content">
                    <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                  </div>
                </div>
              </div>
              <div class="white-bottom">
                <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                <ul class="company-tags custom-list clearfix">
                  <li><a href="#">Category</a></li>
                </ul>
              </div>
            </div>
            <div class="company-box col-lg-3">
              <div class="company-rating">
                <ul class="custom-list">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
              <div class="overlay">
                <img src="{{asset('/assets/front/img/company-thumb3.jpg')}}" alt="">
                <div class="overlay-shadow">
                  <div class="overlay-content">
                    <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                  </div>
                </div>
              </div>
              <div class="white-bottom">
                <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                <ul class="company-tags custom-list clearfix">
                  <li><a href="#">Category</a></li>
                </ul>
              </div>
            </div>
            <div class="company-box col-lg-3">
              <div class="company-rating">
                <ul class="custom-list">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
              <div class="overlay">
                <img src="{{asset('/assets/front/img/company-thumb4.jpg')}}" alt="">
                <div class="overlay-shadow">
                  <div class="overlay-content">
                    <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                  </div>
                </div>
              </div>
              <div class="white-bottom">
                <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                <ul class="company-tags custom-list clearfix">
                  <li><a href="#">Category</a></li>
                </ul>
              </div>
            </div>
            <div class="company-box col-lg-3">
              <div class="company-rating">
                <ul class="custom-list">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
              <div class="overlay">
                <img src="{{asset('/assets/front/img/company-thumb5.jpg')}}" alt="">
                <div class="overlay-shadow">
                  <div class="overlay-content">
                    <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                  </div>
                </div>
              </div>
              <div class="white-bottom">
                <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                <ul class="company-tags custom-list clearfix">
                  <li><a href="#">Category</a></li>
                </ul>
              </div>
            </div>
            <div class="company-box col-lg-3">
              <div class="company-rating">
                <ul class="custom-list">
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                  <li><i class="fa fa-star"></i></li>
                </ul>
              </div>
              <div class="overlay">
                <img src="{{asset('/assets/front/img/company-thumb6.jpg')}}" alt="">
                <div class="overlay-shadow">
                  <div class="overlay-content">
                    <a href="#" class="btn"><i class="fa fa-arrow-circle-right"></i>Read More</a>
                  </div>
                </div>
              </div>
              <div class="white-bottom">
                <h6 class="company-title"><a href="#">Company name goes here</a></h6>
                <ul class="company-tags custom-list clearfix">
                  <li><a href="#">Category</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- End Featured-Companies-Slider -->

        <!-- Start Latest-Companies-Slider -->
        <h5 class="companies-slider-title">Latest Companies</h5>
        <div class="companies-slider latest">
          <div class="company-slide">
            <div class="company-logo">
              <a href="#"><img src="{{asset('/assets/front/img/logo-advert1.jpg')}}" alt=""></a>
            </div>
            <div class="company-content">
              <h5 class="company-title"><a href="#">Industrie LLC</a></h5>
              <ul class="company-tags custom-list clearfix">
                <li><a href="#">Cars, </a></li>
                <li><a href="#">Education, </a></li>
                <li><a href="#">Industry</a></li>
              </ul>
              <p class="company-describe">Das ist wirklich interessant und ungewöhnlich, arbeiten wir für Sie. Vielen Dank an alle, die an ihn und machen das Beste Glocal Katalog in der Welt.</p>
              <a href="#" class="btn btn-default"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
          </div>

          <div class="company-slide">
            <div class="company-logo">
              <a href="#"><img src="{{asset('/assets/front/img/logo-advert2.jpg')}}" alt=""></a>
            </div>
            <div class="company-content">
              <h5 class="company-title"><a href="#">Industrie LLC</a></h5>
              <ul class="company-tags custom-list clearfix">
                <li><a href="#">Cars, </a></li>
                <li><a href="#">Education, </a></li>
                <li><a href="#">Industry</a></li>
              </ul>
              <p class="company-describe">Das ist wirklich interessant und ungewöhnlich, arbeiten wir für Sie. Vielen Dank an alle, die an ihn und machen das Beste Glocal Katalog in der Welt.</p>
              <a href="#" class="btn btn-default"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
          </div>

          <div class="company-slide">
            <div class="company-logo">
              <a href="#"><img src="{{asset('/assets/front/img/logo-advert3.jpg')}}" alt=""></a>
            </div>
            <div class="company-content">
              <h5 class="company-title"><a href="#">Industrie LLC</a></h5>
              <ul class="company-tags custom-list clearfix">
                <li><a href="#">Cars, </a></li>
                <li><a href="#">Education, </a></li>
                <li><a href="#">Industry</a></li>
              </ul>
              <p class="company-describe">Das ist wirklich interessant und ungewöhnlich, arbeiten wir für Sie. Vielen Dank an alle, die an ihn und machen das Beste Glocal Katalog in der Welt.</p>
              <a href="#" class="btn btn-default"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
          </div>

          <div class="company-slide">
            <div class="company-logo">
              <a href="#"><img src="{{asset('/assets/front/img/logo-advert2.jpg')}}" alt=""></a>
            </div>
            <div class="company-content">
              <h5 class="company-title"><a href="#">Industrie LLC</a></h5>
              <ul class="company-tags custom-list clearfix">
                <li><a href="#">Cars, </a></li>
                <li><a href="#">Education, </a></li>
                <li><a href="#">Industry</a></li>
              </ul>
              <p class="company-describe">Das ist wirklich interessant und ungewöhnlich, arbeiten wir für Sie. Vielen Dank an alle, die an ihn und machen das Beste Glocal Katalog in der Welt.</p>
              <a href="#" class="btn btn-default"><i class="fa fa-arrow-circle-right"></i>Read More</a>
            </div>
          </div>

        </div>
        <!-- End Latest-Companies-Slider -->

      </div>
    </div>
    <!-- End Companies-Sliders -->
    
    <!-- Start Subscribe -->
    <div id="pricing" class="subscribe">
      <div class="container">
        <div class="row">

          <!-- Start Pricing-Plans -->
          <div class="pricing-plans">
            <h5 class="pricing-title col-lg-12">Pricing Plans</h5>

            <div class="pricing-plan col-lg-3 col-md-3 col-sm-6">
              <h5 class="pricing-label start">Start</h5>
              <div class="pricing-value">
                <span class="pricing-unit">$</span>
                <span class="pricing-cost">10</span>
                <span class="pricing-cost-upper">00</span>
              </div>
              <ul class="pricing-include custom-list">
                <li>1 Company</li>
                <li>1 Post</li>
                <li>1 Event</li>
                <li>1 Product</li>
                <li>Can rate company</li>
                <li>Period of use Unlimited</li>
              </ul>
            </div>

            <div class="pricing-plan col-lg-3 col-md-3 col-sm-6">
              <h5 class="pricing-label silver">Silver</h5>
              <div class="pricing-value">
                <span class="pricing-unit">$</span>
                <span class="pricing-cost">19</span>
                <span class="pricing-cost-upper">00</span>
              </div>
              <ul class="pricing-include custom-list">
                <li>1 Company</li>
                <li>1 Post</li>
                <li>1 Event</li>
                <li>1 Product</li>
                <li>Can rate company</li>
                <li>Period of use Unlimited</li>
              </ul>
            </div>

            <div class="pricing-plan col-lg-3 col-md-3 col-sm-6">
              <h5 class="pricing-label gold">Gold</h5>
              <div class="pricing-value">
                <span class="pricing-unit">$</span>
                <span class="pricing-cost">29</span>
                <span class="pricing-cost-upper">00</span>
              </div>
              <ul class="pricing-include custom-list">
                <li>1 Company</li>
                <li>1 Post</li>
                <li>1 Event</li>
                <li>1 Product</li>
                <li>Can rate company</li>
                <li>Period of use Unlimited</li>
              </ul>
            </div>

            <div class="pricing-plan col-lg-3 col-md-3 col-sm-6">
              <h5 class="pricing-label premium">Premium</h5>
              <div class="pricing-value">
                <span class="pricing-unit">$</span>
                <span class="pricing-cost">49</span>
                <span class="pricing-cost-upper">00</span>
              </div>
              <ul class="pricing-include custom-list">
                <li>1 Company</li>
                <li>1 Post</li>
                <li>1 Event</li>
                <li>1 Product</li>
                <li>Can rate company</li>
                <li>Period of use Unlimited</li>
              </ul>
            </div>

          </div>
          <!-- End Pricing-Plans -->

          <!-- Start Register -->
          <div class="register">
            <h5 class="register-title col-lg-12">Register</h5>
            <form action="http://188.226.173.21/metrodirhtml/index.html" class="default-form">
              <div class="register-step col-lg-6 col-md-6 col-sm-12">
                <h5 class="register-step-title">Step 1: Register</h5>
                <div class="register-step-inner">
                  <h5>Login Details</h5>
                  <input type="text" placeholder="Login">
                  <input type="text" placeholder="E-Mail">
                </div>
              </div>
              <div class="register-step col-lg-6 col-md-6 col-sm-12">
                <h5 class="register-step-title">Step 2: Package</h5>
                <div class="register-step-inner">
                  <h5>Choose package:</h5>
                  <span class="radio-input">
                    <input id="start" type="radio" name="filter_type" value="start">
                    <label for="start">Start (10 USD)</label>
                  </span>
                  <span class="radio-input">
                    <input id="silver" type="radio" name="filter_type" value="silver">
                    <label for="silver">Silver (19 USD)</label>
                  </span>
                  <span class="radio-input">
                    <input id="gold" type="radio" name="filter_type" value="gold">
                    <label for="gold">Gold (29 USD)</label>
                  </span>
                  <span class="radio-input">
                    <input id="premium" type="radio" name="filter_type" value="premium">
                    <label for="premium">Premium (49 USD)</label>
                  </span>
                </div>
              </div>
              <div class="register-step subscribe-final col-lg-12">
                <div class="register-step-inner">
                  <a href="#" class="btn btn-secondary"><i class="fa fa-arrow-circle-right"></i>Subscribe</a>
                </div>
              </div>
            </form>
          </div>
          <!-- End Register -->

        </div>
      </div>
    </div>
    <!-- End Subscribe -->
      
    <!-- Start Partners -->
    <div class="partners">
      <div class="container">
        <h5 class="partners-title">Our Partners</h5>
        <div class="partners-slider">
          <div class="partner-logo">
            <img src="{{asset('/assets/front/img/partner.jpg')}}" alt="">
          </div>
          <div class="partner-logo">
            <img src="{{asset('/assets/front/img/partner.jpg')}}" alt="">
          </div>
          <div class="partner-logo">
            <img src="{{asset('/assets/front/img/partner2.jpg')}}" alt="">
          </div>
          <div class="partner-logo">
            <img src="{{asset('/assets/front/img/partner3.jpg')}}" alt="">
          </div>
          <div class="partner-logo">
            <img src="{{asset('/assets/front/img/partner4.jpg')}}" alt="">
          </div>
          <div class="partner-logo">
            <img src="{{asset('/assets/front/img/partner6.jpg')}}" alt="">
          </div>
        </div>
      </div>
    </div>
    <!-- End Partners -->

  </div>
@endsection
