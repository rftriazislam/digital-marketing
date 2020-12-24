
@extends('customer.dashboard')
@section('title')
Unistag Digital||Product
@endsection
@section('maincontent')

<section class="ps-items-listing">
    {{-- <div class="ps-section__actions"><a class="ps-btn success" href="{{ route('customer.addproduct') }}"><i class="icon icon-plus mr-2"></i>New Product</a></div> --}}
    <div class="ps-section__header">
        <div class="ps-section__filter">
            <form class="ps-form--filter" action="{{ route('customer.listroduct') }}" method="post">
             @csrf
                <div class="ps-form__left">
                   
                    <div class="form-group row">
                    
                        <select   id="idcategory" required class="form-control col-8"  name="category_id" >

                            <option value="" selected disabled>Select</option>
                                    
                            @foreach($category as $v_category)
                            <option value="{{$v_category->id}}">{{$v_category->category_name}}</option>
                             @endforeach

                        </select>
                 </div>
                 
                    <div class="form-group row">
                    
                        <select   id="idsubcategory" class="form-control col-8" required  name="subcategory_id" >
                          <option value="" selected disabled>Select</option>
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
            <form class="ps-form--search-simple" action="index.html" method="get">
                <input class="form-control" type="text" placeholder="Search product" />
                <button><i class="icon icon-magnifier"></i></button>
            </form>
        </div>
    </div>
    <div class="ps-section__content">
        <div class="table-responsive">
            <table class="table ps-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>SKU</th>
                        <th>Stock</th>
                        <th>Price</th>
                        <th>Categories</th>
                        <th>Date</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>ABH-0</td>
                        <td><a href="#"><strong>Herschel Leather Duffle Bag In Brown Color</strong></a></td>
                        <td>AB123456789-1</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£125.30</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Bags</a><a href="#">Clothing &amp; Apparel</a>
                            </p>
                        </td>
                        <td>2019/11/06</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-1</td>
                        <td><a href="#"><strong>Apple iPhone Retina 6s Plus 64GB</strong></a></td>
                        <td>CD987654316-1</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£1,249.99</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Computers &amp; Technologies</a><a href="#">Technologies</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-2</td>
                        <td><a href="#"><strong>Marshall Kilburn Portable Wireless Speaker</strong></a></td>
                        <td>SF1133569600-1</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£36.78</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Babies &amp; Moms</a><a href="#">Refrigerators</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-3</td>
                        <td><a href="#"><strong>Xbox One Wireless Controller Black Color</strong></a></td>
                        <td>AB123456788</td>
                        <td><span class="ps-badge gray">Out-of-stock</span>
                        </td>
                        <td><strong>£55.30</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Accessories</a><a href="#">Air Conditioners</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-4</td>
                        <td><a href="#"><strong>Grand Slam Indoor Of Show Jumping Novel</strong></a></td>
                        <td>AB123456788</td>
                        <td><span class="ps-badge gray">Out-of-stock</span>
                        </td>
                        <td><strong>£32.39</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Books &amp; Office</a><a href="#">Cars &amp; Motocycles</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>ABH-5</td>
                        <td><a href="#"><strong>Rayban Rounded Sunglass Brown Color</strong></a></td>
                        <td>AB123456783</td>
                        <td><span class="ps-badge success">Stock</span>
                        </td>
                        <td><strong>£321.39</strong></td>
                        <td>
                            <p class="ps-item-categories"><a href="#">Clothing &amp; Apparel</a><a href="#">Cars &amp; Motocycles</a>
                            </p>
                        </td>
                        <td>2018/12/11</td>
                        <td>
                            <div class="dropdown"><a id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="icon-ellipsis"></i></a>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton"><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item" href="#">Delete</a></div>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="ps-section__footer">
        <p>Show 10 in 30 items.</p>
        <ul class="pagination">
            <li><a href="#"><i class="icon icon-chevron-left"></i></a></li>
            <li class="active"><a href="#">1</a></li>
            <li><a href="#">2</a></li>
            <li><a href="#">3</a></li>
            <li><a href="#"><i class="icon-chevron-right"></i></a></li>
        </ul>
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