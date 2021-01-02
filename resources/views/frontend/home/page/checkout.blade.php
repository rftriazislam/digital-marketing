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
              <label>Full Name</label>
              <input class="form-control" type="text" placeholder="">
            </div>
            <div class="form-group">
              <label>Email</label>
              <input class="form-control" type="email" placeholder="">
            </div>
            <div class="form-group">
              <label>Phone</label>
              <input class="form-control" type="text" placeholder="">
            </div>
            <div class="form-group">
              <label>Account Name</label>
              <input class="form-control" type="text" placeholder="">
            </div>
            <div class="form-group">
              <label>Account Number</label>
              <input class="form-control" type="text" placeholder="">
            </div>
  
            <a class="ps-btn ps-btn--fullwidth" href="" style="width: 34%;float: right;">Payment</a>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
