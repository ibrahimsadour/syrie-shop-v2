<div class="ps-panel--sidebar" id="my-account">
    <div class="ps-my-account">
        <div class="container">
            <form class="ps-form--account ps-tab-root" action="link.html" method="get">
                <div class="ps-tabs">
                    <div class="ps-tab active" id="sign-in">
                        <div class="ps-form__content">
                            <h5>تسجيل الدخول إلى حسابك</h5>
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="اسم المستخدم أو البريد الالكتروني">
                            </div>
                            <div class="form-group form-forgot">
                                <input class="form-control" type="text" placeholder="كلمة المرور">
                            </div>
                            <div class="form-group">
                                <div class="ps-checkbox">
                                    <input class="form-control" type="checkbox" id="remember-me" name="remember-me">
                                    <label for="remember-me">تذكرنى</label><a href="{{route('site.lost-password')}}" style="float: left;">نسيت كلمة السر؟</a>
                                </div>
                            </div>
                            <div class="form-group submtit">
                                <button class="ps-btn ps-btn--fullwidth">تسجيل الدخول  </button>
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
                        </div>

                    </div>
                    <div class="ps-tab" id="register">
                        <div class="ps-form__content">
                            <h5>تسجيل حساب جديد</h5>
                            <form>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="عنوان بريد الكتروني">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="كلمة المرور">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="الأسم">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" type="text" placeholder="رقم الهاتف ">
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
                                    <button class="ps-btn ps-btn--fullwidth">الأشتراك    </button>
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
            </form>
        </div>
    </div>
</div>