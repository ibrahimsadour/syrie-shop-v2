@extends('front.layouts.site')
@section('title','بـازاركـم')
@section('content')

    <div id="homepage-1">

        <!-- Begin Slider show -->
        @include('front.home-includes.slideshow-center')
        <!-- End Slider show -->

        <!-- Begin Main Categories  sections /االاقسام ا -->
        <div class="ps-top-categories" style="padding: 10px 0 20px;">
            <div class="ps-container">
                <h3>الأقسام</h3>
                <div class="row">
                    @isset($categories)
                        @foreach($categories as $category)
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-6 ">
                                <div class="ps-block--category">

                                            @if(count($category->subCategories))
                                            <a class="ps-block__overlay" href="{{route('site.showSubCategory',[$category->id,$category-> slug])}}"></a>
                                            @else
                                            <a class="ps-block__overlay" href="{{route('site.getProductCategory',[$category->id,$category-> slug])}}"></a>
                                            @endif

                                    <img src="{{$category -> photo}}" alt="{{$category -> name}}">
                                    <p>{{$category -> name}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
        <!-- End The Main Categories  sections -->

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