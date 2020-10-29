@extends('front.layouts.site')

@section('content')

    <div id="homepage-1">

        <!-- Begin Slider show -->
        @include('front.home-includes.slideshow-center')
        <!-- End Slider show -->

        <!-- Begin The best selling sections /الاقسام الافضل مبيعا -->
        <div class="ps-top-categories" style="padding: 10px 0 20px;">
            <div class="ps-container">
                <h3>الأقسام</h3>
                <div class="row">
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/smart phone.jpg')}}" alt="">
                            <p>الهواتف الذكية</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/3.jpg')}}" alt="">
                            <p>أجهزةالكمبيوتر</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/1.jpg')}}" alt="">
                            <p>الكترونيات</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Home-and-kitchen.png')}}" alt="">
                            <p>المنزل والمطبخ</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/furniture.png')}}" alt="">
                            <p>أثاث ومفروشات</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Baby essentials.png')}}" alt="">
                            <p>مستلزمات الأطفال</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/health-products.png')}}" alt="">
                            <p>الصحة &amp; الجمال</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Jewelry & watches.jpg')}}" alt="">
                            <p>المجوهرات & الساعات</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Vehicles.png')}}" alt="">
                            <p>المركبات</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Real estate.png')}}" alt="">
                            <p>العقارات</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/generators.png')}}" alt="">
                            <p>مولدات الكهرباء</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Jobs and careers.png')}}" alt="">
                            <p>وظائف ومهن</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/meals.png')}}" alt="">
                            <p>المطاعم</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Clothes.jpg')}}" alt="">
                            <p>الملابس</p>
                        </div>
                    </div>

                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/Other sections.png')}}" alt="">
                            <p>أقسام أخرى</p>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                        <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.store')}}"></a><img
                                src="{{asset('assets/front/img/categories/coming soon.png')}}" alt="">
                            <!-- <p>coming soon</p> -->
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