<header class="header header--mobile" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>مرحبًا بكم في متجر صدور للتسوق عبر الإنترنت!</p>
            </div>
            <div class="header__right">
                <ul class="navigation__extra">
                    <li><a href="#">قائمة المتاجر</a></li>
                    <li><a href="#"><i class="icon-plus-circle" ></i> أضافة أعلان</a></li>
                    <li>
                        <div class="ps-dropdown"><a href="#">(ليرة تركي) - TRY</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#"> (دولارأمريكي) - USA</a></li>
                                <li><a href="#">(ليرة تركي) - TRY</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class=" language"><a href="{{route('site.about-us')}}"><img src="{{asset('assets/front/img/flag/en.png')}}" alt=""> معلومات عنا</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navigation--mobile">
            <div class="navigation__left"><a class="ps-logo" href="{{route('site.index')}}"><img src="{{asset('assets/front/img/logo_light.png')}}" alt=""></a></div>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini"><a class="header__extra" href="{{route('site.wish-list')}}"><i class="icon-heart"></i><span><i>0</i></span></a>
                    </div>
                    @guest
                        <div class="ps-block--user-header">
                            <a class="ps-block__left"href="{{route('site.my-account')}}" >
                                <i class="icon-user-plus"></i>
                            </a>
                        </div>    
                    @else
                    <div class="ps-block--user-header">

                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 85%;font-weight: 700; background: #fcb800;">
                            مرحبا <span>{{ Auth::user()->name }} <span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#">تعديل ملفي الشخصي</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}"><i class="fa fa-power-off" aria-hidden="true"></i>تسجيل الخروج</a>
                            <!-- <a class="dropdown-item" href="#">Something else here</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Separated link</a>  -->
                        </div>
                    </div>
                    
                    @endguest
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="{{route('site.index')}}" method="get">
                <div class="form-group--nest">

                    <input class="form-control" type="text" placeholder="أنا أبحث عن">
                    <button><i class="icon-magnifier"></i></button>
                </div>
                <div class="choose-items" style="display: none;">
                    <div class="form-group--icon" style="background-color: white;"><i class="icon-chevron-down"></i>
                        <select class="form-control">
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
                    <div class="form-group--icon" style="background-color: white;"><i class="icon-chevron-down"></i>
                        <select class="form-control" >
                            <option value="0" selected="selected" >كل المناطق</option>
                            <option class="level-0" value="babies-moms">الدانا</option>
                            <option class="level-0" value="books-office">سرمدا</option>
                            <option class="level-0" value="cars-motocycles">ادلب المدينة</option>

                        </select>
                    </div>

                <div>
            </form>
        </div>
    </header>
