@extends('frontend.home.master')
@section('maincontent')


<div class="ps-top-categories">
    <div class="container">
      <h1>Top categories</h1>
      <div class="row">
        @foreach ($category as $v_category)
            
       
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                      <div class="ps-block--category-2" data-mh="categories">
                      
                        <div class="ps-block__thumbnail"><img class="img_s" src="{{ asset('back_end/category_images') }}/{{ $v_category->image }}" alt=""></div>
                        <div class="ps-block__content">
                          <h4>{{ $v_category->category_name}}</h4>
                          <ul>
                            <li><a href="shop-default.html">Ok</a></li>
                      
                          </ul>
                        </div>
                      </div>
                    </div>
                  
                @endforeach    
                     
                   
      </div>
    </div>
  </div>
@endsection