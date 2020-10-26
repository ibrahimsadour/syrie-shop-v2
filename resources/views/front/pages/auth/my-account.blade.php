@extends('front.layouts.site')

@section('content')
<div class="page-header page-header-page">
    <div class="page-breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a class="home" href="https://market.hvips.com" itemprop="item"><span itemprop="name">الرئيسية
                        </span></a>
                </li><span class="sep">/</span>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="item"><span itemprop="name">حسابي</span></span>
                </li>
            </ul>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-12">
            <main id="main" class="site-main">



                <article id="post-3139" class="post-3139 page type-page status-publish hentry">

                    <div class="entry-content">

                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>

                            <div class="customer-login">

                                <div class="row">

                                    <div class="col-md-6 col-sm-6 col-md-offset-3 col-sm-offset-3 col-login">
                                        <div class="martfury-login-tabs">
                                            <ul class="tabs-nav">
                                                <li class="active"><a href="#" class="active">تسجيل الدخول</a>
                                                </li>
                                                <li><a class="" href="#">الإشتراك</a></li>
                                            </ul>
                                            <div class="tabs-content">

                                                <div class="tabs-panel active">

                                                    <h2>تسجيل الدخول إلى حسابك</h2>

                                                    <form class="woocommerce-form woocommerce-form-login login"
                                                        method="post">


                                                        <p
                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                            <input type="text"
                                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                                required=""
                                                                placeholder="اسم المستخدم أو البريد الالكتروني"
                                                                name="username" id="username" autocomplete="username"
                                                                value="">
                                                        </p>

                                                        <p
                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide form-row-password">
                                                            <span class="password-input"><input
                                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                                    required="" placeholder="كلمة المرور"
                                                                    type="password" autocomplete="current-password"
                                                                    name="password" id="password"><span
                                                                    class="show-password-input"></span></span>
                                                        </p>


                                                        <p class="form-row">
                                                            <span class="woocommerce-form-row__remember">
                                                                <label
                                                                    class="woocommerce-form__label woocommerce-form__label-for-checkbox woocommerce-form-login__rememberme">
                                                                    <input
                                                                        class="woocommerce-form__input woocommerce-form__input-checkbox"
                                                                        name="rememberme" type="checkbox"
                                                                        id="rememberme" value="forever">
                                                                    <span>تذكرنى</span>
                                                                </label>
                                                                <a class="lost-password"
                                                                    href="{{route('site.lost-password.index')}}">نسيت كلمة السر؟</a>
                                                            </span>

                                                            <input type="hidden" id="woocommerce-login-nonce"
                                                                name="woocommerce-login-nonce" value="95e2c1ba0d"><input
                                                                type="hidden" name="_wp_http_referer"
                                                                value="/my-account/"> <button type="submit"
                                                                class="woocommerce-Button button" name="login"
                                                                value="تسجيل الدخول">تسجيل الدخول</button>
                                                        </p>


                                                    </form>
                                                </div>


                                                <div class="tabs-panel ">

                                                    <h2>تسجيل حساب جديد</h2>

                                                    <form method="post"
                                                        class="register woocommerce-form woocommerce-form-register">



                                                        <p
                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                            <input type="email" required=""
                                                                class="woocommerce-Input woocommerce-Input--text input-text"
                                                                placeholder="عنوان بريد الكتروني" name="email"
                                                                id="reg_email" autocomplete="email" value="">
                                                        </p>


                                                        <p
                                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                                            <span class="password-input"><input type="password"
                                                                    required="" placeholder="كلمة المرور"
                                                                    class="woocommerce-Input woocommerce-Input--text input-text"
                                                                    autocomplete="new-password" name="password"
                                                                    id="reg_password"><span
                                                                    class="show-password-input"></span></span>
                                                        </p>



                                                        <div class="show_if_seller" style="display:none">

                                                            <div class="split-row form-row-wide">
                                                                <p class="form-row form-group">
                                                                    <label for="first-name">الاسم الاول <span
                                                                            class="required">*</span></label>
                                                                    <input type="text" class="input-text form-control"
                                                                        name="fname" id="first-name" value=""
                                                                        required="required" disabled="disabled">
                                                                </p>

                                                                <p class="form-row form-group">
                                                                    <label for="last-name">الأسم الأخير <span
                                                                            class="required">*</span></label>
                                                                    <input type="text" class="input-text form-control"
                                                                        name="lname" id="last-name" value=""
                                                                        required="required" disabled="disabled">
                                                                </p>
                                                            </div>

                                                            <p class="form-row form-group form-row-wide">
                                                                <label for="company-name">اسم متجرك <span
                                                                        class="required">*</span></label>
                                                                <input type="text" class="input-text form-control"
                                                                    name="shopname" id="company-name" value=""
                                                                    required="required" disabled="disabled">
                                                            </p>

                                                            <p class="form-row form-group form-row-wide">
                                                                <label for="seller-url" class="pull-left">رابط متجرك
                                                                    بموقعنا <span class="required">*</span></label>
                                                                <strong id="url-alart-mgs" class="pull-right"></strong>
                                                                <input type="text" class="input-text form-control"
                                                                    name="shopurl" id="seller-url" value=""
                                                                    required="required" disabled="disabled">
                                                                <small>https://market.hvips.com/store/<strong
                                                                        id="url-alart"></strong>
                                                                </small>
                                                            </p>

                                                            <p class="form-row form-group form-row-wide">
                                                                <label for="shop-phone">رقم الهاتف <span
                                                                        class="required">*</span></label>
                                                                <input type="text" class="input-text form-control"
                                                                    name="phone" id="shop-phone" value=""
                                                                    required="required" disabled="disabled">
                                                            </p>

                                                        </div>


                                                        <p class="form-row form-group user-role">
                                                            <label class="radio woocommerce-form__label-for-checkbox">
                                                                <input type="radio" name="role"
                                                                    class="woocommerce-form__input-checkbox"
                                                                    value="customer" checked="checked">
                                                                <span>
                                                                    تسجيل زبون </span>
                                                            </label>

                                                            <label class="radio woocommerce-form__label-for-checkbox">
                                                                <input type="radio" name="role"
                                                                    class="woocommerce-form__input-checkbox"
                                                                    value="seller">
                                                                <span>
                                                                    تسجيل تاجر </span>
                                                            </label>
                                                        </p>
                                                        <div class="woocommerce-privacy-policy-text">
                                                            <p>سيتم استخدام بياناتك الشخصية لدعم تجربتك عبر موقع الويب
                                                                هذا ، لإدارة الوصول إلى حسابك ، ولأغراض أخرى موصوفة في
                                                                موقعنا <a
                                                                    href="https://market.hvips.com/privacy-policy/"
                                                                    class="woocommerce-privacy-policy-link"
                                                                    target="_blank">سياسة الخصوصية</a>.</p>
                                                        </div>
                                                        <p class="woocommerce-form-row form-row">
                                                            <input type="hidden" id="woocommerce-register-nonce"
                                                                name="woocommerce-register-nonce"
                                                                value="efc519d9f2"><input type="hidden"
                                                                name="_wp_http_referer" value="/my-account/"> <button
                                                                type="submit" class="woocommerce-Button button"
                                                                name="register" value="الإشتراك">الإشتراك</button>
                                                        </p>


                                                    </form>

                                                </div>


                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- .entry-content -->

                </article><!-- #post-## -->



            </main><!-- #main -->
        </div><!-- #primary -->

    </div>
</div>

@endsection