@extends('admin.dashboard')
@section('maincontent')
<section class="ps-items-listing">
    <h2 style="text-align-last: center">Product Permission</h2>
    <hr>
    <div style="text-align:center"> 

    
    <div class="ps-section__atctions" style="float: left;margin-left:2px;margin-top:2px;"><a class="ps-btn success" href="{{ route('product_permission') }}">Social Media</a></div>
    <div class="ps-section__acctions" style="float: left;margin-left:2px;margin-top:2px;"><a class="ps-btn success" href="{{ route('permission_makemoney') }}">Make Money</a></div>
    <div class="ps-section__acctions" style="float: left;margin-left:2px;margin-top:2px;"><a class="ps-btn success" href="new-product.html">Product</a></div>
   </div>
   <div class="ps-section__header"></div>
   <div class="ps-section__content">
    <div class="table-responsive">
        <table class="table ps-table">
            <thead>
                <tr>
                    <th style="background: #673ab7;color:rgb(255, 255, 255)">ID</th>
                    <th style="background: #673ab7;color:rgb(255, 255, 255)">User Name</th>
                    <th style="background: #673ab7;color:white">Category</th>
                    <th style="background: #673ab7;color:white">Subcategory</th>
                    <th style="background: #673ab7;color:white">Social Name</th>
                    <th style="background: #673ab7;color:white">Link</th>
                    <th style="background: #673ab7;color:white">Friends</th>
                    <th style="background: #673ab7;color:white">Sell Price</th>
                    <th style="background: #673ab7;color:white">Image</th>
                    <th style="background: #673ab7;color:white">Description</th>
                    <th style="background: #673ab7;color:white">status</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($social_media as $item)
                    
             
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>Null</td>
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
                    
                        <button type="button" class="btn btn-success"><a href="{{ route('admin.social-status',[$item->id,$item->status])  }}">Active</a>
                        </button>
                        @else
                        <button type="button" class="btn "  style="background: #673ab7;color:white"><a href="{{ route('admin.social-status',[$item->id,$item->status])  }}" >Inactive</a>
                        </button>
                        @endif
                      
                          
                            <button type="button" class="btn btn-primary"><a href="">Views</a></button>
                            <button type="button" class="btn btn-danger"><a href="{{ route('customer.social-delete',[$item->id]) }}">Delete</a></button>
                          </div>
                    </td>
                </tr>
               @endforeach
            </tbody>
        </table>
    </div>
</div>
</section>

@endsection