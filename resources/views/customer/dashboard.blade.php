<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="apple-touch-icon.png" rel="apple-touch-icon">
    <link href="favicon.png" rel="icon">

    <title>@yield('title')</title>

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('back_end/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('back_end/fonts/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{ asset('back_end/plugins/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('back_end/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{ asset('back_end/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('back_end/plugins/summernote/summernote-bs4.min.css')}}">
    <link rel="stylesheet" href="{{ asset('back_end/plugins/apexcharts-bundle/dist/apexcharts.css')}}">
    <link rel="stylesheet" href="{{ asset('back_end/css/style.css')}}">
  
    <script src=www.codermen.com/js/jquery.js></script>
</head>

<body>
    <header class="header--mobile">
        <div class="header__left">
            <button class="ps-drawer-toggle"><i class="icon icon-menu"></i></button><img src="" alt="">
        </div>
        <div class="header__center"><a class="ps-logo" href="#"><img src="img/logo.png" alt=""></a></div>
        <div class="header__right"><a class="header__site-link" href="#"><i class="icon-exit-right"></i></a></div>
    </header>
    <aside class="ps-drawer--mobile">
        <div class="ps-drawer__header">
            <h4> Menu</h4>
            <button class="ps-drawer__close"><i class="icon icon-cross"></i></button>
        </div>
        <div class="ps-drawer__content">
            <ul class="menu">
                <li><a class="active" href="index.html"><i class="icon-home"></i>Dashboard</a></li>
                <li><a href="products.html"><i class="icon-database"></i>Products</a></li>
                <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                <li><a href="customers.html"><i class="icon-users2"></i>Customers</a></li>
                <li><a href="coupons.html"><i class="icon-percent-circle"></i>Coupons</a></li>
                <li><a href="Categories.html"><i class="icon-papers"></i>Categories</a></li>
                <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
            </ul>
        </div>
    </aside>
    <div class="ps-site-overlay"></div>
    <main class="ps-main">
        <div class="ps-main__sidebar">
            <div class="ps-sidebar">
                <div class="ps-sidebar__top">
                    <div class="ps-block--user-wellcome">
                        <div class="ps-block__left"><img src="{{asset('back_end/img/user/admin.jpg')}}" alt="" /></div>
                        <div class="ps-block__right">
                            <p>Hello,<a href="#">{{Auth::user()->name}}</a></p>
                        </div>
                        <div class="ps-block__action"><a href="#"><i class="icon-exit"></i></a></div>
                    </div>
                    <div class="ps-block--earning-count"><small>Earning</small>
                        <h3>$12,560.55</h3>
                    </div>
                </div>
                <div class="ps-sidebar__content">
                    <div class="ps-sidebar__center">
                        <ul class="menu">
                            <li><a class="active" href="index.html"><i class="icon-home"></i>Dashboard</a></li>
                     

                            <li><a href="{{ route('customer.product') }}"><i class="icon-database"></i>Products</a></li>
                            <li><a href="{{ route('customer.product') }}"><i class="icon-database"></i>Balance</a></li>
                            <li><a href="orders.html"><i class="icon-bag2"></i>Orders</a></li>
                            <li><a href="customers.html"><i class="icon-users2"></i>Withdraw</a></li>
                            <li><a href="coupons.html"><i class="icon-percent-circle"></i>Affiliate Link</a></li>
                            <li><a href="customers.html"><i class="icon-users2"></i>Promotional materials</a></li>
                            <li><a href="settings.html"><i class="icon-cog"></i>Settings</a></li>
                        </ul>
                    </div>
                    <div class="ps-sidebar__footer">
                        <div class="ps-copyright"><img src="img/logo.png" alt="">
                            <p>&copy;2020 <a href="www.codewin.com"><b>Codewin</b></a>. <br/> All rights reversed.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ps-main__wrapper">
            <header class="header--dashboard">
                <div class="header__left">
                    <h3>Dashboard</h3>
                    <p>Everything here</p>
                </div>
                <div class="header__center">
                    <form class="ps-form--search-bar" action="index.html" method="get">
                        <input class="form-control" type="text" placeholder="Search something">
                        <button><i class="icon-magnifier"></i></button>
                    </form>
                </div>
                <div class="header__right"><a class="header__site-link" href="#"><span>View your store</span><i class="icon-exit-right"></i></a></div>
            </header>

        @yield('maincontent')
        </div>
    </main>
    <script src="{{ asset('back_end/plugins/jquery.min.js') }}"></script>
    <script src="{{ asset('back_end/plugins/popper.min.js') }}"></script>
    <script src="{{ asset('back_end/plugins/bootstrap/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('back_end/plugins/jquery.matchHeight-min.js') }}"></script>
    <script src="{{ asset('back_end/plugins/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('back_end/plugins/summernote/summernote-bs4.min.js') }}"></script>
    <script src="{{ asset('back_end/plugins/apexcharts-bundle/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('back_end/js/chart.js') }}"></script>
    <!-- custom code-->
    <script src="{{ asset('back_end/js/main.js') }}"></script>
    <script src=www.codermen.com/js/jquery.js></script>
</body>

</html>