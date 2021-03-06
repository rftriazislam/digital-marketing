@extends('frontend.home.master')
@section('maincontent')
<main class="ps-page--my-account">
    <div class="ps-breadcrumb">
      <div class="container">
        <ul class="breadcrumb">
          <li><a href="index.html">Home</a></li>
          <li><a href="user-information.html">Account</a></li>
          <li>Payment</li>
        </ul>
      </div>
    </div>
    <section class="ps-section--account ps-checkout">
      <div class="container">
        <div class="ps-section__header">
          <h3>Payment</h3>
        </div>
        <div class="ps-section__content">
          <div class="ps-form--checkout" >
            <div class="ps-form__content">
              <div class="row">
                            <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 ">
                              <div class="ps-block--shipping">
                                <div class="ps-block__panel">
                                  <figure><small>Name</small>
                                    <p><a href="#">{{ $name }}</a></p><a href="#">Change</a>
                                  </figure>
                                  <figure><small>Email</small>
                                    <p><a href="#">{{ $email }}</a></p><a href="#">Change</a>
                                  </figure>
                                  <figure><small>Phone</small>
                                    <p>{{ $phone }}</p><a href="#">Change</a>
                                  </figure>
                                </div>
                                <h4>Shipping method</h4>
                                <div class="ps-block__panel">
                                  <figure><small>International Shipping</small><strong> $20.00</strong></figure>
                                </div>
                                <h4>Payment Methods</h4>
                                <div class="ps-block--payment-method">
                                  <ul class="ps-tab-list">
                                    <li class="active"><a class="ps-btn ps-btn--sm" href="#visa">Visa / Master Card</a></li>
                                    <li><a class="ps-btn ps-btn--sm" href="#paypal">Paypal</a></li>
                                  </ul>
                                  <div class="ps-tabs">
                                    <div class="ps-tab active" id="visa">
                                      <form class="ps-form--visa" action="{{ route('paymentcomplete') }}" method="post">
                                       @csrf
                                        <div class="form-group">
                                          <label>Card number</label>
                                          <input class="form-control" type="text" placeholder="">
                                        </div>
                                        <div class="form-group">
                                          <label>Card Holders</label>
                                          <input class="form-control" type="text" placeholder="">
                                        </div>
                                        <div class="row">
                                          <div class="col-8">
                                            <div class="form-group">
                                              <label>Experation Date</label>
                                              <div class="row">
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Month">
                                                  </div>
                                                </div>
                                                <div class="col-6">
                                                  <div class="form-group">
                                                    <input class="form-control" type="text" placeholder="Year">
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                          <div class="col-4">
                                            <div class="form-group">
                                              <label>CVV</label>
                                              <input class="form-control" type="text" placeholder="">
                                            </div>
                                          </div>
                                        </div>
                                        <div class="form-group submit">
                                          <button class="ps-btn ps-btn--fullwidth" type="submit">Submit</button>
                                        </div>
                                      </form>
                                    </div>
                                    <div class="ps-tab" id="paypal"><a class="ps-btn" href="#">Proceed with Paypal</a></div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                              <div class="ps-block--checkout-order">
                                <div class="ps-block__content">
                                  <figure>
                                    <figcaption><strong>Product</strong><strong>Total</strong></figcaption>
                                  </figure>
                                  <figure class="ps-block__items">

                                    @php($cart=\Cart::getContent())
                                    @foreach ($cart as $item)
                                    <a href="#">
                                      <strong>{{ $item->name }}</strong>
                                      <span>{{ $item->quantity }} X <small>${{ $item->getPriceSum() }}</small></span>
                                    </a>
                                      
                                    @endforeach


                                  </figure>
                                  <figure>
                                    <figcaption><strong>Subtotal</strong><strong> ${{ \Cart::getSubTotal() }}</strong></figcaption>
                                  </figure>
                                  <figure>
                                    <figcaption><strong>Shipping</strong><strong> $20</strong></figcaption>
                                  </figure>
                                  <figure class="ps-block__total">
                                    <h3>Total<strong> ${{ \Cart::getTotal()+20 }}</strong></h3>
                                  </figure>
                                </div>
                              </div>
                            </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
  </main>

@endsection