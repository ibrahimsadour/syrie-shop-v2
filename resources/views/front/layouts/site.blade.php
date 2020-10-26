<!DOCTYPE html>
<html lang="ar" dir="rtl">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>Martfury - Multi Vendor &amp; Marketplace</title>
    <link href="https://fonts.googleapis.com/css?family=Work+Sans:300,400,500,600,700&amp;amp;subset=latin-ext" rel="stylesheet">
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
    @include('front.includes.header_mobile')

    <div class="ps-panel--sidebar" id="cart-mobile">
        <div class="ps-panel__header">
            <h3>Shopping Cart</h3>
        </div>
        <div class="navigation__content">
            <div class="ps-cart--mobile">
                <div class="ps-cart__content">
                    <div class="ps-product--cart-mobile">
                        <div class="ps-product__thumbnail"><a href="#"><img src="img/products/clothing/7.jpg" alt=""></a></div>
                        <div class="ps-product__content"><a class="ps-product__remove" href="#"><i class="icon-cross"></i></a><a href="product-default.html">MVMTH Classical Leather Watch In Black</a>
                            <p><strong>Sold by:</strong> YOUNG SHOP</p><small>1 x $59.99</small>
                        </div>
                    </div>
                </div>
                <div class="ps-cart__footer">
                    <h3>Sub Total:<strong>$59.99</strong></h3>
                    <figure><a class="ps-btn" href="shopping-cart.html">View Cart</a><a class="ps-btn" href="checkout.html">Checkout</a></figure>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-panel--sidebar" id="navigation-mobile">
        <div class="ps-panel__header">
            <h3>الاقسام الرئيسية</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="current-menu-item "><a href="#"> العروض</a>
                </li>
                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">مستلزمات الكترونية</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>الكترونيات<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="#">MP3 الصوتيات</a>
                                </li>
                                <li class="current-menu-item "><a href="#">التلفاز</a>
                                </li>
                                <li class="current-menu-item "><a href="#">الكامرا,الصور &#038; الفيديو</a>
                                </li>
                                <li class="current-menu-item "><a href="#">البرادات</a>
                                </li>
                                <li class="current-menu-item "><a href="#">السماعات</a>
                                </li>
                                <li class="current-menu-item "><a href="#">العاب الفيديو</a>
                                </li>
                                <li class="current-menu-item "><a href="#">سماعات البلوتث</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Office الكترونيات</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>الاكسسوارت &amp; Parts<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="#">كبال الديجاتل</a>
                                </li>
                                <li class="current-menu-item "><a href="#">كبال الصوت والفيديو</a>
                                </li>
                                <li class="current-menu-item "><a href="#">البطاريات</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="current-menu-item "><a href="#">الملابس</a>
                </li>
                <li class="current-menu-item "><a href="#">المنزل &#038; الحديقة &#038; المطبخ</a>
                </li>
                <li class="current-menu-item "><a href="#">الصحة &#038; الجمال</a>
                </li>
                <li class="current-menu-item "><a href="#">المجوهرات &amp; الساعات</a>
                </li>
                <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#">أجهزة الكمبيوتر</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>أجهزة الكمبيوتر<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="#">أجهزة الكمبيوتر&#038; أجهزة لوحية</a>
                                </li>
                                <li class="current-menu-item "><a href="#">لابتوب</a>
                                </li>
                                <li class="current-menu-item "><a href="#">جهاز الأسقاط</a>
                                </li>
                                <li class="current-menu-item "><a href="#">الشبكات</a>
                                </li>
                                <li class="current-menu-item "><a href="#">الهارد ديسك&#038; التخزين</a>
                                </li>
                                <li class="current-menu-item "><a href="#">Computer Components</a>
                                </li>
                                <li class="current-menu-item "><a href="#">مكافحة الفيروسات</a>
                                </li>
                                <li class="current-menu-item "><a href="#">ألعاب الكومبيوتر</a>
                                </li>
                                <li class="current-menu-item "><a href="#">الاكسسوارت</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="current-menu-item "><a href="#">مستلزمات الأطفال</a>
                </li>
                <li class="current-menu-item "><a href="#">المستلزمات الرياضية</a>
                </li>
                <li class="current-menu-item "><a href="#">الموبايلات&#038; الاكسسورات</a>
                </li>
                <li class="current-menu-item "><a href="#">الكتب &#038; القرطاسية</a>
                </li>
                <li class="current-menu-item "><a href="#">السيارات &#038;الميتورات</a>
                </li>
                <li class="current-menu-item "><a href="#">مولدات الكهرباء</a>
                </li>
                <li class="current-menu-item "><a href="#">اقسام اخرى</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="navigation--list">
        <div class="navigation__content"><a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> القائمة</span></a><a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> الاقسام</span></a><a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> البحث</span></a><a class="navigation__item ps-toggle--sidebar" href="#cart-mobile"><i class="icon-bag2"></i><span> السلة</span></a></div>
    </div>
    <div class="ps-panel--sidebar" id="search-sidebar">
        <div class="ps-panel__header">
            <form class="ps-form--search-mobile" action="index.html" method="get">
                <div class="form-group--nest">
                    <input class="form-control" type="text" placeholder="Search something...">
                    <button><i class="icon-magnifier"></i></button>
                </div>
            </form>
        </div>
        <div class="navigation__content"></div>
    </div>
    <div class="ps-panel--sidebar" id="menu-mobile">
        <div class="ps-panel__header">
            <h3>Menu</h3>
        </div>
        <div class="ps-panel__content">
            <ul class="menu--mobile">
                <li class="menu-item-has-children"><a href="index.html">Home</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li class="current-menu-item "><a href="homepage-2.html">قطع غيار السيارات </a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-10.html">تكنولوجيا </a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-9.html">الخضراوات والفواكه</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-3.html">الرئيسية التحديث الاول</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-4.html">الرئيسية التحديث  الثاني</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-5.html">الرئيسية التحديث  الثالث</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-6.html">الرئيسية التحديث  الرابع</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-7.html">Home الكترونيات</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-8.html">الاثاث والمفروشات</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-kids.html">الاطفال</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-photo-and-video.html">Home photo and picture</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="shop-default.html">Shop</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="shop-default.html">Shop Default</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-default.html">Shop Fullwidth</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="product-default.html">Default</a>
                                </li>
                                <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                                </li>
                                <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                                </li>
                                <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                                </li>
                                <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Types<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                </li>
                                <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                </li>
                                <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                                </li>
                                <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                                </li>
                                <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                                </li>
                                <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                                </li>
                                <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                                </li>
                                <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                                </li>
                                <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                                </li>
                                <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Woo Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                </li>
                                <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                </li>
                                <li class="current-menu-item "><a href="compare.html">Compare</a>
                                </li>
                                <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                </li>
                                <li class="current-menu-item "><a href="my-account.html">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Pages</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Basic Page<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="about-us.html">About Us</a>
                                </li>
                                <li class="current-menu-item "><a href="contact-us.html">Contact</a>
                                </li>
                                <li class="current-menu-item "><a href="faqs.html">Faqs</a>
                                </li>
                                <li class="current-menu-item "><a href="comming-soon.html">Comming Soon</a>
                                </li>
                                <li class="current-menu-item "><a href="404-page.html">404 Page</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Vendor Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="become-a-vendor.html">Become a Vendor</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-store.html">Vendor Store</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-dashboard-free.html">Vendor Dashboard Free</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-dashboard-pro.html">Vendor Dashboard Pro</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">Blogs</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Blog Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Single Blog<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
	
	@yield('content')

    @include('front.includes.footer')

    <div class="ps-popup" id="subscribe" data-time="500">
        <div class="ps-popup__content bg--cover" data-background="{{asset('assets/front/img/bg/subscribe.jpg')}}"><a class="ps-popup__close" href="#"><i class="icon-cross"></i></a>
            <form class="ps-form--subscribe-popup" action="index.html" method="get">
                <div class="ps-form__content">
                    <h4>Get <strong>25%</strong> Discount</h4>
                    <p>Subscribe to the Martfury mailing list <br /> to receive updates on new arrivals, special offers <br /> and our promotions.</p>
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="Email Address" required>
                            <button class="ps-btn">Subscribe</button>
                        </div>
                        <div class="ps-checkbox">
                            <input class="form-control" type="checkbox" id="not-show" name="not-show">
                            <label for="not-show">Don't show this popup again</label>
                        </div>
                </div>
            </form>
        </div>
    </div>

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
    
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('assets/front/plugins/jquery-1.12.4.min.js')}}"></script>
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