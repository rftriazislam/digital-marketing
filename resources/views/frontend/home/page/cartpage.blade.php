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
                <th>ID</th>
                <th>Product name</th>
                <th>PRICE</th>
                <th>QUANTITY</th>
                <th>TOTAL</th>
                <th>Remove</th>
              </tr>
            </thead>
            <tbody>
@php($cart=\Cart::getContent())
@foreach ($cart as $item)
    

              <tr>
                <td>{{ $item->id }}</td>
                <td>
                  <div class="ps-product--cart">
                    {{-- <div class="ps-product__thumbnail"><a href="product-default.html"><img src="img/products/electronic/1.jpg" alt=""></a></div> --}}
                    <div class="ps-product__content">
                      <a href="product-default.html">{{ $item->name }}</a>
                    
                    </div>
                  </div>
                </td>
                <td class="price">${{ $item->price }}</td>
                {{-- <td>
                  <div class="form-group--number">
                    <button class="up">+</button>
                    <button class="down">-</button>
                    <input class="form-control" type="text" placeholder="1" value="1">
                  </div>
                </td> --}}
                <td>{{ $item->quantity }}</td>
                <td>${{ $item->getPriceSum() }}</td>
                <td><a href="#"><i class="icon-cross"></i></a></td>
              </tr>
             @endforeach
             
            </tbody>
          </table>
        </div>
        <div class="row" style="margin-bottom: 20px">
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 " >
          <div class="ps-block--shopping-total" style="border: 0;background-color:white">
            <div class="ps-block__header">
              <p>Subtotal <span> ${{ \Cart::getSubTotal() }}</span></p>
            </div>
         
              <h3>Total <span>${{ \Cart::getTotal() }}</span></h3>
           
          </div>
         
        </div>
      </div>
      <div class="ps-section__cart-actions"><a class="ps-btn" href="{{ url('/') }}" style="background-color: #673AB7;"><i class="icon-arrow-left"></i> Back to Shopping</a><a class="ps-btn ps-btn--outline" href="{{ route('checkout') }}" style="color:white"><i class="icon-sync"></i> Proceed to checkout</a></div>
      </div>
      <div class="ps-section__footer" >
        <div class="row" style="margin-bottom: 20px">
                  
                     
        </div>
      </div>
    </div>
  </div>
</div>

@endsection

