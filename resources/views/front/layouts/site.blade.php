<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Martfury - Multi Vendor &amp; Marketplace</title>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/fonts/Linearicons/Linearicons/Font/demo-files/demo.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/bootstrap4/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/owl-carousel/assets/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/slick/slick/slick.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/lightGallery-master/dist/css/lightgallery.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/jquery-bar-rating/dist/themes/fontawesome-stars.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/jquery-ui/jquery-ui.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/plugins/select2/dist/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
</head>

<body>
    <header class="header header--1" data-sticky="true">
        @include('front.includes.header_top')
        @include('front.includes.navigation')
    </header>

    <!-- ############# Begin Mobile ############### -->

    <!--Begin header_mobile -->
    @include('front.includes.header_mobile')
    <!-- End header_mobile -->

    <!-- Begin cart-mobile -->
    @include('front.includes.mobile.my-account')
    <!-- End cart-mobile -->

    <!--  Begin navigation-mobile-->
    @include('front.includes.mobile.navigation-mobile')
    <!-- End navigation-mobile -->

    <!--Begin navigation--list  -->
    @include('front.includes.mobile.navigation--list')
    <!-- End navigation--list -->

    <!-- Begin search-sidebar-mobile  -->
    @include('front.includes.mobile.search-sidebar-mobile')
    <!-- End search-sidebar-mobile -->

    <!-- Begin menu-mobile -->
    @include('front.includes.mobile.menu-mobile')
    <!-- End menu-mobile -->

    <!-- ############# End Mobile ############### -->

	@yield('content')

    @include('front.includes.footer')



    <!-- <div class="ps-popup" id="subscribe" data-time="500">
        <div class="ps-popup__content bg--cover" data-background="{{asset('assets/front/img/bg/subscribe.jpg')}}"><a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
            <form class="ps-form--subscribe-popup" action="{{route('site.index')}}" method="get">
                <div class="ps-form__content">
                    <h4>أحصل <strong>25%</strong> تخفيض</h4>
                    <p>اشترك في أخر الأخبار    <br /> لكي تحصل على جميع العروض التي تضاف مؤخرا <br /></p>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="البريد الألكتروني" required>
                            <button class="ps-btn">أشتراك</button>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="not-show" name="not-show">
                            <label for="not-show">لا تظهر هذه النافذة  مرة أخرى</label>
                        </div>
                </div>
            </form>
        </div>
    </div> -->

    <div id="back2top"><i class="pe-7s-angle-up"></i></div>
    <div class="ps-site-overlay"></div>
    <div id="loader-wrapper">
        <div class="loader-section section-left"></div>
        <div class="loader-section section-right"></div>
    </div>

    <div class="ps-search" id="site-search"><a class="ps-btn--close" href="#"></a>
        <div class="ps-search__content">
            <form class="ps-form--primary-search" action="do_action" method="post">
                <input class="form-control" type="text" placeholder="Search for...">
                <button><i class="aroma-magnifying-glass"></i></button>
            </form>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    </script><script src="{{asset('assets/front/plugins/jquery-1.12.4.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/popper.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/owl-carousel/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/bootstrap4/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/imagesloaded.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/masonry.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery.matchHeight-min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/slick/slick/slick.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery-bar-rating/dist/jquery.barrating.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/slick-animation.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/lightGallery-master/dist/js/lightgallery-all.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery-ui/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/sticky-sidebar/dist/sticky-sidebar.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/jquery.slimscroll.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/select2/dist/js/select2.full.min.js')}}"></script>
    <script src="{{asset('assets/front/plugins/gmap3.min.js')}}"></script>
    <!-- custom scripts-->
    <script src="{{asset('assets/front/js/main.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDxflHHc5FlDVI-J71pO7hM1QJNW1dRp4U&amp;region=GB"></script>
</body>

</html>