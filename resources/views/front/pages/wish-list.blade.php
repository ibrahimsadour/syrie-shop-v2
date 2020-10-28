@extends('front.layouts.site')

@section('content')

<div class="ps-page--simple">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية</a></li>
                <li>قائمة الرغبات</li>
            </ul>
        </div>
    </div>
    <div class="ps-section--shopping ps-whishlist">
        <div class="container">
            <div class="ps-section__header">
                <h1 style=" text-align: center;">قائمة الرغبات</h1>
            </div>
            <div class="ps-section__content">
                <div class="table-responsive">
                    <table class="table ps-table--whishlist">
                        <thead>
                            <tr>
                                <th></th>
                                <th>اسم المنتج</th>
                                <th>سعر الوحده</th>
                                <th>حالة الرصيد، وضع مخزون</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><a href="#"><i class="icon-cross"></i></a></td>
                                <td>
                                    <div class="ps-product--cart">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('assets/front/img/products/clothing/1.jpg')}}" alt=""></a></div>
                                        <div class="ps-product__content"><a href="product-default.html">مكبر صوت بلوتوث لاسلكي مارشال كيلبورن ، أسود (A4819189)</a></div>
                                    </div>
                                </td>
                                <td class="price">$205.00</td>
                                <td><span class="ps-tag ps-tag--in-stock">في المخزن</span></td>
                                <td><a class="ps-btn" href="#">أضف إلى السلة</a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><i class="icon-cross"></i></a></td>
                                <td>
                                    <div class="ps-product--cart">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('assets/front/img/products/clothing/1.jpg')}}" alt=""></a></div>
                                        <div class="ps-product__content"><a href="product-default.html">حقيبة ظهر يونيرو عسكرية كلاسيكية</a></div>
                                    </div>
                                </td>
                                <td class="price">$108.00</td>
                                <td><span class="ps-tag ps-tag--in-stock">في المخزن</span></td>
                                <td><a class="ps-btn" href="#">أضف إلى السلة</a></td>
                            </tr>
                            <tr>
                                <td><a href="#"><i class="icon-cross"></i></a></td>
                                <td>
                                    <div class="ps-product--cart">
                                        <div class="ps-product__thumbnail"><a href="product-default.html"><img src="{{asset('assets/front/img/products/clothing/1.jpg')}}" alt=""></a></div>
                                        <div class="ps-product__content"><a href="product-default.html">مجفف ملابس XtremepowerUS من الفولاذ المقاوم للصدأ</a></div>
                                    </div>
                                </td>
                                <td class="price">$508.00</td>
                                <td><span class="ps-tag ps-tag--out-stock">في المخزن</span></td>
                                <td><a class="ps-btn" href="#">أضف إلى السلة</a></td>

                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection