@extends('frontend.home.master')
@section('maincontent')


<div class="ps-top-categories">
    <div class="container">
      <h1>single subCategory </h1>
      
      <div class="row">

@foreach ($social as $v_subcategory)
    


        
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                      <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img class="img_s" src="{{ asset('back_end/subcategory_images') }}/{{ $v_subcategory->subcategory_info->subcategory_image }}" alt=""></div>
                        <div class="ps-block__content">
                          <h4>{{ $v_subcategory->social_name }}</h4>
                          <ul>
                            <li><a href="shop-default.html">Smart TV</a></li>
                            <li><a href="shop-default.html">4K Ultra HD TVs</a></li>
                           
                          </ul>
                        </div>
                      </div>
                    </div>
                   
                  
                    
                    
           @endforeach         
                
                  
                 
      </div>
    </div>
  </div>
@endsection