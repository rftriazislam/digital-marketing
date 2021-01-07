@extends('frontend.home.master')
@section('maincontent')


<div class="ps-top-categories">
    <div class="container">
      
      
      
      <h1>All Item In one Store</h1>
         @foreach ($category as $v_category)
         <h3>{{ $v_category->name }}</h3>

    

                <div class="row">
               @foreach ($v_category->subcategory as $v_subcategory)
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                      <a href="{{ route('singlesubcategory',[$v_subcategory->id,$v_subcategory->category_info->form_name])}}"> 
                      <div class="ps-block--category-2" data-mh="categories">
                        <div class="ps-block__thumbnail"><img class="img_s" src="{{ asset('back_end/subcategory_images') }}/{{ $v_subcategory->image }}" alt=""></div>
                        <div class="ps-block__content">
                          <h4>{{ $v_subcategory->name }}</h4>
                          <ul>
                            <li><a >Sell Items</a></li>
                          </ul>
                        </div>
                      </div>
                    </a>
                    </div>
                    @endforeach
                  
               </div>     
         @endforeach
    </div>
  </div>
@endsection