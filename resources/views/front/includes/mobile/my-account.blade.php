<div class="ps-panel--sidebar" id="my-account">
    <div class="ps-my-account">
        <div class="container">
            <div class="ps-form--account ps-tab-root" action="link.html" method="get">
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                        
                        <div class="ps-form__content">
                            @guest
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
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
                            @else
                                <h5>{{ Auth::user()->name }} مرحبا</h5>
                                <a href="{{route('user.logout')}}">تسجيل الخروج </a>
                            @endguest
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>