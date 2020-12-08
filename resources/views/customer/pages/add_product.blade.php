
@extends('customer.dashboard')
@section('maincontent')

<section class="ps-new-item">
    <form class="ps-form ps-form--new-product" action="index.html" method="get">
        <div class="ps-form__content">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>New Product</figcaption>
                        <div class="ps-block__content">
                           
                            <div class="form-group form-group--select">
                                <label>Category Name</label>
                                <div class="form-group__content">
                                    <select  id="idcategory" class="ps-select " title="Parent" name="category_id">
                                        <option value="" selected disabled>Select</option>
                                    
                                        @foreach($category as $v_category)
                                        <option value="{{$v_category->id}}" >{{$v_category->category_name}}</option>
                                         @endforeach
                                        
                                    </select>
                                </div>
                            </div>
                            <div class="form-group form-group--select">
                                <label>Sub Category Name</label>
                                <div class="form-group__content">
                                    <select id="idsubcategory" class="ps-select" title="Parent" name="subcategory_id">
                                       
                                    
                                        <option value="ss">fgdfg</option>
            
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product Name<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" name="product_name" placeholder="Enter product name..." />
                            </div>
                            <div class="form-group">
                                <label>Sale Price<sup>*</sup>
                                </label>
                                <input class="form-control" name="product_price"type="text" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Sale Quantity<sup>*</sup>
                                </label>
                                <input class="form-control" name="qty" type="text" placeholder="" />
                            </div>
                            
                            
                        </div>
                    </figure>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Product Images</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group">
                                <label>Product icon/image</label>
                                <div class="form-group--nest">
                                    <input class=" mb-1" type="file"  name="image" placeholder="">
                        
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product Description<sup>*</sup></label>
                                <textarea id="summernote" rows="6" name="product_description"></textarea>
                            </div>
                            
                            <div class="form-group form-group--select">
                                <label>Publication status</label>
                                <div class="form-group__content">
                                    <select  class="ps-select" title="Parent" name="status">
                                        <option value="1">Now</option>
                                        <option value="0" >Later</option>
                                        
            
                                        
                                    </select>
                                </div>
                            </div>
                        </div>
                    </figure>
                 
                   
                </div>
            </div>
        </div>
        <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="{{ route('customer.product') }}">Back</a>
            <button class="ps-btn ps-btn--gray" type="reset">Cancel</button>
            <button class="ps-btn">Submit</button>
        </div>
    </form>
</section>
<script type=text/javascript>


    $('#idcategory').change(function(){
    var category_id = $(this).val();  
    
    if(category_id){
      $.ajax({
        type:"GET",
        url:"{{url('get-subcategory-list')}}?category_id="+category_id,
       

        success:function(res){        
     
        if(res){
          $("#idsubcategory").empty();
          $("#idsubcategory").append('<option value="NULL">Select</option>');
          $.each(res,function(key,value){
            $("#idsubcategory").append('<option value="'+key+'">'+value+'</option>');
          });
        
        }else{
          $("#idsubcategory").empty();
    
 
        }


        }
      });
    }else{
        
      $("#idsubcategory").empty();
     
  }   
  });

  </script>
@endsection