
@extends('customer.dashboard')
@section('title')
Unistag Digital||Product
@endsection
@section('maincontent')

<section class="ps-items-listing">
    {{-- <div class="ps-section__actions"><a class="ps-btn success" href=""><i class="icon icon-plus mr-2"></i>New Product</a></div> --}}
    <div class="ps-section__header">
        <div class="ps-section__filter">
            <form class="ps-form--filter" action="{{ route('customer.listpoduct') }}" method="post">
             @csrf
                <div class="ps-form__left">
                   
                    <div class="form-group row">
                    
                        <select   id="idcategory" required class="form-control col-8"  name="category_id" >

                            <option value="" selected disabled>Select Category</option>
                                    
                            @foreach($category as $v_category)
                            <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                             @endforeach

                        </select>
                 </div>
                 
                    <div class="form-group row">
                    
                        <select   id="idsubcategory" class="form-control col-8" required  name="subcategory_id" >
                          <option value="" selected disabled>Select Subcategory</option>
                        </select>
                      </div>
                    <div class="form-group">
                    
                        <button type="submit" style="background-color: #ffffff;border-width: 0px;"><a class="ps-btn success"  style="padding: 10px 30px;color:white"><i class="icon icon-plus mr-2"></i>Product</a>
                        </button>
                    </div>
                </div>
                <div class="ps-form__right">
                </div>
                 

            </form>
        </div>
        <div class="ps-section__search">
            
        </div>
    </div>
    <h2 style="text-align:center ">Social Media</h2>
    <div class="ps-section__content">
        <div class="table-responsive">
            <table class="table ps-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Social Name</th>
                        <th>Link</th>
                        <th>Friends</th>
                        <th>Sell Price</th>
                        <th>Image</th>
                        <th>Description</th>
                        <th>status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($social_media->take(8) as $item)
                        
                 
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category_info->category_name }}</td>
                        <td>{{ $item->subcategory_info->subcategory_name }}</td>
                        <td><span class="ps-badge success">{{ $item->social_name }}</span>
                        </td>
                        <td>{{ $item->social_link }}</td>
                        <td>
                            {{ $item->friend_follower }}
                        </td> 
                        <td>
                            <strong>${{ $item->sell_price }}</strong>
                        </td>
                        <td>
                          <img src="{{ asset('back_end/social_images') }}/{{ $item->image }}" alt="" style="height:50px;width:70px;">
                        </td>
                       
                        <td><p> <?php echo  $item->description ?> </p></td>
                        <td>  <div class="btn-group">
                            @if($item->status=='1')
                        
                            <button type="button" class="btn btn-success"><a href="{{ route('customer.social-status',[$item->id,$item->status])  }}">Active</a>
                            </button>
                            @else
                            <button type="button" class="btn "  style="background: #673ab7;color:white"><a href="{{ route('customer.social-status',[$item->id,$item->status])  }}" >Inactive</a>
                            </button>
                            @endif
                          
                              
                                <button type="button" class="btn btn-primary"><a href="">Edit/Update</a></button>
                                <button type="button" class="btn btn-danger"><a href="{{ route('customer.social-delete',[$item->id]) }}">Delete  </a></button>
                              </div>
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <h2 style="text-align:center ">Make Money</h2>
    <div class="ps-section__content">
        <div class="table-responsive">
            <table class="table ps-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Send Currency</th>
                        <th>Send Wallet</th>
                        <th>Send Account</th>
                        <th>Get Currency</th>
                        <th>Get Wallet</th>
                        <th>Get Account</th>
                        <th>Sell Rate</th>
                        <th>Purchase Rate</th>
                        <th>Your Rmount</th>
                        <th>Description</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($make_money->take(8) as $item)
                        
                 
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category_info->category_name }}</td>
                        <td>{{ $item->subcategory_info->subcategory_name }}</td>
                        <td>
                            <strong>${{ $item->send_currency }}</strong>
                        </td>
                        <td><span class="ps-badge success">{{ $item->send_wallet}}</span>
                        </td>
                        <td>{{ $item->send_account }}</td>
                        <td>
                            ${{ $item->get_currency }}
                        </td> 
                        <td>
                            <strong>{{ $item->get_wallet }}</strong>
                        </td>
                        <td>{{ $item->get_account }}</td>
                        <td>
                            {{ $item->sell_rate }}
                        </td> 
        
                        <td>{{ $item->purchase_rate }}</td>
                        <td>
                            {{ $item->your_amount }}
                        </td> 
                        <td><p> <?php echo  $item->description ?> </p></td>
                        <td>
                            @if($item->status=='1')
                        
                            <button  style="background-color: #ffffff;border-width: 0px;"><a class="ps-btn success"  style="padding: 10px 30px;color:white">Active</a>
                            </button>
                            @else
                            <button  style="background-color: #ffffff;border-width: 0px;"><a class="ps-btn danger"  style="padding: 10px 30px;color:white">Inactive</a>
                            </button>
                            @endif
                        </td>
                    </tr>
                   @endforeach
                </tbody>
            </table>
        </div>
    </div>
</section>
<script type=text/javascript>  

    $('#idcategory').change(function(){
        console.log("djjdjd");
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