@extends('front.layouts.site')

<style>
.shop-toolbar {
    background-color: #f5f5f5;
    padding: 0 15px;
}
.shop-toolbar .products-found, .shop-toolbar .woocommerce-ordering, .shop-toolbar .mf-filters {
    float: left;
    min-height: 51px;
    display: flex;
    align-items: center;
}
.shop-toolbar .products-found strong {
    color: #000;
    font-weight: 600;
    padding-right: 5px;
}
.shop-toolbar .shop-view {
    float: right;
    display: flex;
    align-items: center;
    min-height: 51px;
    color: #000;
}
.shop-toolbar .shop-view > span {
    padding-right: 5px;
}
.shop-toolbar .shop-view .mf-shop-view {
    margin-left: 15px;
    font-size: 24px;
    color: #999;
    line-height: 1;
    margin-top: 3px;
    display: block;
}
.shop-toolbar.multiple .woocommerce-ordering {
    margin-right: 45px;
}
.shop-toolbar .woocommerce-ordering {
    color: #000;
    margin: 0;
    padding: 0;
    float: right;
}
.shop-toolbar .products-found, .shop-toolbar .woocommerce-ordering, .shop-toolbar .mf-filters {
    float: left;
    min-height: 51px;
    display: flex;
    align-items: center;
}
.shop-toolbar .products-found strong, .woocommerce .shop-toolbar .shop-view > span {
    padding-left: 5px;
    padding-right: 0;
}
.shop-toolbar .mf-filter-mobile {
    display: none;
}
</style>

@section('content')

<div class="page-header page-header-catalog">
    <div class="page-breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs">
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <a class="home" href="https://market.hvips.com" itemprop="item"><span itemprop="name">الرئيسية
                        </span></a>
                </li><span class="sep">/</span>
                <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                    <span itemprop="item"><span itemprop="name">السوق</span></span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Begin  empty white space 30px -->
@include('front.home-includes.empty-space-30px')

<!-- End white space -->
<div class="container">
    <div class="row">
        <div class="woocommerce-notices-wrapper"></div>
        <div id="primary" class="content-area col-md-9 col-sm-12 col-xs-12">

            <div id="mf-catalog-toolbar" class="shop-toolbar multiple">
                <div class="products-found"><strong>1</strong>تم العثور على منتجات</div>
                <div class="shop-view"><span>معاينة</span><a href="#" class="grid-view mf-shop-view current"
                        data-view="grid"><i class="icon-grid"></i></a><a href="#" class="list-view mf-shop-view "
                        data-view="list"><i class="icon-list4"></i></a></div> <a href="#" class="mf-filter-mobile"
                    id="mf-filter-mobile"><i class="icon-equalizer"></i><span>Filter</span></a>
                <ul class="woocommerce-ordering">
                    <li class="current"><span> الترتيب الافتراضي</span>
                        <ul>
                            <li><a href="https://market.hvips.com/السوق/?orderby=menu_order" class="active">الترتيب
                                    الافتراضي</a></li>
                            <li><a href="https://market.hvips.com/السوق/?orderby=popularity" class="">ترتيب حسب
                                    الشهرة</a></li>
                            <li><a href="https://market.hvips.com/السوق/?orderby=rating" class="">ترتيب حسب معدل
                                    التقييم</a></li>
                            <li><a href="https://market.hvips.com/السوق/?orderby=date" class="">ترتيب حسب الأحدث</a>
                            </li>
                            <li><a href="https://market.hvips.com/السوق/?orderby=price" class="">ترتيب حسب: الأدنى سعراً
                                    للأعلى</a></li>
                            <li><a href="https://market.hvips.com/السوق/?orderby=price-desc" class="">ترتيب حسب: الأعلى
                                    سعراً للأدنى</a></li>
                        </ul>
                    </li>
                    <li class="cancel-ordering">
                        <a href="#" class="mf-cancel-order">Cancel</a>
                    </li>
                </ul>
            </div>
            <div class="mf-toolbar-empty-space"></div>
            <div id="mf-shop-content" class="mf-shop-content">
                <ul class="products columns-4">
                    <li
                        class="col-xs-6 col-sm-4 col-md-3 col-lg-3 un-4-cols product type-product post-3130 status-publish first instock product_cat-iphone-x-ar product_tag-220 has-post-thumbnail sale shipping-taxable purchasable product-type-simple">

                    </li>
                </ul>
            </div>
        </div>
        
        <aside id="primary-sidebar" class="widgets-area primary-sidebar col-md-3 col-sm-12 col-xs-12  catalog-sidebar">
            <div id="mf_product_categories-2" class="widget woocommerce mf_widget_product_categories">
                <h4 class="widget-title">الفئات</h4>
                <ul class="product-categories">
                    <li class="cat-item cat-item-213"><a
                            href="https://market.hvips.com/product-category/iphone-x-ar/">آيفون اكس</a>
                    </li>
                </ul>
            </div>
            <div id="mf_product_brands-2"
                class="widget woocommerce mf-widget-layered-nav woocommerce-widget-layered-nav">
                <h4 class="widget-title">حسب الماركة</h4>
                <div class="widget-wrapper">
                    <div class="search_layered_nav"><input type="text" class="mf-input-search-nav"></div>
                    <ul class="woocommerce-widget-layered-nav-list mf-widget-layered-nav-scroll" data-height="130">
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a data-title="جلكسى"
                                href="https://market.hvips.com/السوق/?product_brand=galaxy-ar">جلكسى</a> <span
                                class="count">(1)</span></li>
                    </ul>
                </div>
            </div>
            <div id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
                <h4 class="widget-title">حسب السعر</h4>
                <form method="get" action="https://market.hvips.com/%D8%A7%D9%84%D8%B3%D9%88%D9%82/">
                    <div class="price_slider_wrapper">
                        <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all"
                            style="">
                            <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;">
                            </div><span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0"
                                style="left: 0%;"></span><span class="ui-slider-handle ui-state-default ui-corner-all"
                                tabindex="0" style="left: 100%;"></span>
                        </div>
                        <div class="price_slider_amount" data-step="10">
                            <input type="text" id="min_price" name="min_price" value="10" data-min="10"
                                placeholder="أدنى سعر" style="display: none;">
                            <input type="text" id="max_price" name="max_price" value="1750" data-max="1750"
                                placeholder="أعلى سعر" style="display: none;">
                            <button type="submit" class="button">تصفية</button>
                            <div class="price_label" style="">
                                السعر: <span class="from">10&nbsp;ر.س</span> — <span class="to">1,750&nbsp;ر.س</span>
                            </div>
                            <div class="clear"></div>
                        </div>
                    </div>
                </form>

            </div>
            <div id="martfury_rating_filter-2" class="widget woocommerce widget_rating_filter">
                <h4 class="widget-title">حسب التقييم</h4>
                <ul>
                    <li class="wc-layered-nav-rating"><a href="https://market.hvips.com/السوق/?rating_filter=5"><span
                                class="star-rating"><span style="width:100%">تم التقييم <strong
                                        class="rating">5</strong> من 5</span></span> (0)</a></li>
                    <li class="wc-layered-nav-rating"><a href="https://market.hvips.com/السوق/?rating_filter=4"><span
                                class="star-rating"><span style="width:80%">تم التقييم <strong class="rating">4</strong>
                                    من 5</span></span> (1)</a></li>
                    <li class="wc-layered-nav-rating"><a href="https://market.hvips.com/السوق/?rating_filter=3"><span
                                class="star-rating"><span style="width:60%">تم التقييم <strong class="rating">3</strong>
                                    من 5</span></span> (0)</a></li>
                    <li class="wc-layered-nav-rating"><a href="https://market.hvips.com/السوق/?rating_filter=2"><span
                                class="star-rating"><span style="width:40%">تم التقييم <strong class="rating">2</strong>
                                    من 5</span></span> (0)</a></li>
                    <li class="wc-layered-nav-rating"><a href="https://market.hvips.com/السوق/?rating_filter=1"><span
                                class="star-rating"><span style="width:20%">تم التقييم <strong class="rating">1</strong>
                                    من 5</span></span> (0)</a></li>
                </ul>
            </div>
        </aside><!-- #secondary -->
    </div>
</div>

@endsection