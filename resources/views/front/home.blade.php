@extends('front.layouts.site')

@section('content')

    <div id="homepage-1">

        <!-- Begin Slider show -->
        @include('front.home-includes.slideshow-center')
        <!-- End Slider show -->

        <!-- Begin The best selling sections /الاقسام الافضل مبيعا -->
        <div class="ps-top-categories" style="padding: 10px 0 20px;">
            <div class="ps-container">
                <h3>الأقسام الأفضل مبيعاً</h3>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/1.jpg')}}" alt="">
                            <p>الكترونيات</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/2.jpg')}}" alt="">
                            <p>ملابس</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/3.jpg')}}" alt="">
                            <p>أجهزةالكمبيوتر</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/4.jpg')}}" alt="">
                            <p>المنزل والمطبخ</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/5.jpg')}}" alt="">
                            <p>الصحة &amp; الجمال</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/6.jpg')}}" alt="">
                            <p>الصحة &amp; الجمال</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/7.jpg')}}" alt="">
                            <p>المجوهرات & الساعات</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/8.jpg')}}" alt="">
                            <p>ألعاب التكنولوجيا</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/1.jpg')}}" alt="">
                            <p>الكترونيات</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/2.jpg')}}" alt="">
                            <p>ملابس</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/3.jpg')}}" alt="">
                            <p>أجهزةالكمبيوتر</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/4.jpg')}}" alt="">
                            <p>المنزل والمطبخ</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/5.jpg')}}" alt="">
                            <p>الصحة &amp; الجمال</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/6.jpg')}}" alt="">
                            <p>الصحة &amp; الجمال</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/7.jpg')}}" alt="">
                            <p>المجوهرات & الساعات</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="shop-default.html"></a><img
                                src="{{asset('assets/front/img/categories/8.jpg')}}" alt="">
                            <p>ألعاب التكنولوجيا</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End The best selling sections -->

        <!-- Begin tody action -->
        @include('front.home-includes.home-ads')
        <!-- End tody action -->

        <!-- Begin tody action -->
        @include('front.home-includes.todays-action')
        <!-- End tody action -->

        <div class="ps-home-ads">
            <div class="ps-container">
                <div class="row">
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img
                                src="{{asset('assets/front/img/collection/home-1/ad-1.jpg')}}" alt=""></a>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 "><a class="ps-collection" href="#"><img
                                src="{{asset('assets/front/img/collection/home-1/ad-2.jpg')}}" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Begin service block center -->
        @include('front.home-includes.service-block-center')
        <!-- End service block center -->

        <!-- Begin download-app -->
        @include('front.home-includes.download-app')
        <!-- End download-app -->
 
    </div>
@endsection