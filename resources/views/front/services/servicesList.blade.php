@extends('front.layout.main')
@section('content')
  <div id="company" class="main-content">
    <div class="container">
      <div class="row">
        <!-- Start Page-Content -->
        <div class="page-content col-lg-8 col-md-8 col-sm-8">
          <!-- Start Company-List-Header -->
          <div class="company-list-header clearfix">
            <h5 class="title"> {{trans('interface.'.$categorie->codeTitle)}} / {{trans('interface.'.$subcategory->codeTitle)}}</h5>
            @include('front.services.pag', ['paginator' => $serviceList])
          </div>
          <!-- End Company-List-Header -->
          <!-- Start Company-List -->
          <div class="company-list">
        @foreach($serviceList as $value)
            <div class="company-list-single">
              <div class="company-logo">
                @if(!empty($service->getServiceMineImages($value->id)->image))
                    <a href="/service/{{$value->id}}" ><img src='{{"/uploads/miny_".$service->getServiceMineImages($value->id)->image}}' alt=""></a>
                @else
                    <a href="/service/{{$value->id}}" ><img src='{{"/assets/front/img/logo-advert4.jpg"}}' alt=""></a>
                @endif
              </div>
              <div class="company-content">
                <h5 class="company-title"><a href="#">{{$value->title}} </a></h5>
                <p class="company-describe">{{$value->description}}</p>
                <a href="/service/{{$value->id}}" class="read_more"><i class="fa fa-arrow-circle-right"></i>Read More</a>
              </div>
            </div>
        @endforeach
          </div>
          <!-- End Company-List -->
          <!-- Start Company-List-Footer -->
          <div class="company-list-footer clearfix">
            @include('front.services.pag', ['paginator' => $serviceList])
          </div>
          <!-- End Company-List-Footer -->
        </div>
        <!-- End Page-Content -->
        <!-- Start Sidebar-Content -->
        <div class="sidebar-content col-lg-4 col-md-4 col-sm-4">
          <!-- Start Featured -->
          <div class="featured">
            <h5 class="title">Featured</h5>
            <div class="single-post">
              <div class="post-thumb">
                <a href="#"><img src="{{asset('/assets/front/img/logo-advert4.jpg')}}" alt=""></a>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                <a href="#" class="read_more">
                  <i class="fa fa-arrow-circle-right"></i>Read More
                </a>
              </div>
            </div>
            <div class="single-post">
              <div class="post-thumb">
                <a href="#"><img src="{{asset('/assets/front/img/logo-advert4.jpg')}}" alt=""></a>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                <a href="#" class="read_more">
                  <i class="fa fa-arrow-circle-right"></i>Read More
                </a>
              </div>
            </div>
          </div>
          <!-- End Featured -->
          <!-- Start Recently -->
          <div class="recently">
            <h5 class="title">Recently added</h5>
            <div class="single-post">
              <div class="post-thumb">
                <a href="#"><img src="{{asset('/assets/front/img/logo-advert4.jpg')}}" alt=""></a>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                <a href="#" class="read_more">
                  <i class="fa fa-arrow-circle-right"></i>Read More
                </a>
              </div>
            </div>
            <div class="single-post">
              <div class="post-thumb">
                <a href="#"><img src="{{asset('/assets/front/img/logo-advert4.jpg')}}" alt=""></a>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="#">Industrie LLC</a></h6>
                <p>Das ist wirklich interessant und ungewöhnlich, arbeiten wir für ist wirklich</p>
                <a href="#" class="read_more">
                  <i class="fa fa-arrow-circle-right"></i>Read More
                </a>
              </div>
            </div>
          </div>
          <!-- End Recently -->
          <!-- Start Adverts -->
          <div class="adverts">
            <div class="row">
              <div class="col-lg-6 col-md-6 col-xs-6">
                <a href="#"><img src="{{asset('/assets/front/img/sidebar_advert.png')}}" alt=""></a>
              </div>
              <div class="col-lg-6 col-md-6 col-xs-6">
                <a href="#"><img src="{{asset('/assets/front/img/sidebar_advert.png')}}" alt=""></a>
              </div>
            </div>
          </div>
          <!-- End Adverts -->
          <!-- Start Latest -->
          <div class="latest">
            <h5 class="title">Latest</h5>
            <div class="single-post">
              <div class="post-thumb">
                <a href="#"><img src="{{asset('/assets/front/img/latest_post.jpg')}}" alt=""></a>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="#">Blog title goes here</a></h6>
                <a href="#" class="read_more">
                  <i class="fa fa-arrow-circle-right"></i>Read More
                </a>
              </div>
            </div>
            <div class="single-post">
              <div class="post-thumb">
                <a href="#"><img src="{{asset('/assets/front/img/latest_post2.jpg')}}" alt=""></a>
              </div>
              <div class="post-content">
                <h6 class="post-title"><a href="#">Blog title goes here</a></h6>
                <a href="#" class="read_more">
                  <i class="fa fa-arrow-circle-right"></i>Read More
                </a>
              </div>
            </div>
          </div>
          <!-- End Latest -->
          <!-- Start Banner -->
          <div class="banner">
            <a href="#">
              <img src="{{asset('/assets/front/im')}}g/sidebar_banner.png" alt="">
            </a>
          </div>
          <!-- End Banner -->
        </div>
        <!-- End Sidebar-Content -->
      </div>
    </div>
  </div>
@endsection