@extends('front.layout.main')
@section('content')
<main class="site-main">
    <div class="container">
        <ol class="breadcrumb-page">
            <li><a href="/">Home </a></li>
            <li class="active"><a href="#">Detail</a></li>
        </ol>
    </div>
    <div class="container">
        <div class="product-content-single">
            <div class="row">
                <div class="col-md-4 col-sm-12 padding-right">
                    <div class="product-media">
                        <div class="image-preview-container image-thick-box image_preview_container">
                            <img id="img_zoom" data-zoom-image='{{"/uploads/thumb_".$serviceImges[0]["image"]}}' 
                                  src='{{"/uploads/thumb_".$serviceImges[0]["image"]}}' alt='{{$serviceImges[0]["image"]}}'>

                            <a href="#" class="btn-zoom open_qv"><i class="fa fa-search" aria-hidden="true"></i></a>
                        </div>
                        <div class="product-preview image-small product_preview">
                            <div id="thumbnails" class="thumbnails_carousel owl-carousel nav-style4" data-nav="true" data-autoplay="false" data-dots="false" data-loop="true" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":5},"600":{"items":5},"1000":{"items":5}}'>
                              @foreach($serviceImges as $serviceImg)
                                <a href="#" data-image='{{"/uploads/".$serviceImg["image"]}}' data-zoom-image='{{"/uploads/".$serviceImg["image"]}}'>
                                    <img src='{{"/uploads/thumb_".$serviceImg["image"]}}' alt="{{$serviceImg["image"]}}">
                                </a>
                              @endforeach
                                  
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="product-info-main">
                        <div class="product-name"><a href="">{{$service["title"]}}</a></div>
                        <div class="product-infomation">
                        </div>
                        <div class="product-description">
                           {{$service["description"]}}
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="product-info-price">
                        <span class="price">
                            <ins>${{$service['price']}}</ins>
                            <del>${{$service['oldPrice']}}</del>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="tab-details-product">
            <ul class="box-tab nav-tab">
                <li class="active"><a data-toggle="tab" href="#tab-1">Description</a></li>
            </ul>
            <div class="tab-container">
                <div id="tab-1" class="tab-panel active">
                    <div class="box-content">
                        <p> {{$service["description"]}}</p>
                    </div>
                </div>    
            </div>  
        </div> 
    </div>
</main><!-- end MAIN -->
@endsection