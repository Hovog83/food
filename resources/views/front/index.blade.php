@extends('front.layout.main')
@section('content')

<main class="site-main">
    <div class="block-section-1 ">
        <div class="col-xs-12" style="padding: 0">
            <img src="/assets/front/assets/images/banerHome.jpg">
        </div>
    </div>
    <div class="block-top-categori">
        <div class="container">
            <div class="title-of-section">Categories</div>
              <div class="col-xs-12">
                @foreach($catLIst as $key => $value)
                  <div class="col-xs-12 col-sm-6 col-lg-4">
                    <div class="block-top-categori-item" >
                        <a href="/en/categories/{{$value['codeTitle']}}"><img src="{{$value['icone']}}" style="height: 350px; width: auto;" alt="c1" ></a>
                        <div class="block-top-categori-title">{{$value['name']}}</div>
                    </div>
                  </div>
                @endforeach
              </div>
        </div>
    </div>

<br>
<br>
<br>
    <div class="block-section-6">
        <div class="container">                    
            <div class="promotion-banner box-single style-2">
                <a href="" class="banner-img"><img src="/assets/front/assets/images/home3/background-product.jpg" alt="banner-3"></a>
            </div>
        </div>
    </div>
    <main class="site-main contact-us">
        <div class="container">
            <div class="row">
                <div class="contact-map full-width">
                    <a href=""><img src="/assets/front/assets/images/map.jpg" alt="map"></a>
                </div>
                <form class="form-contact" action="#" method="post">
                    <div class="col-md-5">
                        <div class="contact-info">
                            <h5 class="title-contact">Leave a Message</h5>
                            <p class="form-row form-row-wide">
                                <label>Name<span class="required">*</span></label>
                                <input type="text" value="" name="text" placeholder="Fist name" class="input-text">
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Email<span class="required">*</span></label>
                                <input type="email" value="" name="text" placeholder="Fist name" class="input-text">
                            </p>
                            <p class="form-row form-row-wide">
                                <label>Number Phone<span class="required"></span></label>
                                <input type="text" value="" name="text" placeholder="Fist name" class="input-text">
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <p class="form-row form-row-wide form-text">
                            <label>Comment<span class="required"></span></label>
                            <textarea aria-invalid="false" class="textarea-control" rows="5" cols="40" name="message"></textarea>
                        </p>
                        <p class="form-row">
                            <input type="submit" value="Submit" name="Submit" class="button-submit">
                        </p>
                    </div>
                </form>
                <div class="col-md-3 contact-detail">
                    <h5 class="title-contact">Contact Detail</h5>
                    <div class="contacts-info ">
                        <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                        <h4 class="title-info">Email</h4>
                        <div class="info-detail"> Support1@Techmini.com</div>
                    </div>
                    <div class="contacts-info ">
                        <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                        <h4 class="title-info">Phone</h4>
                        <div class="info-detail">0123-465-789-111</div>
                    </div>
                    <div class="contacts-info ">
                        <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                        <h4 class="title-info">Mail Office</h4>
                        <div class="info-detail">Sed ut perspiciatis unde omnis Street Name, Los Angeles</div>
                    </div>
                </div>
            </div>
        </div>
    </main><!-- end MAIN -->
</main><!-- end MAIN -->

@endsection
