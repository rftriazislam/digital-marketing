
@extends('frontend.home.master')
@section('maincontent')



<div class="ps-breadcrumb">
  <div class="ps-container">
    <ul class="breadcrumb">
      <li><a href="index.html">Home</a></li>
      <li><a href="shop-default.html">cart</a></li>
      
    </ul>
  </div>
</div>
<div class="ps-page--product">
  <div class="ps-container">
    <div class="ps-page__container">
      
      
        <div class="ps-page__left">
        <div class="ps-product--detail ps-product--fullwidth">
          <div class="ps-product__header">
            <div class="ps-product__thumbnail" data-vertical="true">
              <figure>
                <div class="ps-wrapper">
                  <div class="ps-product__gallery" data-arrow="true">
                    <div class="item"><a href="img/products/detail/fullwidth/1.jpg"><img src="{{ asset('back_end/social_images') }}/{{ $social->image }}" alt=""></a></div>
                  </div>
                </div>
              </figure>
              <div class="ps-product__variants" data-item="4" data-md="4" data-sm="4" data-arrow="false">
                
              </div>
            </div>
            <div class="ps-product__info">
                <h2>{{ $social->social_name }}</h2>

              <div class="ps-product__meta">
                <h3 style="color:rgb(105, 7, 145)">{{ $social->subcategory_info->subcategory_name }}</h3>
              </div>
                <h4>Sell Price:  ${{ $social->sell_price }}</h4>
              <div class="ps-product__desc">
                <p>Link :<a href="{{ $social->social_link}}"><strong>{{ $social->social_link}}</strong></a></p>
                <p>Friend Follower:<a ><strong>{{ $social->friend_follower}}</strong></a></p>
                
                <ul class="ps-list--dot">
                  <li>Details:<br>{{ $social->description }}</li>
          
                </ul>
                <h4>Quantity: 1</h4>
              </div>
             
              
              <div class="ps-product__shopping">
                <figure>
                  
                  
                </figure><a class="ps-btn ps-btn--black" href="{{ route('addtoocart',[$social->id ])}}">Add to cart</a><a class="ps-btn" href="{{ route('cartpage') }}">Buy Now</a>
               
              </div>
            
            </div>
          </div>
          <div class="ps-product__content ps-tab-root">
            <ul class="ps-tab-list">
              <li class="active"><a href="#tab-1">Description</a></li>
              <li><a href="#tab-2">Specification</a></li>
              <li><a href="#tab-3">Vendor</a></li>
              <li><a href="#tab-4">Reviews (1)</a></li>
              <li><a href="#tab-5">Questions and Answers</a></li>
              <li><a href="#tab-6">More Offers</a></li>
            </ul>
            <div class="ps-tabs">
              <div class="ps-tab active" id="tab-1">
                <div class="ps-document">
                  <h5>Embodying the Raw, Wayward Spirit of Rock 'N' Roll</h5>
                  <p>Embodying the raw, wayward spirit of rock ‘n’ roll, the Kilburn portable active stereo speaker takes the unmistakable look and sound of Marshall, unplugs the chords, and takes the show on the road.</p>
                  <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p><img class="mb-30" src="img/products/detail/content/description.jpg" alt="">
                  <h5>What do you get</h5>
                  <p>Sound of Marshall, unplugs the chords, and takes the show on the road.</p>
                  <p>Weighing in under 7 pounds, the Kilburn is a lightweight piece of vintage styled engineering. Setting the bar as one of the loudest speakers in its class, the Kilburn is a compact, stout-hearted hero with a well-balanced audio which boasts a clear midrange and extended highs for a sound that is both articulate and pronounced. The analogue knobs allow you to fine tune the controls to your personal preferences while the guitar-influenced leather strap enables easy and stylish travel.</p>
                  <p>The FM radio is perhaps gone for good, the assumption apparently being that the jury has ruled in favor of streaming over the internet. The IR blaster is another feature due for retirement – the S6 had it, then the Note5 didn’t, and now with the S7 the trend is clear.</p>
                  <h5>Perfectly Done</h5>
                  <p>Meanwhile, the IP68 water resistance has improved from the S5, allowing submersion of up to five feet for 30 minutes, plus there’s no annoying flap covering the charging port</p>
                  <ul class="pl-0">
                    <li>No FM radio (except for T-Mobile units in the US, so far)</li>
                    <li>No IR blaster</li>
                    <li>No stereo speakers</li>
                  </ul>
                  <p>If you’ve taken the phone for a plunge in the bath, you’ll need to dry the charging port before plugging in. Samsung hasn’t reinvented the wheel with the design of the Galaxy S7, but it didn’t need to. The Gala S6 was an excellently styled device, and the S7 has managed to improve on that.</p>
                </div>
              </div>
              <div class="ps-tab" id="tab-2">
                <div class="table-responsive">
                  <table class="table table-bordered ps-table ps-table--specification">
                    <tbody>
                      <tr>
                        <td>Color</td>
                        <td>Black, Gray</td>
                      </tr>
                      <tr>
                        <td>Style</td>
                        <td>Ear Hook</td>
                      </tr>
                      <tr>
                        <td>Wireless</td>
                        <td>Yes</td>
                      </tr>
                      <tr>
                        <td>Dimensions</td>
                        <td>5.5 x 5.5 x 9.5 inches</td>
                      </tr>
                      <tr>
                        <td>Weight</td>
                        <td>6.61 pounds</td>
                      </tr>
                      <tr>
                        <td>Battery Life</td>
                        <td>20 hours</td>
                      </tr>
                      <tr>
                        <td>Bluetooth</td>
                        <td>Yes</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
              <div class="ps-tab" id="tab-3">
                <h4>GoPro</h4>
                <p>Digiworld US, New York’s no.1 online retailer was established in May 2012 with the aim and vision to become the one-stop shop for retail in New York with implementation of best practices both online</p><a href="#">More Products from gopro</a>
              </div>
              <div class="ps-tab" id="tab-4">
                <div class="row">
                              <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 ">
                                <div class="ps-block--average-rating">
                                  <div class="ps-block__header">
                                    <h3>4.00</h3>
                                                <select class="ps-rating" data-read-only="true">
                                                  <option value="1">1</option>
                                                  <option value="1">2</option>
                                                  <option value="1">3</option>
                                                  <option value="1">4</option>
                                                  <option value="2">5</option>
                                                </select><span>1 Review</span>
                                  </div>
                                  <div class="ps-block__star"><span>5 Star</span>
                                    <div class="ps-progress" data-value="100"><span></span></div><span>100%</span>
                                  </div>
                                  <div class="ps-block__star"><span>4 Star</span>
                                    <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                  </div>
                                  <div class="ps-block__star"><span>3 Star</span>
                                    <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                  </div>
                                  <div class="ps-block__star"><span>2 Star</span>
                                    <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                  </div>
                                  <div class="ps-block__star"><span>1 Star</span>
                                    <div class="ps-progress" data-value="0"><span></span></div><span>0</span>
                                  </div>
                                </div>
                              </div>
                              <div class="col-xl-7 col-lg-7 col-md-12 col-sm-12 col-12 ">
                                <form class="ps-form--review" action="index.html" method="get">
                                  <h4>Submit Your Review</h4>
                                  <p>Your email address will not be published. Required fields are marked<sup>*</sup></p>
                                  <div class="form-group form-group__rating">
                                    <label>Your rating of this product</label>
                                                <select class="ps-rating" data-read-only="false">
                                                  <option value="0">0</option>
                                                  <option value="1">1</option>
                                                  <option value="2">2</option>
                                                  <option value="3">3</option>
                                                  <option value="4">4</option>
                                                  <option value="5">5</option>
                                                </select>
                                  </div>
                                  <div class="form-group">
                                    <textarea class="form-control" rows="6" placeholder="Write your review here"></textarea>
                                  </div>
                                  <div class="row">
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                                                  <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Your Name">
                                                  </div>
                                                </div>
                                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12  ">
                                                  <div class="form-group">
                                                    <input class="form-control" type="email" placeholder="Your Email">
                                                  </div>
                                                </div>
                                  </div>
                                  <div class="form-group submit">
                                    <button class="ps-btn">Submit Review</button>
                                  </div>
                                </form>
                              </div>
                </div>
              </div>
              <div class="ps-tab" id="tab-5">
                <div class="ps-block--questions-answers">
                  <h3>Questions and Answers</h3>
                  <div class="form-group">
                    <input class="form-control" type="text" placeholder="Have a question? Search for answer?">
                  </div>
                </div>
              </div>
              <div class="ps-tab active" id="tab-6">
                <p>Sorry no more offers available</p>
              </div>
            </div>
          </div>
        </div>
      </div>




      <div class="ps-page__right">
        <aside class="widget widget_product widget_features">
          <p><i class="icon-network"></i> Shipping worldwide</p>
          <p><i class="icon-3d-rotate"></i> Free 7-day return if eligible, so easy</p>
          <p><i class="icon-receipt"></i> Supplier give bills for this product.</p>
          <p><i class="icon-credit-card"></i> Pay online or when receiving goods</p>
        </aside>
        <aside class="widget widget_sell-on-site">
          <p><i class="icon-store"></i> Sell on Martfury?<a href="#"> Register Now !</a></p>
        </aside>
        <aside class="widget widget_ads"><a href="#"><img src="img/ads/product-ads.png" alt=""></a></aside>
        <aside class="widget widget_same-brand">
          <h3>Same Brand</h3>
          <div class="widget__content">
                        <div class="ps-product">
                          <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/5.jpg" alt=""></a>
                            <div class="ps-product__badge">-37%</div>
                            <ul class="ps-product__actions">
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                              <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                          </div>
                          <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                              <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                            </select><span>01</span>
                              </div>
                              <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Grand Slam Indoor Of Show Jumping Novel</a>
                              <p class="ps-product__price sale">$32.99 <del>$41.00 </del></p>
                            </div>
                          </div>
                        </div>
                        <div class="ps-product">
                          <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/6.jpg" alt=""></a>
                            <div class="ps-product__badge">-5%</div>
                            <ul class="ps-product__actions">
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                              <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                              <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                            </ul>
                          </div>
                          <div class="ps-product__container"><a class="ps-product__vendor" href="#">Youngshop</a>
                            <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                              <div class="ps-product__rating">
                                            <select class="ps-rating" data-read-only="true">
                                              <option value="1">1</option>
                                              <option value="1">2</option>
                                              <option value="1">3</option>
                                              <option value="1">4</option>
                                              <option value="2">5</option>
                                            </select><span>01</span>
                              </div>
                              <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                            </div>
                            <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Sound Intone I65 Earphone White Version</a>
                              <p class="ps-product__price sale">$100.99 <del>$106.00 </del></p>
                            </div>
                          </div>
                        </div>
          </div>
        </aside>
      </div>
    </div>
   
    <div class="ps-section--default">
      <div class="ps-section__header">
        <h3>Related products</h3>
      </div>
      <div class="ps-section__content">
        <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="6" data-owl-item-xs="2" data-owl-item-sm="2" data-owl-item-md="3" data-owl-item-lg="4" data-owl-item-xl="5" data-owl-duration="1000" data-owl-mousedrag="on">
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/11.jpg" alt=""></a>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price">$13.43</p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Men’s Sports Runnning Swim Board Shorts</a>
                            <p class="ps-product__price">$13.43</p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/12.jpg" alt=""></a>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price">$75.44</p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Paul’s Smith Sneaker InWhite Color</a>
                            <p class="ps-product__price">$75.44</p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/13.jpg" alt=""></a>
                          <div class="ps-product__badge">-7%</div>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/14.jpg" alt=""></a>
                          <div class="ps-product__badge">-7%</div>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Global Office</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Beat Spill 2.0 Wireless Speaker – White</a>
                            <p class="ps-product__price sale">$57.99 <del>$62.99 </del></p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/15.jpg" alt=""></a>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price sale">$332.38</p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">ASUS Chromebook Flip – 10.2 Inch</a>
                            <p class="ps-product__price sale">$332.38</p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/16.jpg" alt=""></a>
                          <div class="ps-product__badge">-7%</div>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Young Shop</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Apple Macbook Retina Display 12&quot;</a>
                            <p class="ps-product__price sale">$1200.00 <del>$1362.99 </del></p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/17.jpg" alt=""></a>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price">$599.00</p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">Samsung UHD TV 24inch</a>
                            <p class="ps-product__price">$599.00</p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/18.jpg" alt=""></a>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price">$233.28</p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                            <p class="ps-product__price">$233.28</p>
                          </div>
                        </div>
                      </div>
                      <div class="ps-product">
                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/shop/19.jpg" alt=""></a>
                          <ul class="ps-product__actions">
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add To Cart"><i class="icon-bag2"></i></a></li>
                            <li><a href="#" data-placement="top" title="Quick View" data-toggle="modal" data-target="#product-quickview"><i class="icon-eye"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Add to Whishlist"><i class="icon-heart"></i></a></li>
                            <li><a href="#" data-toggle="tooltip" data-placement="top" title="Compare"><i class="icon-chart-bars"></i></a></li>
                          </ul>
                        </div>
                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">Robert's Store</a>
                          <div class="ps-product__content"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                            <div class="ps-product__rating">
                                          <select class="ps-rating" data-read-only="true">
                                            <option value="1">1</option>
                                            <option value="1">2</option>
                                            <option value="1">3</option>
                                            <option value="1">4</option>
                                            <option value="2">5</option>
                                          </select><span>01</span>
                            </div>
                            <p class="ps-product__price">$233.28</p>
                          </div>
                          <div class="ps-product__content hover"><a class="ps-product__title" href="product-default.html">EPSION Plaster Printer</a>
                            <p class="ps-product__price">$233.28</p>
                          </div>
                        </div>
                      </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="ps-newsletter">
  <div class="container">
    <form class="ps-form--newsletter" action="do_action" method="post">
      <div class="row">
                    <div class="col-xl-5 col-lg-12 col-md-12 col-sm-12 col-12 ">
                      <div class="ps-form__left">
                        <h3>Newsletter</h3>
                        <p>Subcribe to get information about products and coupons</p>
                      </div>
                    </div>
                    <div class="col-xl-7 col-lg-12 col-md-12 col-sm-12 col-12 ">
                      <div class="ps-form__right">
                        <div class="form-group--nest">
                          <input class="form-control" type="email" placeholder="Email address">
                          <button class="ps-btn">Subscribe</button>
                        </div>
                      </div>
                    </div>
      </div>
    </form>
  </div>
</div>
@endsection