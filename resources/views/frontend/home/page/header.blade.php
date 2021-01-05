@php( $category = \App\Category::with('subcategory')->where('status',1)->get() )
<header class="header header--standard header--electronic" data-sticky="true">
    <div class="header__top">
      <div class="container">
        <div class="header__left">
          <p>Welcome to Digital Online Store !</p>
        </div>
        <div class="header__right">
          <ul class="header__top-links">
            <li><a href="#">Store Location</a></li>
            <li><a href="#">Track Your Order</a></li>
           
            <li>
              <div class="ps-dropdown language"><a href="#"><img src="{{ asset('front_end/img/flag/en.png') }}" alt=""> English</a>
                <ul class="ps-dropdown-menu">
                  <li><a href="#"><img src="{{ asset('front_end/img/flag/germany.png') }}" alt=""> Germany</a></li>
                  <li><a href="#"><img src="{{ asset('front_end/img/flag/fr.png') }}" alt=""> France</a></li>
                </ul>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="header__content">
      <div class="container">
        <div class="header__content-left"><a class="ps-logo" href="{{ url('/') }}"><img src="{{ asset('front_end/logo/D-1.png') }}" alt="Unistag Digital"></a>
          <div class="menu--product-categories">
            <div class="menu__toggle"><i class="icon-menu"></i><span>Unistag Digital</span></div>
            <div class="menu__content">
                          <ul class="menu--dropdown">
                            @foreach ($category as $v_category)
                                
                            
                            <li class="menu-item-has-children has-mega-menu"><a href="#"><i class="icon-star"></i>{{ $v_category->category_name }}</a>
                              <div class="mega-menu">
                               
                                <div class="mega-menu__column">
                          
                                  <h4>{{ $v_category->category_name }}<span class="sub-toggle"></span>
                                  
                                  </h4>
                                              <ul class="mega-menu__list">
                                                @foreach ($v_category->subcategory as $v_subcategory)
                                                <li><a href="#">{{ $v_subcategory->subcategory_name }}</a>
                                                </li>
                                               @endforeach
                                              </ul>

                                   

                                </div>
                             
                              </div>
                            </li>
                              @endforeach
                           
                            <li><a href="#"><i class="icon-car-siren"></i>Wishlist</a>
                            </li>
                            <li><a href="#"><i class="icon-wrench"></i>Card</a>
                            </li>
                            <li><a href="#"><i class="icon-tag"></i>Services</a>
                            </li>
                          </ul>
            </div>
          </div>
        </div>
        <div class="header__content-center">
          <form class="ps-form--quick-search" action="index.html" method="get">
            <div class="form-group--icon"><i class="icon-chevron-down"></i>
              <select class="form-control">
                <option value="1">All</option>
                <option value="1">Smartphone</option>
                <option value="1">Sounds</option>
                <option value="1">Technology toys</option>
              </select>
            </div>
            <input class="form-control" type="text" placeholder="I'm shopping for...">
            <button>Search</button>
          </form>
        </div>
        <div class="header__content-right">
          <div class="header__actions"><a class="header__extra" href="#"><i class="icon-heart"></i><span><i>0</i></span></a>
            <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>{{  \Cart::getContent()->count() }}</i></span></a>
              <div class="ps-cart__content">
                <div class="ps-cart__items"style="overflow: scroll;width:100%;height:260px;">
                  @php($items = \Cart::getContent())
                 @forelse ($items as $row)
                     
                
                  <div class="ps-product--cart-mobile">
                    <div class="ps-product__thumbnail"><a href="#"><img src="{{ asset('back_end/subcategory_images') }}/{{ $row->attributes->image}}" alt=""></a></div>
                    <div class="ps-product__content" >
                      {{-- <a class="ps-product__remove" href=""><i class="icon-cross"></i></a> --}}
                      <a href="product-default.html">{{ $row->name }}</a>
                      <p><strong>Quantity:</strong> <small style="float:right;">{{ $row->quantity }}</small></p>
                      <p><strong>Price:</strong> <small style="float:right;">${{ $row->price }}</small></p>
                      <p><strong>Subtotal:</strong> <small style="float:right;">${{ $row->getPriceSum() }}</small></p>
                   
                    </div>
                  </div>
                
                       @empty

                    <div class="ps-product--cart-mobile">
                      
                    </div>

                    @endforelse
                </div>

                <div class="ps-cart__footer">
                  <h3> Total Price:<strong>${{ \Cart::getTotal() }}</strong></h3>
                  <figure><a class="ps-btn" href="{{ route('cartpage') }}">View Cart</a><a class="ps-btn" href="{{ route('checkout') }}">Checkout</a></figure>
                </div>


              </div>
            </div>
            <div class="ps-block--user-header">
              <div class="ps-block__left"><i class="icon-user"></i></div>
   <div class="ps-block__right">
              @if(Auth::user()=='')
              <a href="{{route('login')}}" >Login</a>

              @elseif(Auth::user()->role=='admin')
              <a href="{{route('admin')}}">Dashboard</a>
              @elseif(Auth::user()->role=='customer')
              <a href="{{route('customer')}}" >Blogger</a>
              @else
              <a href="" >My Profile</a>
              @endif
            
</div>


            </div>
          </div>
        </div>
      </div>
    </div>
    
    <nav class="navigation">
      <div class="container">
                    <ul class="menu menu--electronic">
                      <li><a href="{{route('category')}}"><i class="icon-star"></i>Category</a>
                      </li>
                      <li><a href="{{route('subcategory')}}"><i class="icon-surveillance"></i>Subcategory</a>
                      </li>
                      {{-- <li><a href="{{route('product')}}"><i class="icon-laundry"></i> Product</a>
                      </li> --}}
                     
                     
                    </ul>
      </div>
    </nav>
  </header>
  <header class="header header--mobile electronic" data-sticky="true">
    <div class="header__top">
      <div class="header__left">
        <p>Welcome to Martfury Online Shopping Store !</p>
      </div>
      <div class="header__right">
        <ul class="navigation__extra">
          <li><a href="#">Sell on Martfury</a></li>
          <li><a href="#">Tract your order</a></li>
          <li>
            <div class="ps-dropdown"><a href="#">US Dollar</a>
              <ul class="ps-dropdown-menu">
                <li><a href="#">Us Dollar</a></li>
                <li><a href="#">Euro</a></li>
              </ul>
            </div>
          </li>
          <li>
            <div class="ps-dropdown language"><a href="#"><img src="{{ asset('front_end/img/flag/en.png') }}" alt="">English</a>
              <ul class="ps-dropdown-menu">
                <li><a href="#"><img src="{{ asset('front_end/img/flag/germany.png') }}" alt=""> Germany</a></li>
                <li><a href="#"><img src="{{ asset('front_end/img/flag/fr.png') }}" alt=""> France</a></li>
              </ul>
            </div>
          </li>
        </ul>
      </div>
    </div>
    <div class="navigation--mobile">
      <div class="navigation__left"><a class="ps-logo" href="index.html"><img style="width:152px;height:44px;" src="{{ asset('front_end/logo/UDM-3.png') }}" alt=""></a></div>
      <div class="navigation__right">
        <div class="header__actions">
          <div class="ps-cart--mini"><a class="header__extra" href="#"><i class="icon-bag2"></i><span><i>0</i></span></a>
            <div class="ps-cart__content">
              <div class="ps-cart__items">
                <div class="ps-product--cart-mobile">
                  <div class="ps-product__thumbnail"><a href="#"><img src="{{ asset('front_end/img/products/clothing/7.jpg') }}" alt=""></a></div>
                  <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                    <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                  </div>
                </div>
                <div class="ps-product--cart-mobile">
                  <div class="ps-product__thumbnail"><a href="#"><img src="{{ asset('front_end/img/products/clothing/5.jpg') }}" alt=""></a></div>
                  <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">Sleeve Linen Blend Caro Pane Shirt</a>
                    <p><strong>Sold by:</strong>  YOUNG SHOP</p><small>1 x $59.99</small>
                  </div>
                </div>
              </div>
              <div class="ps-cart__footer">
                <h3>Sub Total:<strong>$59.99</strong></h3>
                <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
              </div>
            </div>
          </div>
          <div class="ps-block--user-header">
            <div class="ps-block__left"><i class="icon-user"></i></div>
            <div class="ps-block__right"><a href="{{route('login')}}">Login</a><a href="my-account.html">Signup</a></div>
          </div>
        </div>
      </div>
    </div>
    <div class="ps-search--mobile">
      <form class="ps-form--search-mobile" action="index.html" method="get">
        <div class="form-group--nest">
          <input class="form-control" type="text" placeholder="Search something...">
          <button><i class="icon-magnifier"></i></button>
        </div>
      </form>
    </div>
  </header>