@extends('customer.dashboard')
@section('maincontent')
<section class="ps-new-item">
   
    @if($subcategory->category_info->form_name =='social_media')
    <form class="ps-form ps-form--new-product" action="index.html" method="get">
        <div class="ps-form__content">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>New Product</figcaption>
                        <div class="ps-block__content">
                           
                            <div class="form-group form-group--select">
                                <label>Category Name </label>
                                <input class="form-control" type="text" disabled value=" {{ $subcategory->category_info->category_name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="product_name" value=" {{ $subcategory->category_info->category_name }}" placeholder="Enter product name..." />
                               
                            </div>
                            
                            <div class="form-group form-group--select">
                                <label>SubCategory Name </label>
                                <input class="form-control" type="text"disabled value=" {{ $subcategory->subcategory_name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="product_name" value=" {{ $subcategory->subcategory_name }}" placeholder="Enter product name..." />
                               
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
    @elseif($subcategory->category_info->form_name =='make_money')
    <form class="ps-form ps-form--new-product" action="index.html" method="get">
        <div class="ps-form__content">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Category</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group form-group--select">
                                <label>Category Name </label>
                                <input class="form-control" type="text" disabled value=" {{ $subcategory->category_info->category_name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="product_name" value=" {{ $subcategory->category_info->category_name }}" placeholder="Enter product name..." />
                               
                            </div>
                            
                            <div class="form-group form-group--select">
                                <label>SubCategory Name </label>
                                <input class="form-control" type="text"disabled value=" {{ $subcategory->subcategory_name }}" placeholder="Enter product name..." />
                                <input class="form-control" type="hidden" name="product_name" value=" {{ $subcategory->subcategory_name }}" placeholder="Enter product name..." />
                               
                            </div>
                            
                        </div>
                    </figure>
                    <figure class="ps-block--form-box">
                        <figcaption>Send Information</figcaption>
                        <div class="form-group form-group--select">
                            <label>Currency</label>
                            <input class="form-control" type="number" name="product_name"  placeholder="Enter currency..." />
                           
                        </div>
                        
                        <div class="form-group form-group--select">
                            <label>A/C Wallet</label>
                            <input class="form-control" type="text" name="product_name"  placeholder="Enter Wallet name..." />
                           
                        </div>
                        <div class="form-group form-group--select">
                            <label>Account No.</label>
                            <input class="form-control" type="text" name="product_name"  placeholder="Enter Account..." />
                           
                        </div>
                    </figure>
                    <figure class="ps-block--form-box">
                        <figcaption>Get Information</figcaption>
                        <div class="form-group form-group--select">
                            <label>Currency</label>
                            <input class="form-control" type="text" name="product_name"  placeholder="Enter product name..." />
                           
                        </div>
                        
                        <div class="form-group form-group--select">
                            <label>A/C Wallet</label>
                            <input class="form-control" type="text" name="product_name"  placeholder="Enter product name..." />
                           
                        </div>
                        <div class="form-group form-group--select">
                            <label>Account No.</label>
                            <input class="form-control" type="text" name="product_name"  placeholder="Enter product name..." />
                           
                        </div>
                    </figure>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <figure class="ps-block--form-box">
                        <figcaption>Rate</figcaption>
                        <div class="ps-block__content">
                            <div class="form-group">
                                <label>Sell Rate</label>
                                <div class="form-group--nest">
                                    <input class="form-control mb-1" type="text" placeholder="">
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Purchase Rate</label>
                                <div class="form-group--nest">
                                    <input class="form-control mb-1" type="text" placeholder="">
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Your Amount</label>
                                <div class="form-group--nest">
                                    <input class="form-control mb-1" type="text" placeholder="">
                                   
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description</label>
                                <div class="form-group--nest">
                                    <textarea class="form-control" rows="6" placeholder="Enter product description..."></textarea>

                                   
                                </div>
                            </div>
                            <div class="form-group form-group--select">
                                <label>Publication Status
                                </label>
                                <div class="form-group__content">
                                    <select class="ps-select" title="Status">
                                        <option value="1">Now</option>
                                        <option value="2">Later</option>
                                     
                                    </select>
                                </div>
                            </div>

                        </div>
                    </figure>
                    <figure class="ps-block--form-box">
                        <figcaption>Information </figcaption>
                        <h4>1. Please given Correct Information.</h4>
                        <h4>2. Please given Correct send Account no.</h4>
                        <h4>3. Please given Correct Get Account no.</h4>
                        <h4>4. Must given orginal information</h4>
                        <h4>5. Please given Correct send Account no.</h4>
                        <h4>6. Please given Correct Get Account no.</h4>
                        <h4>7. Must given orginal information</h4>
                        <h4>8. Must given orginal information</h4>
                        <h4>9. Please given Correct send Account no.</h4>
                        
                    </figure>
                  
                </div>
            </div>
        </div>
        <div class="ps-form__bottomd"><a class="ps-btn ps-btn--black" href="products.html">Back</a>
            <button class="ps-btn ps-btn--gray">Cancel</button>
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