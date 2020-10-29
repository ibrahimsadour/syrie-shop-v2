@extends('front.layouts.site')

@section('content')

<div class="ps-page--single">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية</a></li>
                <li>افتح متجرك في سوق</li>
            </ul>
        </div>
    </div>
    <div class="ps-vendor-banner bg--cover" data-background="{{asset('assets/front/img/bg/vendor.jpg')}}">
        <div class="container">
            <h2>الملايين من المتسوقين لا يستطيعون الانتظار لرؤية ما لديك في المتجر</h2><a class="ps-btn ps-btn--lg" href="#">ابدأ بالبيع</a>
        </div>
    </div>
    <div class="ps-section--vendor ps-vendor-about">
        <div class="container">
            <div class="ps-section__header">
                <p>لماذا تبيع على موقعنا</p>
                <h4><br> انضم إلى سوق يتواجد فيه ما يقرب من 50 مليون مشتريالمتجر العالمي للسلع الفريدة</h4>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--icon-box-2">
                            <div class="ps-block__thumbnail"><img src="{{asset('assets/front/img/icons/vendor-1.png')}}" alt=""></div>
                            <div class="ps-block__content">
                                <h4>رسوم منخفضة</h4>
                                <div class="ps-block__desc" data-mh="about-desc">
                                    <p>لا يستغرق إدراج عناصرك كثيرًاوبمجرد إجراء البيع بموقعنارسوم المعاملة هي 2.5٪ فقط.</p>
                                </div><a href="#">أعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--icon-box-2">
                            <div class="ps-block__thumbnail"><img src="{{asset('assets/front/img/icons/vendor-2.png')}}" alt=""></div>
                            <div class="ps-block__content">
                                <h4>أدوات قوية</h4>
                                <div class="ps-block__desc" data-mh="about-desc">
                                    <p>أدواتنا وخدماتنا تجعل من السهل لإدارة وتعزيز وتنمية الخاص بك اعمال.</p>
                                </div><a href="#">أعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 ">
                        <div class="ps-block--icon-box-2">
                            <div class="ps-block__thumbnail"><img src="{{asset('assets/front/img/icons/vendor-3.png')}}" alt=""></div>
                            <div class="ps-block__content">
                                <h4>دعم 24/7 اسبوعياً</h4>
                                <div class="ps-block__desc" data-mh="about-desc">
                                    <p>أدواتنا وخدماتنا تجعل من السهل لإدارة وتعزيز وتنمية الخاص بك اعمال.</p>
                                </div><a href="#">أعرف المزيد</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--vendor ps-vendor-milestone">
        <div class="container">
            <div class="ps-section__header">
                <p>كيف تعمل</p>
                <h4>من السهل بدء البيع عبر الإنترنت على موقعنا فقط 4 خطوات بسيطة</h4>
            </div>
            <div class="ps-section__content">
                <div class="ps-block--vendor-milestone">
                    <div class="ps-block__left">
                        <h4>سجل وأدرج منتجاتك</h4>
                        <ul>
                            <li>سجل عملك مجانا وقم بإنشاء كتالوج المنتجات. احصل على تدريب مجاني حول كيفية إدارة عملك عبر الإنترنت</li>
                            <li>سيساعدك مستشارو موقعنا لدينا في كل خطوة ويساعدونك بشكل كامل في نقل أعمالك عبر الإنترنت</li>
                        </ul>
                    </div>
                    <div class="ps-block__right"><img src="{{asset('assets/front/img/vendor/milestone-1.png')}}" alt=""></div>
                    <div class="ps-block__number"><span>1</span></div>
                </div>
                <div class="ps-block--vendor-milestone reverse">
                    <div class="ps-block__left">
                        <h4>تلقي الطلبات وبيع منتجك</h4>
                        <ul>
                            <li>سجل عملك مجانًا وقم بإنشاء كتالوج المنتجات. احصل على تدريب مجاني حول كيفية إدارة عملك عبر الإنترنت</li>
                            <li>سيساعدك مستشارو موقعنا لدينا في كل خطوة ويساعدونك بشكل كامل في نقل نشاطك التجاري عبر الإنترنت</li>
                        </ul>
                    </div>
                    <div class="ps-block__right"><img src="{{asset('assets/front/img/vendor/milestone-2.png')}}" alt=""></div>
                    <div class="ps-block__number"><span>2</span></div>
                </div>
                <div class="ps-block--vendor-milestone">
                    <div class="ps-block__left">
                        <h4>العبوة والشحن بكل سهولة</h4>
                        <ul>
                            <li>سجل عملك مجانًا وقم بإنشاء كتالوج المنتجات. احصل على تدريب مجاني حول كيفية إدارة عملك عبر الإنترنت</li>
                            <li>سيساعدك مستشارو موقعنا لدينا في كل خطوة ويساعدونك بشكل كامل في نقل نشاطك التجاري عبر الإنترنت</li>
                        </ul>
                    </div>
                    <div class="ps-block__right"><img src="{{asset('assets/front/img/vendor/milestone-3.png')}}" alt=""></div>
                    <div class="ps-block__number"><span>3</span></div>
                </div>
                <div class="ps-block--vendor-milestone reverse">
                    <div class="ps-block__left">
                        <h4>احصل على المدفوعات ونمو عملك</h4>
                        <ul>
                            <li>سجل عملك مجانًا وقم بإنشاء كتالوج المنتجات. احصل على تدريب مجاني حول كيفية إدارة عملك عبر الإنترنت</li>
                            <li>سيساعدك مستشارو موقعنا لدينا في كل خطوة ويساعدونك بشكل كامل في نقل نشاطك التجاري عبر الإنترنت</li>
                        </ul>
                    </div>
                    <div class="ps-block__right"><img src="{{asset('assets/front/img/vendor/milestone-4.png')}}" alt=""></div>
                    <div class="ps-block__number"><span>4</span></div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--vendor ps-vendor-best-fees">
        <div class="container">
            <div class="ps-section__header">
                <p>أفضل الأسعار للبدء</p>
                <h4>بأسعار معقولة وشفافة وآمنة</h4>
            </div>
            <div class="ps-section__content">
                <h5> إنها مجرد نسبة صغيرة من المال الذي تجنيه لا يكلفك إدراج ما يصل إلى 50 عنصرًا في الشهر شيئًا ، ولا تدفع إلا بعد بيع أغراضك.</h5>
                <div class="ps-section__numbers">
                    <figure>
                        <h3>$0</h3><span>رسوم الإدراج</span>
                    </figure>
                    <figure>
                        <h3>5%</h3><span>قيمة الرسوم النهائية</span>
                    </figure>
                </div>
                <div class="ps-section__desc">
                    <figure>
                        <figcaption>إليك ما تحصل عليه مقابل رسومك:</figcaption>
                        <ul>
                            <li>مجتمع عالمي يضم أكثر من 160 مليون متسوق.</li>
                            <li>ملصقات شحن يمكنك طباعتها في المنزل ، مع خصومات كبيرة على البريد.</li>
                            <li>حماية البائع ودعم العملاء لمساعدتك في بيع أغراضك.</li>
                        </ul>
                    </figure>
                </div>
                <div class="ps-section__highlight"><img src="{{asset('assets/front/img/icons/vendor-4.png')}}" alt="">
                    <figure>
                        <p>نعالج المدفوعات باستخدام PayPal ، منصة دفع خارجية تسمح لك بمعالجة المعاملات باستخدام مجموعة متنوعة من طرق الدفع. سيتم إيداع الأموال من مبيعات PayPal على موقعنا في حساب PayPal الخاص بك.</p>
                    </figure>
                </div>
                <div class="ps-section__footer">
                    <p>تتم فوترة رسوم الإدراج مقابل 0.20 دولارًا أمريكيًا ، لذلك إذا كانت عملة البنك الذي تتعامل معه ليست بالدولار الأمريكي ، فسيتم احتساب المبلغقد تختلف عملتك بناءً على التغيرات في سعر الصرف.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--vendor ps-vendor-testimonials">
        <div class="container">
            <div class="ps-section__header">
                <p>قصص البائع</p>
                <h4>انظر حصة البائع حول نجاحهم على موقعنا</h4>
            </div>
            <div class="ps-section__content">
                <div class="ps-carousel--nav owl-slider" data-owl-auto="true" data-owl-loop="true" data-owl-speed="10000" data-owl-gap="30" data-owl-nav="true" data-owl-dots="true" data-owl-item="2" data-owl-item-xs="1" data-owl-item-sm="1" data-owl-item-md="1" data-owl-item-lg="2" data-owl-duration="1000" data-owl-mousedrag="on">
                    <div class="ps-block--testimonial">
                        <div class="ps-block__header"><img src="{{asset('assets/front/img/users/1.jpg')}}" alt=""></div>
                        <div class="ps-block__content"><i class="icon-quote-close"></i>
                            <h4>Kanye West<span>Head Chef at BBQ Restaurant</span></h4>
                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                        </div>
                    </div>
                    <div class="ps-block--testimonial">
                        <div class="ps-block__header"><img src="{{asset('assets/front/img/users/2.png')}}" alt=""></div>
                        <div class="ps-block__content"><i class="icon-quote-close"></i>
                            <h4>Anabella Kleva<span>Boss at TocoToco</span></h4>
                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                        </div>
                    </div>
                    <div class="ps-block--testimonial">
                        <div class="ps-block__header"><img src="{{asset('assets/front/img/users/3.jpg')}}" alt=""></div>
                        <div class="ps-block__content"><i class="icon-quote-close"></i>
                            <h4>William Roles<span>Head Chef at BBQ Restaurant</span></h4>
                            <p>Sed elit quam, iaculis sed semper sit amet udin vitae nibh. at magna akal semperFusce commodo molestie luctus.Lorem ipsum Dolor tusima olatiup.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-section--vendor ps-vendor-faqs">
        <div class="container">
            <div class="ps-section__header">
                <p>الاسئلة الشائعة</p>
                <h4>فيما يلي بعض الأسئلة الشائعة حول البيع على موقعنا</h4>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>كيف تعمل الرسوم على موقعنا؟</figcaption>
                            <p>الانضمام وبدء متجر على سوق مجاني. هناك ثلاثة رسوم بيع أساسية: رسوم الإدراج ، ورسوم المعاملات ، ورسوم معالجة الدفع.</p>
                            <p>كلف نشر قائمة في السوق 0.20 دولار أمريكي. تستمر القائمة لمدة أربعة أشهر أو حتى يتم بيع السلعة. بمجرد بيع السلعة ، هناك رسوم معاملة بنسبة 3.5٪ على سعر البيع (لا تشمل تكاليف الشحن). إذا كنت تقبل المدفوعات باستخدام PayPal ، فهناك أيضًا رسوم معالجة الدفع بناءً على هيكل الرسوم الخاص بها.</p>
                            <p>تتم فوترة رسوم الإدراج مقابل 0.20 دولار أمريكي ، لذلك إذا لم تكن عملة البنك الذي تتعامل معه دولارًا أمريكيًا ، فقد يختلف المبلغ بناءً على التغييرات في سعر الصرف.</p>
                        </figure>
                        <figure>
                            <figcaption>ماذا علي أن أفعل لإنشاء متجر؟</figcaption>
                            <p>من السهل إنشاء متجر على موقعنا. قم بإنشاء حساب سوق (إذا لم يكن لديك حساب بالفعل) ، قم بتعيين موقع متجرك وعملتك ، واختر اسم متجر ، وقم بإنشاء قائمة ، واضبط طريقة دفع (كيف تريد أن تدفع لك) ، وأخيرًا حدد طريقة فوترة (كيف تريد أن تدفع رسوم موقعنا الخاصة بك).</p>
                        </figure>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <figure>
                            <figcaption>كيف احصل على المال؟</figcaption>
                            <p>إذا قبلت الدفع باستخدام PayPal ، فسيتم إيداع الأموال من مبيعات PayPal على موقعنا في حساب PayPal الخاص بك. نحن نشجع البائعين على استخدام حساب PayPal Business وليس حساب شخصي ، لأن الحسابات الشخصية تخضع لقيود الاستلام الشهرية ولا يمكنها قبول المدفوعات من المشترين الممولين ببطاقة ائتمان.</p>
                        </figure>
                        <figure>
                            <figcaption>هل أحتاج إلى بطاقة ائتمان أو خصم لإنشاء متجر؟</figcaption>
                            <p>لا ، بطاقة الائتمان أو الخصم غير مطلوبة لإنشاء متجر. ليتم التحقق من أنك بائع ، لديك خيار استخدام إما بطاقة ائتمان أو التسجيل عبر PayPal. لن تتحمل أي رسوم حتى تفتح متجرك وتنشر قوائمك.</p>
                        </figure>
                        <figure>
                            <figcaption>ما الذي يمكنني بيعه في موقعكم؟</figcaption>
                        </figure>
                        <p>توفر الشركة سوقًا للحرفيين والفنانين وهواة الجمع لبيع إبداعاتهم اليدوية والسلع القديمة (على الأقل 20 عامًا) ومستلزمات الحرف اليدوية وغير اليدوية..</p>
                    </div>
                </div>
            </div>
            <div class="ps-section__footer">
                <p>هل لا تزال لديك أسئلة أخرى؟ لا تتردد في الاتصال بنا.</p><a class="ps-btn" href="#">اتصل بنا</a>
            </div>
        </div>
    </div>
    <div class="ps-vendor-banner bg--cover" data-background="{{asset('assets/front/img/bg/vendor.jpg')}}">
        <div class="container">
            <h2>حان الوقت للبدء في كسب المال.</h2><a class="ps-btn ps-btn--lg" href="#">ابدأ بالبيع الان</a>
        </div>
    </div>
</div>
@endsection