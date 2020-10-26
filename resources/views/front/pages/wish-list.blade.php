@extends('front.layouts.site')

@section('content')

<div class="page-header page-header-page">
    <div class="page-breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a class="home" href="../index.html" itemprop="item"><span itemprop="name">الرئيسية
                        </span></a>
                </li><span class="sep">/</span>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="item"><span itemprop="name">قائمة الرغبات</span></span>
                </li>
            </ul>
        </div>
    </div>
    <h1 class="entry-title">قائمة الرغبات</h1>
</div>

<!-- Begin  empty white space 30px -->
@include('front.home-includes.empty-space-30px')
<!-- End white space -->
<div class="container">
    <div class="row">
        <div id="primary" class="content-area col-md-12">
            <main id="main" class="site-main">



                <article id="post-3143" class="post-3143 page type-page status-publish hentry">

                    <div class="entry-content">





                        <form id="yith-wcwl-form" action="https://market.hvips.com/wishlist/" method="post"
                            class="woocommerce yith-wcwl-form wishlist-fragment"
                            data-fragment-options="{&quot;per_page&quot;:5,&quot;current_page&quot;:1,&quot;pagination&quot;:&quot;no&quot;,&quot;wishlist_id&quot;:false,&quot;action_params&quot;:false,&quot;no_interactions&quot;:false,&quot;layout&quot;:&quot;&quot;,&quot;wishlist&quot;:false,&quot;is_default&quot;:true,&quot;is_custom_list&quot;:false,&quot;wishlist_token&quot;:&quot;&quot;,&quot;is_private&quot;:false,&quot;count&quot;:0,&quot;page_title&quot;:&quot;\u0642\u0627\u0626\u0645\u0629 \u0631\u063a\u0628\u0627\u062a\u0649 \u0639\u0644\u0649 HVIPS&quot;,&quot;default_wishlsit_title&quot;:&quot;\u0642\u0627\u0626\u0645\u0629 \u0631\u063a\u0628\u0627\u062a\u0649 \u0639\u0644\u0649 HVIPS&quot;,&quot;page_links&quot;:false,&quot;is_user_logged_in&quot;:false,&quot;is_user_owner&quot;:true,&quot;can_user_edit_title&quot;:false,&quot;show_price&quot;:false,&quot;show_dateadded&quot;:false,&quot;show_stock_status&quot;:false,&quot;show_add_to_cart&quot;:false,&quot;show_remove_product&quot;:true,&quot;add_to_cart_text&quot;:&quot;Add to cart&quot;,&quot;show_ask_estimate_button&quot;:false,&quot;ask_estimate_url&quot;:&quot;&quot;,&quot;price_excl_tax&quot;:true,&quot;show_cb&quot;:false,&quot;show_quantity&quot;:false,&quot;show_variation&quot;:false,&quot;show_price_variations&quot;:false,&quot;show_update&quot;:false,&quot;enable_drag_n_drop&quot;:false,&quot;enable_add_all_to_cart&quot;:false,&quot;move_to_another_wishlist&quot;:false,&quot;repeat_remove_button&quot;:false,&quot;show_last_column&quot;:false,&quot;heading_icon&quot;:&quot;&lt;i class=\&quot;fa fa-heart-o\&quot;&gt;&lt;\/i&gt;&quot;,&quot;share_enabled&quot;:false,&quot;template_part&quot;:&quot;view&quot;,&quot;additional_info&quot;:false,&quot;available_multi_wishlist&quot;:false,&quot;form_action&quot;:&quot;https:\/\/market.hvips.com\/wishlist\/&quot;,&quot;item&quot;:&quot;wishlist&quot;}">

                            <!-- TITLE -->
                            <div class="wishlist-title ">
                                <h2>قائمة رغباتى على HVIPS</h2>
                            </div>


                            <!-- WISHLIST TABLE -->
                            <table
                                class="shop_table cart wishlist_table wishlist_view traditional responsive   "
                                data-pagination="no" data-per-page="5" data-page="1" data-id=""
                                data-token="">


                                <thead>
                                    <tr>

                                        <th class="product-remove">
                                            <span class="nobr">
                                            </span>
                                        </th>

                                        <th class="product-thumbnail"></th>

                                        <th class="product-name">
                                            <span class="nobr">
                                                اسم المنتج </span>
                                        </th>





                                    </tr>
                                </thead>

                                <tbody class="wishlist-items-wrapper">
                                    <tr>
                                        <td colspan="3" class="wishlist-empty">لم يتم إضافة أي منتجات إلى
                                            قائمة الرغبات</td>
                                    </tr>
                                </tbody>

                            </table>

                            <div class="yith_wcwl_wishlist_footer">





                            </div>

                            <input type="hidden" id="yith_wcwl_edit_wishlist" name="yith_wcwl_edit_wishlist"
                                value="e72e0149ec" /><input type="hidden" name="_wp_http_referer"
                                value="/wishlist/" /> <input type="hidden" value="" name="wishlist_id"
                                id="wishlist_id">


                        </form>




                    </div>
                    <!-- .entry-content -->

                </article><!-- #post-## -->



            </main><!-- #main -->
        </div><!-- #primary -->

    </div>
</div>
@endsection