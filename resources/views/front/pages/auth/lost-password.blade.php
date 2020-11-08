@extends('front.layouts.site')

@section('content')
<div class="ps-page--my-account">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية </a></li>
                <li><a href="{{route('site.my-account')}}">حسابي</a></li>
                <li>نسيت كلمة السر</li>
            </ul>
        </div>
    </div>
    <div class="ps-my-account" style="    min-height: 60vh;">
        <div class="container">
            <form class="ps-form--account ps-tab-root" action="" method="get">
                <ul class="ps-tab-list">
                    <li class="active"><a href="#sign-in"><li>نسيت كلمة السر</li></a></li>
                </ul>
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                        <div class="ps-form__content">
                            <h5>ضع بريدك الالكتروني هنا :</h5>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="البريد الالكتروني">
                            </div>
                            <div class="form-group">

                            </div>
                            <div class="form-group submtit">
                                <button class="ps-btn ps-btn--fullwidth" style="margin-bottom: 30px;">إعادة تعيين كلمة المرور  </button>
                            </div>

                        </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection