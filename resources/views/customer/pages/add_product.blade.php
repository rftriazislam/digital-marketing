@extends('customer.dashboard')
@section('maincontent')
<section class="ps-new-item">
   
    @if($subcategory->category_info->form_name =='social_media')
    <form class="ps-form ps-form--new-product" action="{{ route('customer.savesocialmedia') }}" method="post"  enctype="multipart/form-data">
      @csrf
        <div class="ps-form__content">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Social Media</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group form-group--select">
                                <label>Category Name</label>
                                <input class="form-control" type="text"  disabled value=" {{ $subcategory->category_info->name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="category_id" value=" {{ $subcategory->category_info->id }}" placeholder="Enter product name..." />
                               
                            </div>
                            
                            <div class="form-group form-group--select">
                                <label>SubCategory Name </label>
                                <input class="form-control" type="text"disabled value=" {{ $subcategory->name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="subcategory_id" value=" {{ $subcategory->id }}" placeholder="Enter product name..." />
                               
                            </div>
                            <div class="form-group">
                                <label>Social Media Name<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" required name="social_name" placeholder="Enter Social Media name..." />
                            </div>
                            <div class="form-group">
                                <label>Social Media Link<sup>*</sup>
                                </label>
                                <input class="form-control" type="text"required name="social_link" placeholder="Enter Social Media  Link..." />
                            </div>
                            <div class="form-group">
                                <label>Friends<sup>*</sup>
                                </label>
                                <input class="form-control" type="number"required name="friends" placeholder="Enter Friends.." />
                            </div>
                            <div class="form-group">
                                <label>Follows<sup>*</sup>
                                </label>
                                <input class="form-control" type="number"required name="followers" placeholder="Enter Followers.." />
                            </div>
                           
                           
                            
                        </div>
                    </figure>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Social Media</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group">
                                <label>Social Media  icon/image</label>
                                <div class="form-group--nest">
                                    <input class=" mb-1" type="file" required name="image" placeholder="">
                        
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Sell Price<sup>$USD</sup>
                                </label>
                                <input class="form-control"required name="price"type="text" placeholder="" />
                            </div>
        
                            <div class="form-group">
                                <label>Description<sup>*</sup></label>
                                <textarea class="form-control" required rows="6" name="description"></textarea>
                            </div>
                            
                            <div class="form-group form-group--select">
                                <label>Publication status</label>
                                <div class="form-group__content">
                                    <select  class="ps-select" title="Parent" name="status">
                                        <option value="0">Now</option>
                                        <option value="0" >Later</option>
                            
                                    </select>
                                </div>
                            </div>
                        </div>
                    </figure>
                 
                   
                </div>
            </div>
        </div>
        <div class="ps-form__bottodm" style="text-align:center;"><a class="ps-btn ps-btn--black" href="{{ route('customer.product') }}">Back</a>
            <button class="ps-btn ps-btn--gray" type="reset">Cancel</button>
            <button class="ps-btn">Submit</button>
        </div>
    </form>
    @elseif($subcategory->category_info->form_name =='make_payment')
    <form class="ps-form ps-form--new-product" action="{{ route('customer.savemakepayment') }}" method="post">
        @csrf
        <div class="ps-form__content">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Category</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group form-group--select">
                                <label>Category Name </label>
                                <input class="form-control" type="text" disabled value=" {{ $subcategory->category_info->name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="category_id" value=" {{ $subcategory->category_info->id }}" placeholder="Enter product name..." />
                               
                            </div>
                            
                            <div class="form-group form-group--select">
                                <label>SubCategory Name </label>
                                <input class="form-control" type="text"disabled value=" {{ $subcategory->name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="subcategory_id" value=" {{ $subcategory->id }}" placeholder="Enter product name..." />
                               
                            </div>
                            
                        </div>
                    </figure>
                    <figure class="ps-block--form-box">
                        <figcaption>Send Information</figcaption>
                        <div class="form-group form-group--select">
                            <label>Currency</label>
                            <input class="form-control" type="text" required name="send_currency"  placeholder="Enter USD..." />
                        </div>
                        <div class="form-group form-group--select">
                            <label>Send Amount</label>
                            <input class="form-control" type="number" required name="send_amount"  placeholder="Enter currency..." />
                        </div>
                        <div class="form-group">
                            <label>Unit Price</label>
                            <div class="form-group--nest">
                                <input class="form-control mb-1" required type="number" name="unit_price" placeholder="">
                               
                            </div>
                        </div>
                        <div class="form-group form-group--select">
                            <label>A/C Wallet</label>
                            <input class="form-control" type="text" required name="send_wallet"  placeholder="Enter Wallet name..." />
                           
                        </div>
                        <div class="form-group form-group--select">
                            <label>Account No.</label>
                            <input class="form-control" type="text" required name="send_account"  placeholder="Enter Account..." />
                           
                        </div>
                    </figure>
                   
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Get Information</figcaption>
                        <div class="form-group form-group--select">
                            <label>Currency</label>
                            <input class="form-control" type="text" required name="get_currency"  placeholder="Enter Currency..." />
                           
                        </div>
                     
                        <div class="form-group form-group--select">
                            <label>A/C Wallet</label>
                            <input class="form-control" type="text" required name="get_wallet"  placeholder="Enter Wallet name..." />
                           
                        </div>
                        <div class="form-group form-group--select">
                            <label>Account No.</label>
                            <input class="form-control" type="text" required name="get_account"  placeholder="Enter Account name..." />
                           
                        </div>
                    </figure>
                    
                    <figure class="ps-block--form-box">
                        <figcaption>Description</figcaption>
                        <div class="ps-block__content">
                           
                            
                            <div class="form-group">
                                <label>Description</label>
                                <div class="form-group--nest">
                                    <textarea class="form-control"required rows="6" name="description" placeholder="Enter product description..."></textarea>

                                   
                                </div>
                            </div>
                            <div class="form-group form-group--select">
                                <label>Publication Status
                                </label>
                                <div class="form-group__content">
                                    <select class="ps-select" title="Status" name="status">
                                        <option value="0">Now</option>
                                        <option value="0">Later</option>
                                     
                                    </select>
                                </div>
                            </div>

                        </div>
                    </figure>
                  

                   
                </div>
            </div>
        </div>
        <div class="ps-form__bottomd" style="text-align:center;"><a class="ps-btn ps-btn--black" href="products.html">Back</a>
            <button class="ps-btn ps-btn--gray" type="reset">Cancel</button>
            <button class="ps-btn">Submit</button>
        </div>
    </form>
    @else
     <form class="ps-form ps-form--new-product" action="index.html" method="get">
        <div class="ps-form__content">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>General</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group">
                                <label>Product Name<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" placeholder="Enter product name..." />
                            </div>
                            <div class="form-group">
                                <label>Reference<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" placeholder="Enter product Reference..." />
                            </div>
                            <div class="form-group">
                                <label>Product Summary<sup>*</sup>
                                </label>
                                <textarea class="form-control" rows="6" placeholder="Enter product description..."></textarea>
                            </div>
                            <div class="form-group">
                                <label>Regular Price<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Sale Price<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Sale Quantity<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Sold Items<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" placeholder="" />
                            </div>
                            <div class="form-group">
                                <label>Product Description<sup>*</sup></label>
                                <textarea id="summernote" rows="6" name="editordata"></textarea>
                            </div>
                        </div>
                    </figure>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Product Images</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group">
                                <label>Product Thumbnail</label>
                                <div class="form-group--nest">
                                    <input class="form-control mb-1" type="text" placeholder="">
                                    <button class="ps-btn ps-btn--sm">Choose</button>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Product Gallery</label>
                                <div class="form-group--nest">
                                    <input class="form-control mb-1" type="text" placeholder="">
                                    <button class="ps-btn ps-btn--sm">Choose</button>
                                </div>
                            </div>
                            <div class="form-group form-group--nest">
                                <input class="form-control mb-1" type="text" placeholder="">
                                <button class="ps-btn ps-btn--sm">Choose</button>
                            </div>
                            <div class="form-group">
                                <label>Video (optional)
                                </label>
                                <input class="form-control" type="text" placeholder="Enter video URL" />
                            </div>
                        </div>
                    </figure>
                    <figure class="ps-block--form-box">
                        <figcaption>Inventory</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group">
                                <label>SKU<sup>*</sup>
                                </label>
                                <input class="form-control" type="text" placeholder="" />
                            </div>
                            <div class="form-group form-group--select">
                                <label>Status
                                </label>
                                <div class="form-group__content">
                                    <select class="ps-select" title="Status">
                                        <option value="1">Status 1</option>
                                        <option value="2">Status 2</option>
                                        <option value="3">Status 3</option>
                                        <option value="4">Status 4</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </figure>
                    <figure class="ps-block--form-box">
                        <figcaption>Meta</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group form-group--select">
                                <label>Brand
                                </label>
                                <div class="form-group__content">
                                    <select class="ps-select" title="Brand">
                                        <option value="1">Brand 1</option>
                                        <option value="2">Brand 2</option>
                                        <option value="3">Brand 3</option>
                                        <option value="4">Brand 4</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Tags
                                </label>
                                <input class="form-control" type="text" />
                            </div>
                        </div>
                    </figure>
                </div>
            </div>
        </div>
        <div class="ps-form__bottom"><a class="ps-btn ps-btn--black" href="products.html">Back</a>
            <button class="ps-btn ps-btn--gray">Cancel</button>
            <button class="ps-btn">Submit</button>
        </div>
    </form>
   @endif
</section>

@endsection