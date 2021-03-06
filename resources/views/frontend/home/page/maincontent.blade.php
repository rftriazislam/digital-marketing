@extends('frontend.home.master')
@section('maincontent')
<div id="homepage-7">
    <div class="ps-home-banner">
      <div class="container">
        <div class="ps-section__left">
          <div class="ps-carousel--nav-inside owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="1" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="1" data-owl-duration="1000" data-owl-mousedrag="on" data-owl-animate-in="fadeIn" data-owl-animate-out="fadeOut">
            <a href="#"><img src="{{ asset('slider/4.jpg') }}" alt=""></a>
            <a href="#"><img src="{{ asset('slider/3.jpg') }}" alt=""></a>
              <a href="#"><img src="{{ asset('slider/1.jpg') }}" alt=""></a>
              <a href="#"><img src="{{ asset('slider/2.jpg') }}" alt=""></a>
             
            </div>
        </div>
        <div class="ps-section__right">
      
            <a class="ps-collection" href="http://thirdhand.net/"><img src="{{ asset('banner/side1.jpg') }}" alt=""></a>
            <a class="ps-collection" href="http://unistag.com/"><img src="{{ asset('banner/side2.jpg') }}" alt=""></a>
        </div>
      </div>
    </div>
    <div class="ps-top-categories">
      <div class="container">
        <h3>Sub categories</h3>
        <div class="row">
          @foreach ($subcategory as $v_subcategory)
              
         
                      <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--category-2" data-mh="categories">
                          <a href="{{ route('singlesubcategory',[$v_subcategory->id,$v_subcategory->category_info->form_name])}}"> 
                          <div class="ps-block__thumbnail"><img class="img_s" src="{{ asset('back_end/subcategory_images') }}/{{ $v_subcategory->image }}" alt=""></div>
                        </a>
                          <div class="ps-block__content">
                            <h4>{{ $v_subcategory->name }}</h4>
                          
                          </div> 
                        
                        </div>
                      </div>
                 @endforeach     
        </div>
      </div>
    </div>
    <div class="ps-deal-of-day">
      <div class="container">
        <div class="ps-section__header">
          <div class="ps-block--countdown-deal">
            <div class="ps-block__left">
              <h3>Esay Sell </h3>
            </div>
          
          </div><a href="shop-default.html">View all</a>
        </div>
        <div class="ps-section__content">
          <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
           @foreach ($social as $v_social)
               
           
            <div class="ps-product ps-product--inner">
              <div class="ps-product__thumbnail">
                <a href="{{ route('addcart',[$v_social->id,$v_social->subcategory_info->category_info->form_name]) }}">
                <img src="{{ asset('back_end/subcategory_images') }}/{{ $v_social->subcategory_info->image }}" alt=""></a>
                <div class="ps-product__badge">0%</div>
               
              </div>
              <div class="ps-product__container">
                <p class="ps-product__price sale" style="font-size: 14px">{{ $v_social->subcategory_info->name }}</p>
                <div class="ps-product__content">
                  <a class="ps-product__title" href="product-default.html">{{ $v_social->social_name }}</a>
                 
                  <div class="ps-product__progress-bar ps-progress" data-value="33">
                   
                    <p style="text-align: center">${{ $v_social->price }}</p>
                   <button class="btn" style="width:100%;color:white;background:#f14705"><a href="{{ route('addtoocart',[$v_social->id ])}}"> Add to Card</a></button>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
    <div class="ps-promotions">
      <div class="container">
        <div class="row">
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 "><a class="ps-collection" href="shop-default.html"><img src="{{ asset('banner/side1.jpg') }}" alt=""></a>
                      </div>
                      <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 "><a class="ps-collection" href="shop-default.html"><img src="{{ asset('banner/side2.jpg') }}" alt=""></a>
                      </div>
        </div>
      </div>
    </div>
    <div class="ps-deal-of-day">
      <div class="container">
        <div class="ps-section__header">
          <div class="ps-block--countdown-deal">
            <div class="ps-block__left">
              <h3>Purchase Product</h3>
            </div>
          
          </div><a href="shop-default.html">View all</a>
        </div>
        <div class="ps-section__content">
          <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="5000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="3" data-owl-item-md="4" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
           @foreach ($make_payment as $v_makepayment)
               
           
            <div class="ps-product ps-product--inner">
              <div class="ps-product__thumbnail"><a href="{{ route('addcart',[$v_makepayment->id,$v_makepayment->subcategory_info->category_info->form_name]) }}"><img src="{{ asset('back_end/subcategory_images') }}/{{ $v_makepayment->subcategory_info->image }}" alt=""></a>
             
              </div>
              <div class="ps-product__container">
                <p class="ps-product__price sale">${{ $v_makepayment->send_amount }} 
                  <b style="float:right">{{ $v_makepayment->send_wallet }}</b></p>


                <div class="ps-product__content">

                  <a class="ps-product__title" href="{{ route('addcart',[$v_makepayment->id,$v_makepayment->subcategory_info->category_info->form_name]) }}">{{ $v_makepayment->subcategory_info->name }}</a>
               
                  <div class="ps-product__progress-bar ps-progress" data-value="33">
                 <p style="text-align: center">$1 = {{ $v_makepayment->unit_price }} BDT</p>
                 <button class="btn" style="width:100%;color:white;background:#f14705">Add to Card</button>
                  </div>

                </div>

              </div>
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>

    

    <div class="ps-product-list ps-product-list--2">
@foreach ($subcategory as $all_subcategory)
@if($all_subcategory->category_info->form_name=='social_media')
      <div class="container">
        <div class="ps-section__header">
          <h3>{{ $all_subcategory->name }}</h3>
      
        </div>
        <div class="ps-section__content">
          <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="3" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
             @foreach ($all_subcategory->social_media_info as $v_social)
                 
                     
            <div class="ps-product">
                          <div class="ps-product__thumbnail"><a href="{{ route('addcart',[$v_social->id,$v_social->subcategory_info->category_info->form_name]) }}"><img src="{{ asset('back_end/subcategory_images') }}/{{ $v_social->subcategory_info->image }}" alt=""></a>
                            {{-- <div class="ps-product__badge" style="color: black">views</div> --}}
                          
                          </div>
                          <div class="ps-product__container"><a class="ps-product__vendor" href="#">Go Pro</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="{{ route('addcart',[$v_social->id,$v_social->subcategory_info->category_info->form_name]) }}">{{ $v_social->social_name }}</a>
                             
                              <p class="" style="text-align: center">${{ $v_social->price }}</p>
                                    <button class="btn" style="width:100%;color:white;background:#0587f1">Add to Card</button>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="{{ route('addcart',[$v_social->id,$v_social->subcategory_info->category_info->form_name]) }}">{{ $v_social->social_name }}</a>
                              <p class="" style="text-align: center">${{ $v_social->price }}</p>
                              <button class="btn" style="width:100%;color:white;background:#f14705">Add to Card</button>
                            </div>
                          </div>
             </div>
                        @endforeach  
         
         </div>

         


        </div>
      </div>
      @endif
@endforeach
    </div>

    <div class="ps-promotions">
      <div class="container">
        <div class="ps-collection"><img src="{{ asset('banner/1.gif') }}" alt="1170x245" style="height:245px"></div>
      </div>
    </div>
    <div class="ps-product-list ps-product-list--2">
      @foreach ($subcategory as $all_subcategory)
       @if($all_subcategory->category_info->form_name=='make_payment')
            <div class="container">
              <div class="ps-section__header">
                <h3>{{ $all_subcategory->name }}</h3>
            
              </div>
              <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="false" data-owl-loop="false" data-owl-speed="10000" data-owl-gap="0" data-owl-nav="true" data-owl-dots="true" data-owl-item="5" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="2" data-owl-item-lg="3" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                   @foreach ($all_subcategory->make_payment_info as $make_payment)
                       
                           
                  <div class="ps-product">
                                <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{ asset('back_end/subcategory_images') }}/{{ $make_payment->subcategory_info->image }}" alt=""></a>
                                  <div class="ps-product__badge">Sell</div>
                             
                                </div>
                                <div class="ps-product__container"><a class="ps-product__vendor" href="#">{{ $make_payment->subcategory_info->name }}</a>
                                  <div class="ps-product__content">
                                    <a class="ps-product__title" href="product-default.html">{{ $make_payment->send_wallet }}<b style="float: right;">$ {{ $make_payment->send_amount }}</b> </a>
                                   
                                    <p class="ps-product__price sale" style="text-align: center">$1 = {{ $make_payment->unit_price }}</p>
                                    <button class="btn" style="width:100%;color:white;background:#0587f1">Add to Card</button>
                                  </div>
                                  <div class="ps-product__content hover">
                                    <a class="ps-product__title" href="product-default.html">{{ $make_payment->send_wallet }} <b style="float: right;"> ${{ $make_payment->send_amount }}</b></a>
                                    <p class="" style="text-align: center">$1 = {{ $make_payment->unit_price }} BDT</p>
                                    <button class="btn" style="width:100%;color:white;background:#f14705">Add to Card</button>
                                  </div>
                                
                                </div>
                   </div>
                              @endforeach  
               
               </div>
      
               
      
      
              </div>
            </div>
            @endif
      @endforeach
          </div>
   
  </div>
@endsection