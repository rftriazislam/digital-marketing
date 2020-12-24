
@extends('customer.dashboard')
@section('maincontent')

<section class="ps-new-item">
    <form class="ps-form ps-form--new-product" action="{{ route('customer.saveproduct') }}" method="post">
        @csrf
        <div class="ps-form__content">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    {{-- <figure class="ps-block--form-box"> --}}
                        <figcaption>New Product</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group col-7" >
                                    <select  id="idcategory" class="form-control  col-8"  name="category_id" style="float:left;">
                                        <option value="" selected disabled>Select</option>
                                    
                                        @foreach($category as $v_category)
                                        <option value="{{$v_category->id}}"  title="ddd">{{$v_category->category_name}}</option>
                                         @endforeach
                                        
                                    </select>   
                                               <ul class="nav nav-pills col-2" id="cols" style="float:right;">
                                                
                                               </ul>
                                               <ul class="nav nav-pills col-2" id="link" style="float:right;">
                                                
                                              </ul>
                            </div>
                        </div>
                    {{-- </figure> --}}
                </div>
            </div>

        </div>
        {{-- <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="{{ route('customer.product') }}">Back</a>
            <button class="ps-btn ps-btn--gray" type="reset">Cancel</button>
            <button class="ps-btn">Submit</button>
        </div> --}}
    </form>

  <div class="col-md-9">
    <div class="card">
    
      <div class="card-body">
        <div class="tab-content">
         

          <div class="tab-pane" id="i1">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">subcategory Name</label>
                <select   id="idsubcategory" class="form-control col-8"  name="subcategory_id" style="margin-left:14px;">
                  <option value="" selected disabled>Select</option>
                </select>
              </div>

              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Product Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Product Link</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName2" class="col-sm-2 col-form-label">Product Image</label>
                <div class="col-sm-10">
                  <input type="file" id="inputName2" placeholder="Name">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Friend Follower</label>
                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">

                </div>
              </div>
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Sale Price</label>
                <div class="col-sm-10">
                                   <input type="text" class="form-control" id="inputName" placeholder="Name">

                </div>
              </div>
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Sale Quentity</label>
                <div class="col-sm-10">
                                   <input type="text" class="form-control" id="inputName" placeholder="Name">

                </div>
              </div>
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Product Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Publication Status</label>
                <select   id="idsubcategory" class="form-control col-6"  name="subcategory_id" style="margin-left:14px;">
                  <option value="1" >Now</option>
                  <option value="2" >Later</option>
                </select>
              </div>
             
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane" id="i3">
            <form class="form-horizontal">
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">A/C Wallet Name</label>
                <select   id="idsubcategory" class="form-control col-8"  name="subcategory_id" style="margin-left:14px;">
                  <option value="" selected disabled>Select</option>
                </select>
              </div>

              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Account Name</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Account No</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" placeholder="Name">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Account Sell Price</label>
                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputName" placeholder="Name">

                </div>
              </div>
              
              
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Account Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputExperience" placeholder="Experience"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Publication Status</label>
                <select   id="idsubcategory" class="form-control col-6"  name="subcategory_id" style="margin-left:14px;">
                  <option value="1" >Now</option>
                  <option value="2" >Later</option>
                </select>
              </div>
             
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-danger">Submit</button>
                </div>
              </div>
            </form>
          </div>
          <div class="tab-pane" id="i2">
            <form class="form-horizontal" action="{{ route('customer.makemoney') }}" method="post">
              @csrf
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Subcategory Name</label>
                <select   id="idsubcategory" class="form-control col-8"  name="subcategory_id" style="margin-left:14px;">
                  <option value="" selected disabled>Select</option>
                </select>
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label"><h3 style="color:black">Send Info</h3> </label>
               
              </div>
              <div class="form-group row" id="category_id">
              
               
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Currency </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" name="send_currency" placeholder="currency">
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">A/C Wallet</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" id="inputName" name="send_wallet" placeholder="paypel">
                </div>
              </div>
              
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Account No.</label>
                <div class="col-sm-10">
                                    <input type="text" class="form-control" name="send_account" id="inputName" placeholder="account@gmail.com">

                </div>
               
              </div> 
              <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label"><h3 style="color:black">Get Info</h3> </label>
                 
                </div>
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">Currency </label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="get_currency" placeholder="current">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="inputName" class="col-sm-2 col-form-label">A/C Wallet</label>
                  <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputName" name="get_wallet" placeholder="Bkash">
                  </div>
                </div>
                
                <div class="form-group row">
                  <label for="inputExperience" class="col-sm-2 col-form-label">Account No.</label>
                  <div class="col-sm-10">
                                      <input type="text" class="form-control" id="inputName" name="get_account" placeholder="Account">
  
                  </div>

                </div>
                  <div class="form-group row">
                    <label for="inputName" class="col-sm-2 col-form-label"><h3 style="color:black"> Rate </h3></label>
                   
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Sell Rate</label>
                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="inputName" name="sell_rate" placeholder="0$">
    
                    </div>
  
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Purchase Rate</label>
                    <div class="col-sm-10">
                                        <input type="text" class="form-control" name="purchase_rate" id="inputName" placeholder="0Taka">
    
                    </div>
  
                  </div>
                  <div class="form-group row">
                    <label for="inputExperience" class="col-sm-2 col-form-label">Your Amount</label>
                    <div class="col-sm-10">
                     <input type="text" class="form-control" id="inputName" name="your_amount" placeholder="Your Account">
    
                    </div>
  
                  </div>
              <div class="form-group row">
                <label for="inputExperience" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                  <textarea class="form-control" id="inputExperience" name="description" placeholder="Experience"></textarea>
                </div>
              </div>
              <div class="form-group row">
                <label for="inputName" class="col-sm-2 col-form-label">Publication Status</label>
                <select   id="idsubcategory" class="form-control col-6"  name="status" style="margin-left:14px;">
                  <option value="0" >Now</option>
                  <option value="2" >Later</option>
                </select>
              </div>
             
              <div class="form-group row">
                <div class="offset-sm-2 col-sm-10">
                  <button type="submit" class="btn btn-danger" style="height:36px;width: 70px;">Create</button>
                </div>
              </div>
            </form>
          </div>
        </div>
 
      </div>
    </div>
    
  </div>
    
     
 
     


  


  


</section>
<script type=text/javascript>   
    $('#idcategory').change(function(){

    var category_id=$(this).val();
   

  
    if(category_id){
       $("#cols").empty();
     
        $("#cols").append(
          '<li class="nav-item"><a class="nav-link" href="#i'+category_id+'" data-toggle="tab" style="color:white;height:50px;width:100px;text-align:center;background:#24bb2a;">GO</a></li>');

          $("#link").append('<a  href="{{url('get-add-product-list')}}/'+category_id+'"  style="color:white;height:50px;width:100px;text-align:center;background:#24bb2a;">GO</a>');
          $("#category_id").append('<input type="hidden" class="form-control" name="category_id" value="'+category_id+'" placeholder="category id">');
          
         
    }
        
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
            // $("#idsubcateggory").append('<li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab" >'+value+'</a></li>');

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