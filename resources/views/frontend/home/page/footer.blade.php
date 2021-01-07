@php( $category = \App\Category:: where('status',1)->get() )
<footer class="ps-footer">
    <div class="container">
      <div class="ps-footer__links">
        @foreach ($category as $v_category)
            
  
        <p>
          <strong>{{ $v_category->name }}</strong>
               @foreach ($v_category->subcategory as $v_subcategory)
          <a href="#">{{ $v_subcategory->name }}</a>
         @endforeach
        </p>
        
       
         @endforeach
      </div>
      <div class="ps-footer__widgets">
        <aside class="widget widget_footer widget_contact-us">
          <h4 class="widget-title">Contact us</h4>
          <div class="widget_content">
            <p>Call us 24/7</p>
            <h3>+8801716967050</h3>
            <p>Head Office & Marketing Office: House # 49, Road # 12, Sector # 11 Uttara - 1230, Dhaka, Bangladesh<br><a href="mailto:info@unistag.com">info@unistag.com</a></p>
            <ul class="ps-list--social">
              <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
          </div>
        </aside>
        <aside class="widget widget_footer">
          <h4 class="widget-title">Quick links</h4>
          <ul class="ps-list--link">
            <li><a href="#">Policy</a></li>
            <li><a href="#">Term & Condition</a></li>
            <li><a href="#">Shipping</a></li>
            <li><a href="#">Return</a></li>
            <li><a href="faqs.html">FAQs</a></li>
          </ul>
        </aside>
        <aside class="widget widget_footer">
          <h4 class="widget-title">Company</h4>
          <ul class="ps-list--link">
            <li><a href="about-us.html">About Us</a></li>
            <li><a href="#">Affilate</a></li>
            <li><a href="#">Career</a></li>
            <li><a href="contact-us.html">Contact</a></li>
          </ul>
        </aside>
        <aside class="widget widget_footer">
          <h4 class="widget-title">Bussiness</h4>
          <ul class="ps-list--link">
            <li><a href="#">Our Press</a></li>
            <li><a href="checkout.html">Checkout</a></li>
            <li><a href="my-account.html">My account</a></li>
            <li><a href="shop-default.html">Shop</a></li>
          </ul>
        </aside>
      </div>
     
      <div class="ps-footer__copyright">
        <p>© 2020 <a href="www.codewin.xyz"><b>Codewin</b></a>. All Rights Reserved</p>
        {{-- <p><span>We Using Safe Payment For:</span>
            <a href="#"><img src="{{ asset('payment/paypel.png') }}" alt="" style="height:80px;width:80px"></a>
            <a href="#"><img src="{{ asset('payment/visa1_.jpg') }}" alt=""style="height:80px;width:80px"></a>
            <a href="#"><img src="{{ asset('payment/paypel.png') }}" alt=""style="height:80px;width:80px"></a>
            <a href="#"><img src="{{ asset('payment/visa2.jpg') }}" alt=""style="height:80px;width:80px"></a>
            <a href="#"><img src="{{ asset('payment/paypel.png') }}" alt=""style="height:80px;width:80px"></a>
        </p> --}}
      </div>
    </div>
  </footer>