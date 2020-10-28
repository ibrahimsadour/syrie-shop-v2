@extends('front.layouts.site')

@section('content')
<div class="ps-page--single" id="contact-us">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.html">الرئيسية</a></li>
                <li>أتصل بنا</li>
            </ul>
        </div>
    </div>
    <div id="contact-map" data-address="17 Queen St, Southbank, Melbourne 10560, Australia" data-title="Funiture!" data-zoom="17"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2608.1320797509006!2d36.77352487093604!3d36.214807607652105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15257b286ab49a67%3A0xa8d31b56bf70d419!2z2YXYr9ix2LPYqSDYp9it2YXYryDYudix2KjZitmH!5e1!3m2!1sen!2snl!4v1603399895506!5m2!1sen!2snl" width="600" height="450" frameborder="0" style="border: 0px; pointer-events: none;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> </div>
    <div class="ps-contact-info">
        <div class="container">
            <div class="ps-section__header">
                <h3>اتصل بنا لأية أسئلة</h3>
            </div>
            <div class="ps-section__content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--contact-info">
                            <h4>اتصل مباشرة</h4>
                            <p><a href="#"><span class="__cf_email__" data-cfemail="fc9f9392889d9f88bc919d8e889a898e85d29f9391">[email&#160;protected]</span></a><span>(+004) 912-3548-07</span></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--contact-info">
                            <h4>المركز الرئيسى</h4>
                            <p><span>5 شارع الشريف منشية البكري متفرع من جسر السويس
منشية البكري، مصر الجديدة، محافظة القاهرة‬</span></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--contact-info">
                            <h4>اعمل معنا</h4>
                            <p><span>أرسل سيرتك الذاتية إلى بريدنا الإلكتروني:cv@hvips.com</span><a href="#"><span class="__cf_email__" data-cfemail="77141605121205371a1605031102050e5914181a">[email&#160;protected]</span></a></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--contact-info">
                            <h4>خدمة العملاء</h4>
                            <p><a href="#"><span class="__cf_email__" data-cfemail="c9aabcbabda6a4acbbaaa8bbac89a4a8bbbdafbcbbb0e7aaa6a4">[email&#160;protected]</span></a><span>(800) 843-2446</span></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--contact-info">
                            <h4>العلاقات الاعلامية</h4>
                            <p><a href="#"><span class="__cf_email__" data-cfemail="a8c5cdccc1c9e8c5c9dadccedddad186cbc7c5">[email&#160;protected]</span></a><span>(801) 947-3564</span></p>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 col-12 ">
                        <div class="ps-block--contact-info">
                            <h4>دعم التجار</h4>
                            <p><a href="#"><span class="__cf_email__" data-cfemail="2056454e444f52535550504f5254604d415254465552590e434f4d">[email&#160;protected]</span></a><span>(801) 947-3100</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ps-contact-form">
        <div class="container">
            <form class="ps-form--contact-us" action="index.html" method="get">
                <h3>ابقى على تواصل</h3>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="الاسم *">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12 ">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="البريد الالكتروني *">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="form-group">
                            <input class="form-control" type="text" placeholder="الموضوع (اختياري) *">
                        </div>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                        <div class="form-group">
                            <textarea class="form-control" rows="5" placeholder="اكتب رسالتك ..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="form-group submit">
                    <button class="ps-btn">ارسال رسالتك</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection