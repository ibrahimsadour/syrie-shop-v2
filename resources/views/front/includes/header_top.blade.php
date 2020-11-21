<div class="header__top">
    <div class="ps-container">
        <div class="header__left">
            <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span> التسوق حسب الأقسام</span></div>
                <div class="menu__content">
                    <ul class="menu--dropdown">
                        <li class="current-menu-item "><a href="#"><i class="icon-star"></i>  العروض</a>
                        </li>
                        <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-laundry"></i> مستلزمات الكترونية</a>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>الكترونيات<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="#">MP3 الصوتيات</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">التلفاز</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">الكامرا, الصور &amp; الفيديو</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">البرادات</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">السماعات</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">العاب الفيديو</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">سماعات البلوتث</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#"> الكترونيات</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mega-menu__column">
                                    <h4>الاكسسوارت &amp; Parts<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="#">كبال الديجاتل</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">كبال الفيديو والصوت</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">البطاريات</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-shirt"></i>الملابس والالبسة</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-lampshade"></i> المنزل, الحديقة &amp; المطبخ</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-heart-pulse"></i> الصحة &amp; الجمال</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-diamond2"></i> المجوهرات &amp; الساعات</a>
                        </li>
                        <li class="current-menu-item menu-item-has-children has-mega-menu"><a href="#"><i class="icon-desktop"></i>كومبيوتر &amp; التكنولجيا</a>
                            <div class="mega-menu">
                                <div class="mega-menu__column">
                                    <h4>أجهزة الكمبيوتر<span class="sub-toggle"></span></h4>
                                    <ul class="mega-menu__list">
                                        <li class="current-menu-item "><a href="#">أجهزة الكمبيوتر&#038; أجهزة لوحية</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">لابتوب</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">جهاز الأسقاط</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">الشبكات</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">الهارد ديسك&#038; التخزين</a>
                                        </li>
                                        </li>
                                        <li class="current-menu-item "><a href="#">مكافحة الفيروسات</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">ألعاب الكومبيوتر</a>
                                        </li>
                                        <li class="current-menu-item "><a href="#">الاكسسوارت</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-baby-bottle"></i> مستلزمات الأطفال</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-baseball"></i> المستلزمات الرياضية</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-smartphone"></i> الموبايلات&#038; الاكسسورات</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-book2"></i> الكتب &#038; القرطاسية</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-car-siren"></i> السيارات &#038;الميتورات</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-wrench"></i> مولدات الكهرباء</a>
                        </li>
                        <li class="current-menu-item "><a href="#"><i class="icon-tag"></i> اقسام اخرى</a>
                        </li>
                    </ul>
                </div>
            </div><a class="ps-logo" href="{{route('site.index')}}"><img src="{{asset('assets/front/img/logo_light.png')}}" alt=""></a>
        </div>
        <div class="header__center">
            <form class="ps-form--quick-search" action="{{route('site.index')}}" method="get">
                <div class="form-group--icon"><i class="icon-chevron-down"></i>
                    <select class="form-control" style="margin-left: 10px">
                        <option value="0" selected="selected">كل الأقسام</option>
                        <option class="level-0" value="babies-moms">الأطفال والأمهات</option>
                        <option class="level-0" value="books-office">الكتب والمكتب</option>
                        <option class="level-0" value="cars-motocycles">سيارات ودراجات نارية</option>
                        <option class="level-0" value="clothing-apparel">الملابس </option>
                        <option class="level-1" value="الاكسسوارت-clothing-apparel">اكسسوارات</option>
                        <option class="level-1" value="bags">حقائب</option>
                        <option class="level-1" value="kids-fashion">  أزياء الاطفال</option>
                        <option class="level-1" value="mens">للرجال</option>
                        <option class="level-1" value="shoes">أحذية</option>
                        <option class="level-1" value="sunglasses">نظارة شمسيه</option>
                        <option class="level-1" value="womens">للنساء</option>
                        <option class="level-0" value="computers-technologies">أجهزة الكمبيوتر والتقنيات</option>
                        <option class="level-1" value="desktop-pc">   كمبيوتر مكتبي</option>
                        <option class="level-1" value="لابتوب">حاسوب محمول</option>
                        <option class="level-1" value="smartphones">الهواتف الذكية</option>
                        <option class="level-0" value="consumer-electrics">مستهلكى الكترونيات</option>
                        <option class="level-1" value="air-conditioners">   مكيفات الهواء</option>
                        <option class="level-1" value="audios-theaters">   صوتيات ومسارح</option>
                        <option class="level-2" value="headphone">سماعة </option>
                        <option class="level-2" value="home-theater-system">      Home Theater System</option>
                        <option class="level-2" value="speakers">      Speakers</option>
                        <option class="level-1" value="car-الكترونياتs">   Car الكترونياتs</option>
                        <option class="level-2" value="audio-video">      Audio & Video</option>
                        <option class="level-2" value="car-security">      Car Security</option>
                        <option class="level-2" value="radar-detector">      Radar Detector</option>
                        <option class="level-2" value="vehicle-gps">      Vehicle GPS</option>
                        <option class="level-1" value="office-الكترونياتs">   Office الكترونياتs</option>
                        <option class="level-2" value="printers">      Printers</option>
                        <option class="level-2" value="projectors">      Projectors</option>
                        <option class="level-2" value="scanners">      Scanners</option>
                        <option class="level-2" value="store-business">      Store & Business</option>
                        <option class="level-1" value="refrigerators">   Refrigerators</option>
                        <option class="level-1" value="tv-televisions">   TV Televisions</option>
                        <option class="level-2" value="4k-ultra-hd-tvs">      4K Ultra HD TVs</option>
                        <option class="level-2" value="led-tvs">      LED TVs</option>
                        <option class="level-2" value="oled-tvs">      OLED TVs</option>
                        <option class="level-1" value="washing-machines">   Washing Machines</option>
                        <option class="level-2" value="type-drying-clothes">      Type Drying Clothes</option>
                        <option class="level-2" value="type-horizontal">      Type Horizontal</option>
                        <option class="level-2" value="type-vertical">      Type Vertical</option>
                        <option class="level-0" value="garden-kitchen">Garden & Kitchen</option>
                        <option class="level-1" value="cookware">   Cookware</option>
                        <option class="level-1" value="decoration">   Decoration</option>
                        <option class="level-1" value="furniture">   Furniture</option>
                        <option class="level-1" value="garden-tools">   Garden Tools</option>
                        <option class="level-1" value="home-improvement">   Home Improvement</option>
                        <option class="level-1" value="powers-and-hand-tools">   Powers And Hand Tools</option>
                        <option class="level-1" value="utensil-gadget">   Utensil & Gadget</option>
                        <option class="level-0" value="health-beauty">الصحة &amp; الجمال</option>
                        <option class="level-1" value="equipments">   Equipments</option>
                        <option class="level-1" value="hair-care">   Hair Care</option>
                        <option class="level-1" value="perfumer">   Perfumer</option>
                        <option class="level-1" value="skin-care">   Skin Care</option>
                        <option class="level-0" value="jewelry-watches">Jewelry & Watches</option>
                        <option class="level-1" value="gemstone-jewelry">   Gemstone Jewelry</option>
                        <option class="level-1" value="mens-watches">   Men’s Watches</option>
                        <option class="level-1" value="womens-watches">   Women’s Watches</option>
                        <option class="level-0" value="phones-الاكسسوارت">Phones & الاكسسوارت</option>
                        <option class="level-1" value="iphone-8">   Iphone 8</option>
                        <option class="level-1" value="iphone-x">   Iphone X</option>
                        <option class="level-1" value="sam-sung-note-8">   Sam Sung Note 8</option>
                        <option class="level-1" value="sam-sung-s8">   Sam Sung S8</option>
                        <option class="level-0" value="sport-outdoor">Sport & Outdoor</option>
                        <option class="level-1" value="freezer-burn">   Freezer Burn</option>
                        <option class="level-1" value="fridge-cooler">   Fridge Cooler</option>
                        <option class="level-1" value="wine-cabinets">   Wine Cabinets</option>
                    </select>
                </div>
                <div class="form-group--icon" style="border-right: 1px solid #f8f8f8; border-radius: 0 0px 0px 0; "><i class="icon-chevron-down"></i>
                    <select class="form-control" style="margin-left: 50px">
                        <option value="0" selected="selected" >كل المناطق</option>
                        <option class="level-0" value="babies-moms">الأطفال والأمهات</option>
                        <option class="level-0" value="books-office">الكتب والمكتب</option>
                        <option class="level-0" value="cars-motocycles">سيارات ودراجات نارية</option>
                        <option class="level-0" value="clothing-apparel">الملابس </option>

                    </select>
                </div>

                <input class="form-control" type="text" placeholder="أنا أبحث عن...">
                <button>بحث</button>
            </form>
        </div>
        <div class="header__right">
            <div class="header__actions">
                <a class="header__extra" href="{{route('site.wish-list')}}"><i class="icon-heart"></i><span><i>0</i></span></a>
                <div class="ps-cart--mini">

                    <a class="header__extra" href="{{route('products.create.step.one')}}"><i class="icon-plus-circle"></i><span style="border-radius: 10%;width: 40px;top: 36px;"><i>اعلانك </i></span></a>

                </div>
                @guest
                    <div class="ps-block--user-header">
                        <div class="ps-block__left">
                            <i class="icon-user-plus"></i>
                        </div>
                        <div class="ps-block__right">
                            <a href="{{route('site.my-account')}}">تسجيل الدخول</a>
                            <a href="{{route('site.my-account')}}">الأشتراك</a>
                        </div>
                    </div>
                @else
                    <div class="ps-block--user-header">

                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 85%;font-weight: 700; background: #fcb800;">
                            مرحبا {{ Auth::user()->name }}  
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('user.editProfile')}}">تعديل ملفي الشخصي</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}">تسجيل الخروج </a>
                            <!-- <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a> -->
                        </div>
                    </div>
                @endguest
            </div>
        </div>
    </div>
</div>