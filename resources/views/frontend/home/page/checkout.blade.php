@extends('frontend.home.master')
@section('maincontent')

<section class="ps-section--account ps-checkout">
    <div class="container">
      <div class="ps-section__header">
        <h3>Checkout Information</h3>
      </div>
      <div class="ps-section__content">
        <form class="ps-form--checkout" action="index.html" method="get">
          <div class="ps-form__billing-info">
            <h3 class="ps-form__heading">Contact Information</h3>
            <div class="form-group">
              <label>Email or Phone number</label>
              <input class="form-control" type="text" placeholder="">
            </div>
            <div class="form-group">
              <div class="ps-checkbox">
                <input class="form-control" type="checkbox" id="keep-update" placeholder="">
                <label for="keep-update">Keep me up to date on news and exclusive offers?</label>
              </div>
            </div>
            <h3 class="ps-form__heading">Shipping Address</h3>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>First Name</label>
                  <input class="form-control" type="text" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Last Name</label>
                  <input class="form-control" type="text" placeholder="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <label>Address</label>
              <input class="form-control" type="text" placeholder="">
            </div>
            <div class="form-group">
              <label>Apartment</label>
              <input class="form-control" type="text" placeholder="">
            </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>City</label>
                  <input class="form-control" type="text" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Postal Code</label>
                  <input class="form-control" type="text" placeholder="">
                </div>
              </div>
            </div>
            <div class="form-group">
              <div class="ps-checkbox">
                <input class="form-control" type="checkbox" id="save-next-time" placeholder="">
                <label for="save-next-time">Keep me up to date on news and exclusive offers?</label>
              </div>
            </div>
            <a class="ps-btn ps-btn--fullwidth" href="" style="width: 34%;float: right;">Payment</a>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
