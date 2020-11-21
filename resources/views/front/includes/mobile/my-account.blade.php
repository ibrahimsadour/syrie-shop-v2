
<div class="ps-panel--sidebar" id="my-account">
    <div class="ps-my-account">
        <div class="container">
            <div class="ps-form--account ps-tab-root" style="padding-top: 15px;">
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                            @guest
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
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
                                                <li><a class="facebook" href="{{url('user/login-attempt/facebook')}}"><i class="fa fa-facebook"></i></a></li>
                                                <li><a class="google" href="{{url('user/login-attempt/google')}}"><i class="fa fa-google-plus"></i></a></li>
                                                <li><a class="google" href="{{url('user/login-attempt/google')}}"><i class="fa fa-youtube"></i></a></li>
                                                <li><a class="twitter" href="#"><i class="fa fa-twitter"></i></a></li>
                                            </ul>
                                        </div>
                                    </form>
                                </div>
                            @else 
                                <div class="ps-form_my_acount">
                                    <div class="header-account content-shadow">
                                        <img src="https://imgcomfort.com/Userfiles/Upload/images/illustration-geiranger.jpg" alt="" class="user_avatar">
                                        <div class="title-name">
                                            <h5 class="">مرحبا {{ Auth::user()->name }} </h5>
                                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> الدانا </p>

                                        </div>
                                    </div>
                                </div>
                                <div class="ps-form_my_acount" style="margin-top: 10px;">
                                    <div class="header-account content-shadow">
                                        <div class="list media-list">

                                            <ul class="list">
                                                <li>
                                                    <a href="/wishlist/" class="item-link item-content">
                                                        <div class="item-media">
                                                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><span>أعلاناتي</span></div>
                                                            </div>
                                                            <div class="item-subtitle"><span>هنا تجد جميع الأعلانات الخاصة بك</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('user.editProfile')}}" class="item-link item-content">
                                                        <div class="item-media">
                                                        <i class="fa fa-pencil-square-o" aria-hidden="true"></i> 
                                                        </div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><span>تعديل ملفي الشخصي</span></div>
                                                            </div>
                                                            <div class="item-subtitle"><span>تعديل الاسم - الايميل - رقم الهاتف</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('user.editPassword')}}" class="item-link item-content">
                                                        <div class="item-media">
                                                        <i class="fa fa-key" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><span>تعديل كلمة المرور </span></div>
                                                            </div>
                                                            <div class="item-subtitle"> <span>تعديل كلمة المرور الحالية</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/notification/" class="item-link item-content">
                                                        <div class="item-media">
                                                        <i class="fa fa-question-circle" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><span>المساعدة</span></div>
                                                            </div>
                                                            <div class="item-subtitle"><span>للمساعد يمكنك ايجاد كافة المعلومات هنا</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="/notification/" class="item-link item-content">
                                                        <div class="item-media">
                                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><span>أتصل بنا</span></div>
                                                            </div>
                                                            <div class="item-subtitle"><span>للاستفساار التواصل من هنا</span></div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="{{route('user.logout')}}" class="item-link item-content">
                                                        <div class="item-media">
                                                        <i class="fa fa-power-off" aria-hidden="true"></i>
                                                        </div>
                                                        <div class="item-inner">
                                                            <div class="item-title-row">
                                                                <div class="item-title"><span> تسجيل الخروج</span></div>
                                                            </div>
                                                            <div class="item-subtitle"></div>
                                                        </div>
                                                    </a>
                                                </li>

                                            </ul>

                                        </div>
                                    </div>
							    </div>
                            @endguest
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>