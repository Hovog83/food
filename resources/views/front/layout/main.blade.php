            @include('front.layout.main_header')

            <!-- Start Header -->
            <header id="header">
              <div class="header-inner">

                <!-- Start Login-Shadow -->
                <div id="login-shadow"></div>
                <!-- End Login-Shadow -->

                <div class="container">

                  <!-- Start Utility-Nav-->

                  <nav class="utility-nav clearfix">
                    <ul class="utility-user custom-list">
                    @if(!empty(Layout::getUserAuth()))
                    <li id="">
                      <a href="/account"  class="btn btn-default">
                        <i class="fa fa-user"></i>
                        <span>{{trans('interface.my_account')}}</span>
                      </a>
                    </li>                    
                    <li id="">
                      <a href="/classifieds"  class="btn btn-default">
                        <i class="fa fa-plus"></i>
                        <span>{{trans('interface.classifieds')}}</span>
                      </a>
                    </li>
                    @else
                      <li id="login">
                        <a href="#" id="login-link" class="btn btn-default">
                          <i class="fa fa-power-off"></i>
                          <span>Login</span>
                        </a>
                        <form id="login-form" action="#" class="login-form default-form" method="post">
                          <div class="login-form-container">
                            <p class="form-row">
                              <input type="text" placeholder="Login">
                            </p>
                            <p class="form-row">
                              <input type="password" placeholder="Password">
                            </p>
                            <p class="form-row">
                            <p class="form-row">
                              <button class="submit-btn btn">Login</button>
                            </p>
                            <a href="#" class="password btn btn-default">Forgot Password</a>
                          </div>
                        </form>
                      </li>

                      <li id="register">
                        <a href="#pricing" class="btn btn-default">
                          <i class="fa fa-plus-circle"></i>
                          <span>Register</span>
                        </a>
                      </li>
                    @endif
                    </ul>

                    <div class="utility-social">
                      <ul class="social-inner custom-list">
                        <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                        <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                        <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                        <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                        <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                        <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                      </ul>
                    </div>
                  </nav>
                  <!-- End Utility Nav -->
                  <!-- Start Search Nav -->
                  <nav class="search-nav">
                    <button class="advanced-search-button">
                      <i class="fa fa-align-justify"></i>
                    </button>

                    <ul class="sub-menu custom-list">
                      <li><a href="#"><i class="fa fa-globe"></i>General Search</a></li>
                      <li><a href="#"><i class="fa fa-briefcase"></i>Companies</a></li>
                      <li><a href="#"><i class="fa fa-plane"></i>Events</a></li>
                      <li><a href="#"><i class="fa fa-gift"></i>Products & Services</a></li>
                      <li><a href="#"><i class="fa fa-file-o"></i>Blogs</a></li>
                    </ul>

                    <form action="http://188.226.173.21/metrodirhtml/index.html" class="default-form">
                      <input type="text" placeholder="Search...">
                      <button><i class="fa fa-search"></i></button>
                    </form>
                  </nav>
                  <!-- End Search Nav -->

                  <!-- Start Menu Nav -->
                  <div class="menu-nav row">

                    <!-- Start Logo -->
                    <div class="logo col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <a href="/"><img src="{{asset('/assets/front/img/logo.png')}}" alt="logo"></a>
                    </div>
                    <!-- End Logo -->
                    @include('front.layout.main_nav_top')
                    <!-- Start Nav -->
                    <!-- End Nav -->
                    <!-- Start Search Nav Mobile -->

                    <!-- End Nav-Wrapper Mobile -->
                  </div>
                  <!-- End Menu Nav -->
                  <!-- Responsive Menu Buttons -->
                  <button class="search-toggle button"><i class="fa fa-search"></i></button>
                    
                  <button class="navbar-toggle button"><i class="fa fa-bars"></i></button>
                  <!-- End Responsive Menu Buttons -->
                </div>
              </div>
            </header>
            <!-- End Header -->
            <div class="page-heading">
                <div class="container">
                  <h5>Industry LLC</h5>
                  <ul class="breadcrumbs custom-list">
                    <li><a href="index-2.html">Home</a></li>
                    <li>
                      <a href="#">Cars,</a>
                    </li>
                    <li><a href="company-without-map.html">Industry LLC</a></li>
                  </ul>
                </div>
              </div>
@yield('content')
          <footer id="footer">
            <div class="container">
              <div class="row">
                <!-- Start Footer-Top -->
                <div class="footer-top">
                  <div class="widget col-lg-3 col-md-3 col-sm-12 col-xs-12">
                    <h5 class="widget-title">About Us</h5>
                    <div class="widget-description"><p>Donec venenatis, turpis vel hendrerit interdum, dui ligula ultricies purus, sed posuere libero dui id orci. Nam congue, pede vitae dapibus aliquet, elit  magna vulputate arcu, vel tempus metus leo non est. Etiam sit amet lectus quis est congue mollis.</p></div>
                  </div>
                  <div class="widget col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <h5 class="widget-title">Recent tweets</h5>
                    <div id="twitter-feed" class="block-content">
                      <a class="twitter-timeline"  href="https://twitter.com/uouapps" data-widget-id="377042022453899264">Tweets by @uouapps</a>
                    </div>
                  </div>
                  <div class="widget col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <h5 class="widget-title">Recent Posts</h5>
                    <ul class="news custom-list">
                      <li><a href="#">Blog Post Title goes here</a></li>
                      <li><a href="#">Blog Post Title goes here</a></li>
                      <li><a href="#">Blog Post Title goes here</a></li>
                    </ul>
                  </div>
                  <div class="widget col-lg-3 col-md-3 col-sm-4 col-xs-12">
                    <h5 class="widget-title">Flickr Feed</h5>
                    <div id="flickr-feed" class="block-content">52617155@N08</div>
                  </div>
                </div>
                <!-- End Footer-Top -->
              </div>
            </div>
            <!-- End Container -->
            <!-- Start Footer Copyrights -->
            <div class="footer-copyrights">
              <div class="container">
                <div class="row">
                  <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12"><p>Copyright © 2014 UOU Apps</p></div>
                  <div class="col-lg-8 col-md-6 col-sm-6 col-xs-12">
                    <ul class="social pull-right custom-list">
                      <li><a href="#" class="facebook"><i class="fa fa-facebook"></i></a></li>
                      <li><a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a></li>
                      <li><a href="#" class="twitter"><i class="fa fa-twitter"></i></a></li>
                      <li><a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                      <li><a href="#" class="pinterest"><i class="fa fa-pinterest"></i></a></li>
                      <li><a href="#" class="dribbble"><i class="fa fa-dribbble"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
            <!-- End Footer Copyrights -->
          </footer>
  <!-- End Footer -->
        </div>
        @include('front.layout.main_scripts')

        @yield('scripts', '')
    </body>
</html>
