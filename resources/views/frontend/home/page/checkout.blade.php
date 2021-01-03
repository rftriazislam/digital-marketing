@extends('frontend.home.master')
@section('maincontent')

<section class="ps-section--account ps-checkout">
    <div class="container">
      <div class="ps-section__header">
        <h3>Checkout Information</h3>
      </div>
      <div class="ps-section__content">
        <form class="ps-form--checkout" action="{{ route('checkoutsave') }}" method="post">
          @csrf
          <div class="ps-form__billing-info">
            <h3 class="ps-form__heading">Contact Information</h3>
           
            <div class="form-group">
              <label>Full Name</label>
              <input class="form-control" type="text" required placeholder="">
           
          </div>
            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Email</label>
                  <input class="form-control"  required type="email" placeholder="">
                </div>
              </div>
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Phone</label>
                  <input class="form-control" required type="text" placeholder="">
                </div>
              </div>
            </div>

            <div class="row">
              <div class="col-sm-6">
                <div class="form-group">
                  <label>Account Name</label>
                  <input class="form-control" required type="text" placeholder="">
                </div>
              </div>
              <div class="col-sm-6"> 
                <div class="form-group">
                  <label>Account No.</label>
                  <input class="form-control" required type="text" placeholder="">
                </div>
              </div>
            </div>

          
           
  
            <a class="ps-btn ps-btn--fullwidth"  style="width: 34%;float: right;">Payment</a>
          </div>
        </form>
      </div>
    </div>
  </section>
@endsection
