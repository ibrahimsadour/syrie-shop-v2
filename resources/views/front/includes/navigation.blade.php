<nav class="navigation">
    <div class="ps-container">
        <div class="navigation__left">
            <div class="menu--product-categories">
                <div class="menu__toggle"><i class="icon-menu"></i><span> التسوق حسب الأقسام</span></div>
                <div class="menu__content">
                    <ul class="menu--dropdown">
                        <?php
                            $categories = App\Models\MainCategory::with('subCategories')->get();
                            if($categories && $categories -> count() > 0){
                                foreach($categories as $category){
                                    echo "<li class='current-menu-item menu-item-has-children has-mega-menu'><a href='$category->id'>$category->icon  $category->name</a>";
                                
                                    if($category->subCategories && $category->subCategories->count() > 0  ){
                                        echo "<span class='sub-toggle'></span>
                                        <div class='mega-menu'>
                                            <ul class='mega-menu__column'>";
                                                foreach($category->subCategories as $subCategory){
                                                    echo "<li  class='current-menu-item has-mega-menu' ><a href='$subCategory->id '>$subCategory->name </a>
                                                    </li>";
                                                }
                                            echo "</ul>
                                        <div/>
                                        </li>";
                                    }
                                }
                            }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
        <div class="navigation__right">
            <ul class="menu">
                <li class="menu-item-has-children"><a href="{{route('site.index')}}">الرئيسية</a><span class="sub-toggle"></span>
                    <ul class="sub-menu">
                        <li class="current-menu-item "><a href="homepage-2.html"></a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-10.html">تكنولوجيا </a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-9.html">الخضراوات والفواكه</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-3.html">الرئيسية التحديث الاول</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-4.html">الرئيسية التحديث  الثاني</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-5.html">الرئيسية التحديث  الثالث</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-6.html">الرئيسية التحديث  الرابع</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-7.html">Home الكترونيات</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-8.html">الاثاث والمفروشات</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-kids.html">الاطفال</a>
                        </li>
                        <li class="current-menu-item "><a href="homepage-photo-and-video.html">التصوير</a>
                        </li>
                    </ul>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href=""{{route('site.store')}}"">السوق</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Catalog Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="{{route('site.store')}}">Shop Default</a>
                                </li>
                                <li class="current-menu-item "><a href="{{route('site.store')}}">Shop Fullwidth</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-categories.html">Shop Categories</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-sidebar.html">Shop Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-sidebar-without-banner.html">Shop Without Banner</a>
                                </li>
                                <li class="current-menu-item "><a href="shop-carousel.html">Shop Carousel</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="product-default.html">Default</a>
                                </li>
                                <li class="current-menu-item "><a href="product-extend.html">Extended</a>
                                </li>
                                <li class="current-menu-item "><a href="product-full-content.html">Full Content</a>
                                </li>
                                <li class="current-menu-item "><a href="product-box.html">Boxed</a>
                                </li>
                                <li class="current-menu-item "><a href="product-sidebar.html">Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="product-default.html">Fullwidth</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Product Types<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="product-default.html">Simple</a>
                                </li>
                                <li class="current-menu-item "><a href="product-default.html">Color Swatches</a>
                                </li>
                                <li class="current-menu-item "><a href="product-countdown.html">Countdown</a>
                                </li>
                                <li class="current-menu-item "><a href="product-multi-vendor.html">Multi-Vendor</a>
                                </li>
                                <li class="current-menu-item "><a href="product-instagram.html">Instagram</a>
                                </li>
                                <li class="current-menu-item "><a href="product-affiliate.html">Affiliate</a>
                                </li>
                                <li class="current-menu-item "><a href="product-on-sale.html">On sale</a>
                                </li>
                                <li class="current-menu-item "><a href="product-video.html">Video Featured</a>
                                </li>
                                <li class="current-menu-item "><a href="product-groupped.html">Grouped</a>
                                </li>
                                <li class="current-menu-item "><a href="product-out-stock.html">Out Of Stock</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Woo Pages<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="shopping-cart.html">Shopping Cart</a>
                                </li>
                                <li class="current-menu-item "><a href="checkout.html">Checkout</a>
                                </li>
                                <li class="current-menu-item "><a href="whishlist.html">Whishlist</a>
                                </li>
                                <li class="current-menu-item "><a href="compare.html">Compare</a>
                                </li>
                                <li class="current-menu-item "><a href="order-tracking.html">Order Tracking</a>
                                </li>
                                <li class="current-menu-item "><a href="{{route('user.login')}}">My Account</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">صفحات</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>الصفحات الأساسية<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="{{route('site.about-us')}}">معلومات عنا  </a>
                                </li>
                                <li class="current-menu-item "><a href="{{route('site.contact-us')}}">اتصل بنا</a>
                                </li>
                                <li class="current-menu-item "><a href="{{route('site.faqs')}}">الاسئلة الشائعة</a>
                                </li>
                                <li class="current-menu-item "><a href="{{route('site.coming-soon')}}">الموقع قيد الإنشاء</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>صفحات التجار<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="{{route('site.become-a-vendor')}}">افتح متجرك في سوق البلد</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-store.html">متجر البائع</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-dashboard-free.html">بائع لوحة القيادة مجانا</a>
                                </li>
                                <li class="current-menu-item "><a href="vendor-dashboard-pro.html">بائع لوحة القيادة مجانا</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item-has-children has-mega-menu"><a href="#">صحافتنا</a><span class="sub-toggle"></span>
                    <div class="mega-menu">
                        <div class="mega-menu__column">
                            <h4>Blog Layout<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="blog-grid.html">Grid</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-list.html">Listing</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-small-thumb.html">Small Thumb</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-left-sidebar.html">Left Sidebar</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-right-sidebar.html">Right Sidebar</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mega-menu__column">
                            <h4>Single Blog<span class="sub-toggle"></span></h4>
                            <ul class="mega-menu__list">
                                <li class="current-menu-item "><a href="blog-detail.html">Single 1</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-2.html">Single 2</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-3.html">Single 3</a>
                                </li>
                                <li class="current-menu-item "><a href="blog-detail-4.html">Single 4</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="menu-item"><a href="{{route('site.contact-us')}}">اتصل بنا</a></li>
            </ul>
            <ul class="navigation__extra">
                <li><a href="#">قائمة المتاجر</a></li>
                <li><a href="#">تتبع مشترياتك</a></li>
                <li>
                    <div class="ps-dropdown"><a href="#">(ليرة تركي) - TRY</a>
                        <ul class="ps-dropdown-menu">
                            <li><a href="#"> (دولارأمريكي) - USA</a></li>
                            <li><a href="#">(ليرة تركي) - TRY</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{route('site.about-us')}}">معلومات عنا  </a></li>
            </ul>
        </div>
    </div>
</nav>