@extends('frontend.home.master')
@section('maincontent')


  <div class="ps-top-categories">
    <div class="container">
    <div class="ps-section__header">
      <h3>Customers who bought this item also bought</h3>
    </div>
    <div class="ps-section__content">
      <div class="row">
        
        @foreach ($social as $v_social)

                    <div class="col-xl-3 col-lg-3 col-md-4 col-sm-6 col-6 ">
                                  <div class="ps-product">
                                    <div class="ps-product__thumbnail"><a href=""><img src="{{ asset('back_end/subcategory_images') }}/{{ $v_social->subcategory_info->subcategory_image }}" alt=""></a>
                                      <div class="ps-product__badge hot" >hot</div>
                                   
                                    </div>

                                    <div class="ps-product__container"><a class="ps-product__vendor" id="add" >Go Pro</a>
                                      <div class="ps-product__content"><a class="ps-product__title" href="">{{ $v_social->social_name }}</a>
                                       
                                        <p class="" style="text-align: center">${{ $v_social->sell_price }}</p>
                                              <button class="btn"  style="width:100%;color:white;background:#0587f1;margin-bottom: 2px;">Add to Card</button>
                                      </div>
                                      <div class="ps-product__content hover"><a class="ps-product__title" href="">{{ $v_social->social_name }}</a>
                                        <p class="" style="text-align: center">${{ $v_social->sell_price }}</p>
                                        <button class="btn" style="width:100%;color:white;background:#f14705;margin-bottom: 2px;"  onclick="add({{ $v_social->id }})">Add to Card</button>
                                      </div>
                                    </div>
                                  </div>
                    </div>
                    @endforeach   
                      
      </div>
    </div>
    </div>
  </div>
  
  <script type="text/javascript">
      console.log('ssss');
function add(param){
  var sum = param ;
  console.log(sum);

  var product_id = param;

  var url = "{{ url('/add-to-cart') }}/"+product_id;
 
 
  
  $.ajax({
    headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          },
    type: "POST",
    url: "{{ url('/add-to-cart') }}",
    data: { product_id: product_id },
   
    success: function (data) {
      console.log(data);

    },
    error: function (data) {
      console.log('Error:', data);
    }
  });
};




  </script>
@endsection