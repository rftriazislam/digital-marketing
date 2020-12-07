@extends('admin.dashboard')
@section('maincontent')

<section class="ps-dashboard ps-items-listing">
    <div class="ps-section__left">
        <div class="table-responsive">
            <table class="table ps-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category name</th>
                        <th>Image</th>
                        <th>Publication status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($category_info as $v_category)
                    <tr>
                        <td>{{ $v_category->id }}</td>
                        <td><strong>{{ $v_category->category_name}}</strong></td>
                        <td><img  src="{{ asset('back_end/category_images') }}/{{ $v_category->image }}" style="width:60px;height:40px"></td>
                        <td>  
                            <div class="btn-group" role="group" aria-label="Basic example">
                                                                                         
                               @if($v_category->status==0)
                                <button type="button" style=" color:white ;background-color:red"
                                    class="btn ">
                                    <a style="color:white"
                                        href="{{url('/admin-category-status')}}/{{$v_category->status}}/{{$v_category->id}}">Unpulished</a>
                                </button>
                                @else
                                <button type="button" style=" color:white ;background-color:green"
                                    class="btn ">
                                    <a style="color:white"
                                        href="{{url('/admin-category-status')}}/{{$v_category->status}}/{{$v_category->id}}">Pulished</a>
                                </button>
                                @endif
                              
                            </div>
                           </td>
                        <td>
                            <div class="btn-group" role="group" aria-label="Basic example">
                          
                                    <button type="button" style=" color:white ;background-color:aqua"
                                        class="btn "><a style="color:white"
                                            href="{{url('/admin-category-edit')}}/{{$v_category->id}}">
                                            Updated/Edit</a></button>
                                    <button type="button" style="color:white  ;background-color:red"
                                        class="btn "><a style="color:white"
                                            href="{{url('/admin-category-delete')}}/{{$v_category->id}}">
                                            Delete</a></button>
                                </div>

                        </td>
                    </tr> 
                    @empty
                    <tr class='text-center' style="color:red">
                        <td colspan="12" style="text-align:center;">No available data</td>
                    </tr>
                    @endforelse
                  
                    
                    
                </tbody> 
        
            </table>
            
            {{$category_info->links()}}
        </div>

     
         
      
    </div>

    <div class="ps-section__right">
        <form class="ps-form ps-form--new" role="form" method="post" action="{{route('admin.categoryupdated')}}"
        enctype="multipart/form-data">
                       @csrf

                            @if(session('message'))
                            <p style="color:rgb(255, 60, 0);" class="text-center">
                                {{session('message')}}
                            </p>
                            @endif
                            @foreach($errors->all() as $error)
                            <p style="color:red;" class="text-center">
                                {{$error}}
                            </p>
                            @endforeach

            <div class="ps-form__content">
                <div class="form-group">
                    <label>Category Name<sup>*</sup>
                    </label>
                    <input class="form-control" name="category_name" required type="text" value="{{ $category_edit->category_name}}" placeholder="Enter category name" />
                    <input class="form-control" name="category_id" required type="hidden" value="{{ $category_edit->id}}" placeholder="Enter category name" />
                </div>
                <div class="form-group">
                    <label>Image<sup>(Optional)</sup>
                    </label>
                    <input  type="file" name="image" value="{{ $category_edit->category_name}}" placeholder="Enter category Image" />
                </div>
           
                
            </div>
            <div class="ps-form__bottom">
                <button class="ps-btn ps-btn--gray" ><a href="{{ route('admin.category') }}">Cancel </a></button>
                <button class="ps-btn ps-btn--sumbit success">Update</button>
            </div>
        </form>
    </div>
</section>
@endsection
