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
                            <form method="post" class="woocommerce-ResetPassword lost_reset_password" style="max-width: 430px;margin: 0 auto;background-color:#fff;padding: 20px;">
                                <h2>Lost your password?</h2>
                                <p>Please enter your username or email address. You will receive a link to create a new
                                    password via email.</p>

                                <p class="woocommerce-form-row woocommerce-form-row--first form-row form-row-first">
                                    <label for="user_login">Username or email</label>
                                    <input class="woocommerce-Input woocommerce-Input--text input-text" type="text"
                                        name="user_login" id="user_login">
                                </p>

                                <div class="clear"></div>


                                <p class="woocommerce-form-row form-row">
                                    <input type="hidden" name="wc_reset_password" value="true">
                                    <button type="submit" class="woocommerce-Button button" value="Reset password">Reset
                                        password</button>
                                </p>

                                <input type="hidden" id="woocommerce-lost-password-nonce"
                                    name="woocommerce-lost-password-nonce" value="eaa216ff9f"><input type="hidden"
                                    name="_wp_http_referer" value="/my-account/lost-password/">
                            </form>
                        </div>
                    </div>
                    <!-- .entry-content -->

                </article><!-- #post-## -->



            </main><!-- #main -->
        </div><!-- #primary -->

    </div>
</div>
@endsection