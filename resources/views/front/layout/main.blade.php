@include('front.layout.main_header')
  <body>
  <!-- Preloader -->
  <div id="pageLoading">
    <div class="bouncing">
      <em class="icon-food"></em>
    </div>
  </div>
<div id="wrapper" class="home-page">
 <header id="header">
  <div class="container">
    <div class="rst-table">
      <div class="rst-table-row">
        <a href="index-2.html" class="rst-logo rst-table-cell"><img src="{{asset('/assets/front/img/logo-home.png')}}" alt="" /></a>
        <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <div class="rst-nav-menu collapse navbar-collapse bs-navbar-collapse rst-table-cell">
          <form class="rst-search-mobie" action="http://themeforces.com/">
            <button class="rst-submit"><i class="fa fa-search"></i></button>
            <input type="text" value="" />
          </form>
          <ul class="rst-main-menu">
            <li class="current-menu-item"><a href="/">Home</a></li>
            <li class="">
              <a href="#">Pages</a>
            </li>
            <li><a href="menu.html">Menu</a></li>
          </ul>
        </div>
        <div class="rst-account rst-table-cell">
          <div class="rst-cart">
            <a href="#" class="rst-cart-icon"><span>+</span></a>
            <div class="rst-form-login rst-cart-info">
              <div class="rst-list-product">
                <div class="rst-product-item">
                  <a href="#">Sashimi &amp; vasabi <span class="count">2</span> <span class="price">$20</span></a>
                </div>
                <div class="rst-product-item">
                  <a href="#">Dinner menu <span class="count">2</span> <span class="price">$25</span></a>
                </div>
                <div class="rst-product-item">
                  <a href="#">Salade menu <span class="count">2</span> <span class="price">$25</span></a>
                </div>
              </div>
              <div class="rst-checkout">
                <a href="checkout.html" class="btn btn-success btn-sm">Check out</a>
                <span class="price">$70</span>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
 </header>  
 <!-- Hero Sliders -->
 <div id="main-slider">
  <div class="owl-carousel owl-theme">
    <div class="item active"><!-- Item Slider #1 -->
      <div id="slider-item-1" class="slider-content">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="rst-table">
                <div class="rst-table-row">
                  <div class="rst-table-cell" style="width: 50%">
                    
                  </div>
                  <div class="rst-table-cell" style="width: 50%">
                    <img src="{{asset('/assets/front/img/post/slider3.png')}}" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="owl-main" src="{{asset('/assets/front/img/post/slides02.jpg')}}" alt="" />
    </div>
    <div class="item"><!-- Item Slider #2 -->
      <div id="slider-item-2" class="slider-content">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="rst-table">
                <div class="rst-table-row">
                  <div class="rst-table-cell" style="width: 50%;vertical-align: bottom;">
                    <img src="{{asset('/assets/front/img/post/people.png')}}" alt="" />
                  </div>
                  <div class="rst-table-cell" style="width: 50%">
                    <div class="text-right">

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="owl-main" src="{{asset('/assets/front/img/post/slides03.jpg')}}" alt="" />
    </div>
    
    <div class="item"><!-- Item Slider #5 -->
      <div id="slider-item-3" class="slider-content">
        <div class="container">
          <div class="row">
            <div class="col-sm-10 col-sm-offset-1">
              <div class="rst-table">
                <div class="rst-table-row">
                  <div class="rst-table-cell" style="width: 25%">
                    
                  </div>
                  <div class="rst-table-cell" style="width: 50%">
                    <div class="rst-slider-menu">
                      <img src="{{asset('/assets/front/img/post/bg_slider.jpg')}}" alt="" />
                      <h3>Menu</h3>
                      <p class="description-heading">Traditional or classic</p>
                      <h5>Neapolitan pizza</h5>
                      <p class="rst-price">$19.95</p>
                      <h5>Premium pizza </h5>
                      <p class="rst-price">$22</p>
                      <h5>Classic pizza</h5>
                      <p class="rst-price">$19.95</p>
                      <h5>artisan pizza</h5>
                      <p class="rst-price">$19.95</p>
                    </div>
                  </div>
                  <div class="rst-table-cell" style="width: 25%">
                    
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <img class="owl-main" src="{{asset('/assets/front/img/post/slides04.jpg')}}" alt="" />
    </div>
  </div>
 </div><!-- end Hero Sliders -->
 @yield('content')

@include('front.layout.main_scripts')

    </body>
</html>
