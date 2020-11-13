@extends('front.layouts.site')

@section('content')

    <div id="homepage-1">

        <!-- Begin Slider show -->
        @include('front.home-includes.slideshow-center')
        <!-- End Slider show -->

        <!-- Begin Main Categories  sections /االاقسام ا -->
        <div class="ps-top-categories" style="padding: 10px 0 20px;">
            <div class="ps-container">
                <h3> ماذا تريد أن تبيع؟</h3>
                <div class="row">
                    @isset($categories)
                        @foreach($categories as $category)
                            <div class="col-xl-2 col-lg-3 col-md-4 col-sm-4 col-4 ">
                                <div class="ps-block--category"><a class="ps-block__overlay" href="{{route('advertisement.showSubCategory',$category-> id)}}" name="{{$category-> id}}"></a><img
                                          src="{{$category -> photo}}" alt="{{$category -> name}}">
                                    <p>{{$category -> name}}</p>
                                </div>
                            </div>
                        @endforeach
                    @endisset
                </div>
            </div>
        </div>
 
    </div>
@endsection