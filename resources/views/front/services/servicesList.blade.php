@extends('front.layout.main')
@section('content')
  <div class="container">
      <div class="row">
         <div class="col-xs-3 col-sm-3 ">
           <div class="main-content">
           <div class="promotion-banner style-3">
             <div class="block-top-categori">
           
             </div>
           </div>
               <div class="toolbar-products">
                   <div class="title-of-section">Categories</div>
                     <div class="col-xs-12">
                       @foreach($catLIst as $key => $value)
                         <div class="col-xs-12 ">
                           <div class="block-top-categori-item" >
                               <a href="/en/categories/{{$value['codeTitle']}}"><img src="{{$value['icone']}}" style="max-height: 350px; width: auto;" alt="c1" ></a>
                               <div class="block-top-categori-title">{{$value['name']}}</div>
                           </div>
                         </div>
                       @endforeach
                     </div>
               </div>
           </div>
         </div>
          <div class="col-md-9 col-sm-9 ">
              <div class="main-content">
                  <div class="promotion-banner style-2">
                    <div class="block-top-categori">
                    </div>
                  </div>
                  <div class="toolbar-products">
                      <h4 class="title-product">Praducts</h4>
                      <div class="toolbar-option">
                      </div>  
                  </div>
                  <div class="products products-list products-grid equal-container">
                    @foreach($serviceList as $value)
                      <div class="product-item style1 width-33 padding-0 col-md-3 col-sm-6 col-xs-6 equal-elem">
                          <div class="product-inner">
                              <div class="product-thumb">
                                  <div class="thumb-inner">
                                     @if(!empty($service->getServiceMineImages($value->id)->image))
                                        <a href="/en/product/{{$value->id}}" ><img src='{{"/uploads/thumb_".$service->getServiceMineImages($value->id)->image}}' alt=""></a>
                                    @else
                                        <a href="/en/product/{{$value->id}}" ><img src='{{"/assets/front/assets/img/logo-advert4.jpg"}}' alt=""></a>
                                    @endif
                                  </div>
                                  <span class="onnew">{{$value->status}}</span>
                                  <a href="" class="quick-view">Quick View</a>
                              </div>
                              <div class="product-innfo">
                                  <div class="product-name"><a href="">Acer's Aspire S7 is a thin and portable laptop</a></div>
                                  <div class="product-name"><a href="">{{$value->title}}</a></div>
                                  <span class="price">
                                      <ins>${{$value->price}}</ins>
                                      <del>${{$value->oldPrice}}</del>
                                  </span>
                                  <div class="info-product">
                                    {{$value->description}}
                                  </div>
                              </div>
                          </div>
                      </div>
                    @endforeach
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection