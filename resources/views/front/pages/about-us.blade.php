@extends('front.layouts.site')
@section('title','معلومات عنا ')
@section('content')
<div class="ps-breadcrumb">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="{{route('site.index')}}">الرئيسية </a></li>
            <li>معلومات عنا</li>
        </ul>
    </div>
</div>
<div class="ps-page--single" id="about-us"><img src="{{asset('assets/front/img/bg/about-us.jpg')}}" alt="">
    <div class="ps-about-intro">
        <div class="container">
            <div class="ps-section__header">
                <h4>مرحبًا بكم في اتش فى اى بى اس</h4>
                <h3>نحن نربط الملايين من المشترين والبائعين في جميع أنحاء العالم ، ونمكن الناس وخلق الفرص الاقتصادية للجميع.</h3>
                <p>في أسواقنا ، يتصل ملايين الأشخاص حول العالم ، سواء عبر الإنترنت أو في وضع عدم الاتصال ، لصنع وبيع وشراء سلع فريدة. كما نقدم مجموعة واسعة من خدمات وأدوات البائع التي تساعد رواد الأعمال المبدعين على بدء أعمالهم وإدارتها وتوسيع نطاقها. مهمتنا هي إعادة تخيل التجارة بطرق تبني عالماً أكثر إشباعًا ودائمًا ، ونحن ملتزمون باستخدام قوة الأعمال لتعزيز المجتمعات وتمكين الناس.</p>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                        <div class="ps-block--icon-box"><i class="icon-cube"></i>
                            <h4>45M</h4>
                            <p>منتجات للبيع</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                        <div class="ps-block--icon-box"><i class="icon-store"></i>
                            <h4>1.8M</h4>
                            <p>الباعة النشطين في موقعنا</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                        <div class="ps-block--icon-box"><i class="icon-bag2"></i>
                            <h4>30.6M</h4>
                            <p>المشترون النشطون على موقعنا</p>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-3 col-md-3 col-sm-4 col-6 ">
                        <div class="ps-block--icon-box"><i class="icon-cash-dollar"></i>
                            <h4>$2.46M</h4>
                            <p>إجمالي مبيعات البضائع السنوية</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--include ../../partials/pages/about-us/milestone-->
    <div class="ps-our-team">
        <div class="container">
            <div class="ps-section__header">
                <h3>اكتشف رحلة موقعنا</h3>
            </div>
            <div class="ps-section__content">
                <figure>
                    <div class="ps-block--ourteam"><img src="{{asset('assets/front/img/users/our-team/1.jpg')}}" alt="">
                        <div class="ps-block__content">
                            <h4>Robert Downey Jr</h4>
                            <p>CEO Fouder</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <figure>
                    <div class="ps-block--ourteam"><img src="{{asset('assets/front/img/users/our-team/2.jpg')}}" alt="">
                        <div class="ps-block__content">
                            <h4>Robert Downey Jr</h4>
                            <p>CEO Fouder</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <figure>
                    <div class="ps-block--ourteam"><img src="{{asset('assets/front/img/users/our-team/3.jpg')}}" alt="">
                        <div class="ps-block__content">
                            <h4>Robert Downey Jr</h4>
                            <p>CEO Fouder</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <figure>
                    <div class="ps-block--ourteam"><img src="{{asset('assets/front/img/users/our-team/4.jpg')}}" alt="">
                        <div class="ps-block__content">
                            <h4>Robert Downey Jr</h4>
                            <p>CEO Fouder</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <figure>
                    <div class="ps-block--ourteam"><img src="{{asset('assets/front/img/users/our-team/5.jpg')}}" alt="">
                        <div class="ps-block__content">
                            <h4>Robert Downey Jr</h4>
                            <p>CEO Fouder</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <figure>
                    <div class="ps-block--ourteam"><img src="{{asset('assets/front/img/users/our-team/6.jpg')}}" alt="">
                        <div class="ps-block__content">
                            <h4>Robert Downey Jr</h4>
                            <p>CEO Fouder</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <figure>
                    <div class="ps-block--ourteam"><img src="{{asset('assets/front/img/users/our-team/7.jpg')}}" alt="">
                        <div class="ps-block__content">
                            <h4>Robert Downey Jr</h4>
                            <p>CEO Fouder</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </figure>
                <figure data-mh="our-team">
                    <div class="ps-block--ourteam blank"><a href="#">Become <br> member in <br> team</a></div>
                </figure>
            </div>
        </div>
    </div>
    <div class="ps-about-awards">
        <div class="container">
            <div class="ps-section__header">
                <h4>الجوائز والتقدير</h4>
                <p>يعترف قادة الصناعة والمؤثرون في شركة Overstock بأنها واحدة من أكثر شركات التجزئة جديرة بالثقة في الولايات المتحدة ، حيث تحتل مرتبة عالية لكل من رضا العملاء والموظفين.</p>
            </div>
            <div class="ps-section__content">
                <div class="owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="15000" data-owl-gap="0" data-owl-nav="false" data-owl-dots="false" data-owl-item="5" data-owl-item-xs="3" data-owl-item-sm="3" data-owl-item-md="3" data-owl-item-lg="4" data-owl-duration="1500" data-owl-mousedrag="off"><a href="#"><img src="{{asset('assets/front/img/awards/1.png')}}" alt=""></a><a href="#"><img src="{{asset('assets/front/img/awards/2.png')}}" alt=""></a><a href="#"><img src="{{asset('assets/front/img/awards/3.png')}}" alt=""></a><a href="#"><img src="{{asset('assets/front/img/awards/4.png')}}" alt=""></a><a href="#"><img src="{{asset('assets/front/img/awards/5.png')}}" alt=""></a></div>
            </div>
        </div>
    </div>
</div>
@endsection