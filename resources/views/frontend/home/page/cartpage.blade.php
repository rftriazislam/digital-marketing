@extends('frontend.home.master')
@section('maincontent')
<div class="ps-page--simple">
  <div class="ps-breadcrumb">
    <div class="container">
      <ul class="breadcrumb">
        <li><a href="index.html">Home</a></li>
        <li><a href="shop-default.html">Shop</a></li>
        <li>Whishlist</li>
      </ul>
    </div>
  </div>
  <div class="ps-section--shopping ps-shopping-cart">
    <div class="container">
      <div class="ps-section__header">
        <h1>Shopping Cart</h1>
      </div>
      <div class="ps-section__content">
        <div class="table-responsive">
          <table class="table ps-table--shopping-cart">
            <thead>
              <tr>
                <th>Product name</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <div class="ps-product--cart">
                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt=""></a></div>
                    <div class="ps-product__content"><a href="product-default.html">Facebook ID</a>
                      <p>Sold By:<strong> HHH</strong></p>
                    </div>
                  </div>
                </td>
                <td class="price">$220.00</td>
                <td>
                  <div class="form-group--number">
                    <button class="up">+</button>
                    <button class="down">-</button>
                    <input class="form-control" type="text" placeholder="1" value="1">
                  </div>
                </td>
                <td>$120.00</td>
                <td><a href="#"><i class="icon-cross"></i></a></td>
              </tr>
              <tr>
                <td>
                  <div class="ps-product--cart">
                    <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/clothing/2.jpg" alt=""></a></div>
                    <div class="ps-product__content"><a href="product-default.html">Youtube ID</a>
                      <p>Sold By:<strong> Gold</strong></p>
                    </div>
                  </div>
                </td>
                <td class="price">$200.00</td>
                <td>
                  <div class="form-group--number">
                    <button class="up">+</button>
                    <button class="down">-</button>
                    <input class="form-control" type="text" placeholder="1" value="1">
                  </div>
                </td>
                <td>$200.00</td>
                <td><a href="#"><i class="icon-cross"></i></a></td>
              </tr>
            </tbody>
          </table>
        </div>
        <div class="row" style="margin-bottom: 20px">
        <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 " >
          <div class="ps-block--shopping-total">
            <div class="ps-block__header">
              <p>Subtotal <span> $320.00</span></p>
            </div>
         
              <h3>Total <span>$320.00</span></h3>
           
          </div>
          <a class="ps-btn ps-btn--fullwidth" href="{{ route('checkout') }}">Proceed to checkout</a>
        </div>
      </div>
      </div>
      <div class="ps-section__footer" >
        <div class="row" style="margin-bottom: 20px">
                  
                     
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

