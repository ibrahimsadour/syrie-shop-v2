@extends('front.layouts.site')

@section('content')
<div class="ps-page--my-account">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية </a></li>
                <li>تسجيل الدخول - الأشتراك</li>
            </ul>
        </div>
    </div>
    
    <div class="ps-my-account">
        <div class="container">
            
            <div class="ps-form--account ps-tab-root">
                <ul class="ps-tab-list login-tab">
                    <li class="active-login active" onclick="openCity('London')"><a href="#sign-in">تسجيل الدخول</a></li>
                    <li  onclick="openCity('Paris')"><a href="#register">الإشتراك</a></li>
                </ul>
                <div class="ps-tabs">
                    @include('admin.includes.alerts.success')
                    @include('admin.includes.alerts.errors')
                    <div id="London" class="city">
                        <div class="ps-tab active" id="sign-in">
                            <div class="ps-form__content">
                                <h5>تسجيل الدخول إلى حسابك</h5>

    	                        <form method="POST" action="{{route('login-attempt')}}">
                                    @csrf

                                    <div class="form-group">
                                        <input class="form-control" id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="identify" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="@lang('auth.E-Mail Address or username')">
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="form-group form-forgot">
                                        <input class="form-control" id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="@lang('auth.Password')">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="ps-checkbox">
                                            <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                            @if (Route::has('password.request'))
                                                <label for="remember-me">تذكرنى</label><a href="{{route('site.lost-password')}}" style="float: left;">@lang('auth.Forgot Your Password?')</a>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group submtit">
                                        <button class="ps-btn ps-btn--fullwidth" type="submit" >@lang('auth.Login') </button>
                                    </div>

                                    <div class="ps-form__footer">
                                        <p>تسجيل الدخول  بواسطة:</p>
                                        <ul class="ps-list--social">
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                    <div id="Paris" class="city" style="display:none">
                        <div class="ps-tab" id="register">
                            <div class="ps-form__content">
                                <h5>تسجيل حساب جديد</h5>
                                <!-- @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors') -->
                                <form  method="POST" action="{{ route('register') }}">
                                    @csrf
                                    <!-- Email -->
                                    <div class="form-group">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="@lang('auth.E-Mail Address')">
                                        @error('name')
                                            <span class="text-danger">{{$message}}</span>
                                        @enderror
                                    </div>
                                    <!-- Name -->
                                    <div class="form-group">
                                        <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus placeholder="@lang('auth.Name')">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Phone nuber -->
                                    <div class="form-group">
                                        <input id="mobile" type="text" class="form-control @error('mobile') is-invalid @enderror" name="mobile" value="{{ old('mobile') }}" required autocomplete="mobile" autofocus placeholder="@lang('auth.Phone number') ">
                                        @error('mobile')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- Password -->
                                    <div class="form-group">
                                        <input cid="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password" placeholder="@lang('auth.Password')">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- confirm Passord -->
                                    <div class="form-group">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password"  placeholder="@lang('auth.confirm Passord')">
                                    </div>

                                    <div class="as-Vendor" style="display:none;">
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="اسم متجرك ">
                                        </div>
                                        <div class="form-group">
                                            <input class="form-control" type="text" placeholder="العنوان ">
                                        </div>
                                    </div>

                                    <div class="form-group" style="display: inline-grid;">
                                        <label class="radio woocommerce-form__label-for-checkbox register-As-Coustomer">
                                            <input type="radio" name="role"
                                                class="woocommerce-form__input-checkbox"
                                                value="customer" checked="checked">
                                            <span style="bottom: 5px;position: relative;cursor: pointer;">تسجيل زبون </span>
                                        </label>

                                        <label class="radio woocommerce-form__label-for-checkbox register-As-Vendor" >
                                            <input type="radio" name="role"
                                                class="woocommerce-form__input-checkbox"
                                                value="seller">
                                            <span style="bottom: 5px;position: relative; cursor: pointer;">تسجيل تاجر </span>
                                        </label>
                                    </div>

                                    <div class="form-group">
                                        <p>سيتم استخدام بياناتك الشخصية لدعم تجربتك عبر موقع الويب
                                            هذا ، لإدارة الوصول إلى حسابك ، ولأغراض أخرى موصوفة في
                                            موقعنا <a href="https://market.hvips.com/privacy-policy/" target="_blank">سياسة الخصوصية</a>.</p>
                                    </div>
                                    <div class="form-group submtit">
                                        <button class="ps-btn ps-btn--fullwidth"  type="submit" >@lang('auth.Register')    </button>
                                    </div>
                                    <div class="ps-form__footer">
                                        <p>الإشتراك بواسطة: </p>
                                        <ul class="ps-list--social">
                                            <li><a class="facebook" href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a class="google" href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a class="instagram" href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    function openCity(cityName) {
    var i;
    var x = document.getElementsByClassName("city");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";  
    }
    document.getElementById(cityName).style.display = "block";  
    }
</script>
@endsection