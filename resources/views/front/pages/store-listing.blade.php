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
                    <span itemprop="item"><span itemprop="name">قائمة المتاجر</span></span>
                </li>
            </ul>
        </div>
    </div>
    <h1 class="entry-title">قائمة المتاجر</h1>
</div>

<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-12">
            <main id="main" class="site-main">



                <article id="post-3075" class="post-3075 page type-page status-publish hentry">

                    <div class="entry-content">



                        <div id="dokan-store-listing-filter-wrap">
                            <div class="left">
                                <p class="item store-count">
                                    مجموع المتاجر التي تظهر: 3 </p>
                            </div>

                            <div class="right">
                                <div class="item">
                                    <div class="dokan-icons">
                                        <div class="dokan-icon-div"></div>
                                        <div class="dokan-icon-div"></div>
                                        <div class="dokan-icon-div"></div>
                                    </div>

                                    <button class="dokan-store-list-filter-button dokan-btn dokan-btn-theme">
                                        فلتر </button>
                                </div>

                                <form name="stores_sorting" class="sort-by item" method="get">
                                    <label>ترتيب حسب:</label>

                                    <select name="stores_orderby" id="stores_orderby" aria-label="ترتيب حسب">
                                        <option value="most_recent">الأحدث</option>
                                        <option value="total_orders">الأكثر شعبية</option>
                                    </select>
                                </form>

                                <div class="toggle-view item">
                                    <span class="dashicons dashicons-screenoptions active" data-view="grid-view"></span>
                                    <span class="dashicons dashicons-menu-alt" data-view="list-view"></span>
                                </div>
                            </div>
                        </div>


                        <form role="store-list-filter" name="dokan_store_lists_filter_form"
                            id="dokan-store-listing-filter-form-wrap" style="display: none">

                            <div class="store-search grid-item">
                                <input type="search" class="store-search-input" name="dokan_seller_search"
                                    placeholder="Search Vendors">
                            </div>

                            <div class="apply-filter">
                                <button id="cancel-filter-btn" class="dokan-btn dokan-btn-theme">Cancel</button>
                                <button id="apply-filter-btn" class="dokan-btn dokan-btn-theme"
                                    type="submit">تطبيق</button>
                            </div>

                        </form>
                        <div id="dokan-seller-listing-wrap" class="grid-view">
                            <div class="seller-listing-content">
                                <ul class="dokan-seller-wrap">

                                    <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                                        <div class="store-wrapper">
                                            <div class="store-header">
                                                <div class="store-banner">
                                                    <a href="https://market.hvips.com/store/shrkh-drym/">
                                                        <img
                                                            src="https://market.hvips.com/wp-content/plugins/dokan-lite/assets/images/default-store-banner.png">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="store-content default-store-banner">
                                                <div class="store-data-container">
                                                    <div class="featured-favourite">

                                                    </div>

                                                    <div class="store-data">
                                                        <h2><a href="https://market.hvips.com/store/shrkh-drym/">شركة
                                                                دريم</a></h2>


                                                        <p class="store-address"><span class="street_1 street_2">
                                                                الشريف, مصر الجديدة</span><br><span class="city">
                                                                القاهرة,</span><br><span class="state">
                                                                القاهرة,</span><span class="country"> مصر </span></p>

                                                        <p class="store-phone">
                                                            <i class="fa fa-phone" aria-hidden="true"></i> 01062470003
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="store-footer">
                                                <div class="seller-avatar">
                                                    <img alt=""
                                                        src="https://secure.gravatar.com/avatar/e76317b655383e6c984e5ce79c90d039?s=150&amp;d=mm&amp;r=g"
                                                        srcset="https://secure.gravatar.com/avatar/e76317b655383e6c984e5ce79c90d039?s=300&amp;d=mm&amp;r=g 2x"
                                                        class="avatar avatar-150 photo" height="150" width="150">
                                                </div>
                                                <a href="https://market.hvips.com/store/shrkh-drym/"
                                                    title="قم بزيارة المتجر">
                                                    <span
                                                        class="dashicons dashicons-arrow-right-alt2 dokan-btn-theme dokan-btn-round"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                                        <div class="store-wrapper">
                                            <div class="store-header">
                                                <div class="store-banner">
                                                    <a
                                                        href="https://market.hvips.com/store/qafila-onlineqafila-online/">
                                                        <img
                                                            src="https://market.hvips.com/wp-content/plugins/dokan-lite/assets/images/default-store-banner.png">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="store-content default-store-banner">
                                                <div class="store-data-container">
                                                    <div class="featured-favourite">

                                                    </div>

                                                    <div class="store-data">
                                                        <h2><a
                                                                href="https://market.hvips.com/store/qafila-onlineqafila-online/">qafila.online</a>
                                                        </h2>


                                                        <p class="store-address"><span class="country"> المملكة العربية
                                                                السعودية </span></p>

                                                        <p class="store-phone">
                                                            <i class="fa fa-phone" aria-hidden="true"></i> 05555555555
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="store-footer">
                                                <div class="seller-avatar">
                                                    <img alt=""
                                                        src="https://secure.gravatar.com/avatar/9123ee5431ca648cb11e21a28b8ec2fd?s=150&amp;d=mm&amp;r=g"
                                                        srcset="https://secure.gravatar.com/avatar/9123ee5431ca648cb11e21a28b8ec2fd?s=300&amp;d=mm&amp;r=g 2x"
                                                        class="avatar avatar-150 photo" height="150" width="150">
                                                </div>
                                                <a href="https://market.hvips.com/store/qafila-onlineqafila-online/"
                                                    title="قم بزيارة المتجر">
                                                    <span
                                                        class="dashicons dashicons-arrow-right-alt2 dokan-btn-theme dokan-btn-round"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>


                                    <li class="dokan-single-seller woocommerce coloum-3 no-banner-img">
                                        <div class="store-wrapper">
                                            <div class="store-header">
                                                <div class="store-banner">
                                                    <a href="https://market.hvips.com/store/ytryrty/">
                                                        <img
                                                            src="https://market.hvips.com/wp-content/plugins/dokan-lite/assets/images/default-store-banner.png">
                                                    </a>
                                                </div>
                                            </div>

                                            <div class="store-content default-store-banner">
                                                <div class="store-data-container">
                                                    <div class="featured-favourite">

                                                    </div>

                                                    <div class="store-data">
                                                        <h2><a
                                                                href="https://market.hvips.com/store/ytryrty/">ytryrty</a>
                                                        </h2>


                                                        <p class="store-address"><span class="country"> كوبا </span></p>

                                                        <p class="store-phone">
                                                            <i class="fa fa-phone" aria-hidden="true"></i> 0677124422
                                                        </p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="store-footer">
                                                <div class="seller-avatar">
                                                    <img alt=""
                                                        src="https://secure.gravatar.com/avatar/6a48edea13bd53b9bf901ff77775ad62?s=150&amp;d=mm&amp;r=g"
                                                        srcset="https://secure.gravatar.com/avatar/6a48edea13bd53b9bf901ff77775ad62?s=300&amp;d=mm&amp;r=g 2x"
                                                        class="avatar avatar-150 photo" height="150" width="150">
                                                </div>
                                                <a href="https://market.hvips.com/store/ytryrty/"
                                                    title="قم بزيارة المتجر">
                                                    <span
                                                        class="dashicons dashicons-arrow-right-alt2 dokan-btn-theme dokan-btn-round"></span>
                                                </a>
                                            </div>
                                        </div>
                                    </li>

                                    <div class="dokan-clearfix"></div>
                                </ul> <!-- .dokan-seller-wrap -->


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