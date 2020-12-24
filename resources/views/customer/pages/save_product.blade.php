@extends('customer.dashboard')
@section('maincontent')

<section class="ps-dashboard ps-items-listing">
    <div class="ps-section__left">
        <div class="table-responsive">
            <p style="color:royalblue">Thank You For creating Service After Review Admin Approved Verified soon.</p>    
            
            
            <h4 style="text-align:center">send info:</h4>
            <h4>A/c Type:  </h4> {{ Session::get('send_wallet')}}
            <h4>Account No:{{ Session::get('send_acount')}}</h4>

            <h4 style="text-align:center">Get info:</h4>
            <h4>A/c Type:{{ Session::get('get_wallet')}}</h4>
            <h4>Account No:{{ Session::get('get_account')}}</h4>

            <h4>Sell Rate:{{ Session::get('sell_rate')}}</h4>
            <h4>Purchage Rate:{{ Session::get('purchase_rate')}}</h4>
            <h4>Your Amount:{{ Session::get('your_amount')}}</h4>
        
                       
            
                        
        </div>
        
    </div>
   
</section>

@endsection