@extends('front.layouts.site')
@section('title','المتجر ')
@section('content')
    <div class="ps-breadcrumb">
        <div class="ps-container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية</a></li>
                <li>السوق</li>
            </ul>
        </div>
    </div>

    <div class="ps-page--shop">
        <div class="ps-container">
            <div class="ps-layout--shop" style="margin-top:10px;">
                <div class="ps-layout__left">
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">الاقسام</h4>
                        <ul class="ps-list--categories">
                            <?php
                                $categories = App\Models\MainCategory::with('subCategories')->Active()->get();
                                if($categories && $categories -> count() > 0){
                                    foreach($categories as $category){
                                    echo "<li class='menu-item-has-children'>";?>
                                        <a href="{{route('site.getProductCategory',[$category->id,$category-> slug])}}">{!!$category->icon!!} {{$category->name}}</a>
                                        <?php if($category->subCategories && $category->subCategories->count() > 0  ){
                                            echo "<span class='sub-toggle'><i class='fa fa-angle-down'></i></span>
                                                <ul class='sub-menu'>";
                                                    foreach($category->subCategories as $subCategory){
                                                        echo "<li>";?>
                                                        <a href="{{route('site.getProductSubCategory',[$subCategory->id,$subCategory-> slug])}}">{{$subCategory->name }}</a>
                                                        <?php echo "</li>";
                                                    }
                                                echo "</ul>
                                    </li>";
                                        }
                                    }
                                }
                            ?>
                        </ul>
                    </aside>
                    <aside class="widget widget_shop">
                        <h4 class="widget-title">BY BRANDS</h4>
                        <form class="ps-form--widget-search" action="do_action" method="get">
                            <input class="form-control" type="text" placeholder="">
                            <button><i class="icon-magnifier"></i></button>
                        </form>
                        <figure class="ps-custom-scrollbar" data-height="250">
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-1" name="brand">
                                <label for="brand-1">Adidas (3)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-2" name="brand">
                                <label for="brand-2">Amcrest (1)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-3" name="brand">
                                <label for="brand-3">Apple (2)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-4" name="brand">
                                <label for="brand-4">Asus (19)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-5" name="brand">
                                <label for="brand-5">Baxtex (20)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-6" name="brand">
                                <label for="brand-6">Adidas (11)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-7" name="brand">
                                <label for="brand-7">Casio (9)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-8" name="brand">
                                <label for="brand-8">Electrolux (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-9" name="brand">
                                <label for="brand-9">Gallaxy (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-10" name="brand">
                                <label for="brand-10">Samsung (0)</label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="brand-11" name="brand">
                                <label for="brand-11">Sony (0)</label>
                            </div>
                        </figure>
                        <figure>
                            <h4 class="widget-title">By Price</h4>
                            <div class="ps-slider" data-default-min="13" data-default-max="1300" data-max="1311" data-step="100" data-unit="$"></div>
                            <p class="ps-slider__meta">Price:<span class="ps-slider__value ps-slider__min"></span>-<span class="ps-slider__value ps-slider__max"></span></p>
                        </figure>
                        <figure>
                            <h4 class="widget-title">By Price</h4>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-1" name="review">
                                <label for="review-1"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i></span><small>(13)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-2" name="review">
                                <label for="review-2"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i></span><small>(13)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-3" name="review">
                                <label for="review-3"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-4" name="review">
                                <label for="review-4"><span><i class="fa fa-star rate"></i><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(5)</small></label>
                            </div>
                            <div class="ps-checkbox">
                                <input class="form-control" type="checkbox" id="review-5" name="review">
                                <label for="review-5"><span><i class="fa fa-star rate"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></span><small>(1)</small></label>
                            </div>
                        </figure>
                        <figure>
                            <h4 class="widget-title">By Color</h4>
                            <div class="ps-checkbox ps-checkbox--color color-1 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-1" name="size">
                                <label for="color-1"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-2 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-2" name="size">
                                <label for="color-2"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-3 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-3" name="size">
                                <label for="color-3"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-4 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-4" name="size">
                                <label for="color-4"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-5 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-5" name="size">
                                <label for="color-5"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-6 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-6" name="size">
                                <label for="color-6"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-7 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-7" name="size">
                                <label for="color-7"></label>
                            </div>
                            <div class="ps-checkbox ps-checkbox--color color-8 ps-checkbox--inline">
                                <input class="form-control" type="checkbox" id="color-8" name="size">
                                <label for="color-8"></label>
                            </div>
                        </figure>
                        <figure class="sizes">
                            <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
                        </figure>
                    </aside>
                </div>
                <div class="ps-layout__right">

                    <div class="ps-shopping ps-tab-root">
                        <div class ="filter-sidebar" id="filter-sidebar">
                            <a class="ps-shop__filter-mb" href="#" ><i class="fa fa-filter" aria-hidden="true"></i> عرض الفلتر</a>
                        </div>
                        <div class="ps-shopping__header">
                            <p>تم العثور على  <strong>
                            {{App\Models\Product::where('category_id', request()->id   ?? '')->count()}} 
                            @if(strpos($a,'are') !== false) 
                                // do stuff 
                            @endif
                                </strong> </p>
                            <div class="ps-shopping__actions">
                                <select class="ps-select" data-placeholder="Sort Items">
                                    <option>ترتيب حسب الأحدث</option>
                                    <option>الترتيب حسب الشعبية</option>
                                    <option>الترتيب حسب متوسط التقييم</option>
                                    <option>الترتيب حسب السعر: من الأقل إلى الأعلى</option>
                                    <option>الترتيب حسب السعر: من الأعلى إلى الأقل</option>
                                </select>
                                <div class="ps-shopping__view">
                                    <p>العرض</p>
                                    <ul class="ps-tab-list">
                                        <li class="active"><a href="#tab-1" data-toggle="tooltip" data-placement="top" title=" شبكة"><i class="icon-grid"></i></a></li>
                                        <li><a href="#tab-2" data-toggle="tooltip" data-placement="top" title=" قائمة"><i class="icon-list4"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ps-tabs">
                            <div class="ps-tab active" id="tab-1">
                                <div class="ps-shopping-product">
                                    <div class="row">
                                        @isset($products)
                                            @foreach($products as $product)
                                                <div style="margin-top: 10px;" class="col-xl-2 col-lg-4 col-md-4 col-sm-6 col-6 ">
                                                    <div class="ps-product">
                                                        <div class="ps-product__thumbnail">
                                                            <a href="product-default.html">
                                                                @if($product->images->count() > 0)
                                                                    @foreach($product->images as $image)
                                                                    @if ($loop->first)
                                                                        <img  style="height:150px;width: 180px;" src="{{Request::root()}}/assets/{{$image->photo ?? ''}}">
                                                                    @endif
                                                                    @endforeach
                                                                @else
                                                                    <img style="height:150px;width: 180px;"  src="{{asset('assets/front/img/Noimage.jpg')}}">
                                                                @endif
                                                            </a>
                                                            <ul class="ps-product__actions">
                                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="نظرة سريعة"><i class="icon-eye"></i></a></li>
                                                                <li><a href="#" data-toggle="tooltip" data-placement="top" title="أضف إلى قائمة الامنيات"><i class="icon-heart"></i></a></li>
                                                            </ul>
                                                        </div>
                                                        <div class="ps-product__container"><a class="ps-product__vendor" href="#">{{$product->user->name ?? ''}}</a>
                                                            <div class="ps-product__content">
                                                            <a class="ps-product__title" href="">{{$product->product_info->name ?? ''}}</a>
                                                                @if($product->product_price  != false )
                                                                    @if($product->product_price->type_price === 1)
                                                                        <p style="font-size: 13px;font-weight: 600;" class="ps-product__price">السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-dollar"></i> دولار أمريكي</p>
                                                                    @else
                                                                        <p  style="font-size: 13px;font-weight: 600;"   class="ps-product__price">السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-turkish-lira"></i> ليرة تركية</p>
                                                                    @endif
                                                                @endif
                                                            </div>
                                                            <div class="ps-product__content hover">
                                                            <a class="ps-product__title" href="product-default.html">{{$product->product_info->name ?? ''}}</a>
                                                                @if($product->product_price  != false )
                                                                    @if($product->product_price->type_price === 1)
                                                                        <p class="ps-product__price">السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-dollar"></i> دولار أمريكي</p>
                                                                    @else
                                                                        <p class="ps-product__price">السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-turkish-lira"></i> ليرة تركية</p>
                                                                    @endif
                                                                @endif                                                    
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            @endforeach
                                        @endisset
                                    </div>
                                </div>
                                
                                <div class="ps-pagination">
                                    <ul class="pagination">
                                        <li><a href="{{$products->previousPageUrl()}}"><i class="icon-chevron-right"></i> الصفحة السابقة </a></li>
                                        @for($i=1;$i<=$products->lastPage();$i++)
                                        <li><a class="active" href="{{$products->url($i)}}">{{$i}}</a></li>
                                        @endfor
                                        <li><a href="{{$products->nextPageUrl()}}">الصفحة التالية<i class="icon-chevron-left"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ps-tab" id="tab-2">
                                <div class="ps-shopping-product">
                                    @isset($products)
                                        @foreach($products as $product)
                                            <div class="ps-product ps-product--wide">
                                                <div class="ps-product__thumbnail">
                                                    <a href="product-default.html">
                                                        @if($product->images->count() > 0)
                                                            @foreach($product->images as $image)
                                                            @if ($loop->first)
                                                                <img   src="{{Request::root()}}/assets/{{$image->photo ?? ''}}">
                                                            @endif
                                                            @endforeach
                                                        @else
                                                            <img   src="{{asset('assets/front/img/Noimage.jpg')}}">
                                                        @endif
                                                    </a>
                                                </div>
                                                <div class="ps-product__container">
                                                    <div class="ps-product__content">
                                                    <a class="ps-product__title" href="product-default.html">{{$product->product_info->name ?? ''}}</a>
                                                    <span class="FavoritesListItem-mobile-pricing" style="font-weight: 400;color: darkgray;font-size: 10px;" > تم النشر&nbsp;{{$product->created_at->diffForHumans() ?? '' }}</span>
                                                        <p class="ps-product__vendor">البائع : <a href="#">{{$product->user->name ?? ''}}</a></p>
                                                        <ul class="ps-product__desc">
                                                            <li><P>{{$product->product_info->description ?? ''}}</P></li>
                                                        </ul>
                                                    </div>
                                                    <div class="ps-product__shopping">
                                                            @if($product->product_price  != false )
                                                                @if($product->product_price->type_price === 1)
                                                                    <p class="ps-product__price">السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-dollar"></i> دولار أمريكي</p>
                                                                @else
                                                                    <p class="ps-product__price">السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-turkish-lira"></i> ليرة تركية</p>
                                                                @endif
                                                            @endif
                                                        
                                                            <a class="ps-btn ps-btn--gray" href="https://wa.me/0031685125822"><i class="fa fa-whatsapp"><span> واتس اب - whatsapp </span></i></a>
                                                            <a class="ps-btn" href="#"><i class="fa fa-phone    "><span> الاتصال </span></i></a>
                                                        <ul class="ps-product__actions">
                                                            <li><a href="#"><i class="icon-heart"></i> أضف إلى قائمة الامنيات</a></li>
                                                            <li><a href="#"><i class="icon-map-marker"></i>
                                                            @php 
                                                             $location_id = $product->product_info->location_id ?? '';
                                                            $locations = App\Models\Location::where('id',$location_id)->get();
                                                            foreach($locations as $location){
                                                                if($location){
                                                                    echo $location->name;
                                                                }
                                                            }
                                                            @endphp
                                                            </a></li>
                                                        
        
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                    @endisset
                                </div>
                                <div class="ps-pagination">
                                    <ul class="pagination">
                                        <li><a href="{{$products->previousPageUrl()}}"><i class="icon-chevron-right"></i> الصفحة السابقة </a></li>
                                        @for($i=1;$i<=$products->lastPage();$i++)
                                        <li><a class="active" href="{{$products->url($i)}}">{{$i}}</a></li>
                                        @endfor
                                        <li><a href="{{$products->nextPageUrl()}}">الصفحة التالية<i class="icon-chevron-left"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection