@extends('front.layouts.site')
@section('title','الاقسام الفرعية ')

@section('content')
    <div id="homepage-1">
        <!-- Begin Slider show -->
        @include('front.home-includes.slideshow-center')
        <!-- End Slider show -->

        <!-- Begin Main Categories  sections /االاقسام ا -->
        <div class="ps-top-categories" style="padding: 10px 0 20px;">
            <div class="ps-container">
                @isset($categories)
                    <h3> قسم الـ @foreach($categories as $Category){{$Category->name}}@endforeach <p>اختر القسم الفرعي الذي يناسبك</p></h3>
                @endisset
                <div class="row">
                    @isset($subCategories)
                        @foreach($subCategories as $subCategory)
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                                <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('site.getProductSubCategory',[$subCategory->id,$subCategory-> slug])}}" name=""></a><img
                                          src="{{$subCategory->photo}}" alt="{{$subCategory->slug}}">
                                    <p>{{$subCategory->name}}</p>
                                </div>
                            </div>
                        @endforeach
                        <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                            <div class="ps-block--category">
                                <a class="ps-block__overlay" href="{{route('site.getProductCategory',[$Category->id,$Category-> slug])}}" name=""></a>
                                <img src="{{asset('assets/front/img/categories/all-categories.png')}}" alt="">
                                <p> الكل </p>
                            </div>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
@endsection