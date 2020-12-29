@extends('front.layouts.site')
@section('title',' إعلاناتي')

<style>

</style>
@section('content')
<div id="content" class="l-page">
    <div class="category-selection-container box">
        <div class="form-group">
            <h3 class="row mr-2 ml-2"> إعلاناتي :</h3>
        </div>
        <div class="FavoritesList-list-container">
            @isset($products)
            @if($products && $products -> count() > 0)
            @foreach($products as $product)
            <div class="mp-Listing-compact FavoritesListItem-favorites-list-item">
                <div class="mp-Listing-compact-body FavoritesListItem-not_published">
                    <label for="m1453792805" class="FavoritesListItem-mp-Listing-compact-selector"> <!--<input
                            type="checkbox" id="m1453792805">-->
                        <figure class="mp-Listing-compact-picture">
                            @if($product->images->count() > 0))
                                @foreach($product->images as $image)
                                @if ($loop->first)
                                    <img  class="FavoritesListItem-unshrinkable-thumb" src="{{Request::root()}}/assets/{{$image->photo ?? ''}}">
                                @endif
                                @endforeach
                            @else
                                <img  class="FavoritesListItem-unshrinkable-thumb" src="{{asset('assets/front/img/Noimage.jpg')}}">
                            @endif
                         

                        </figure>
                    </label>
                    <div class="mp-Listing-compact-content">
                        <h4 class="mp-Listing-compact-title mp-Listing-compact-title--link">
                        @if($product->product_info  != false )
                            <a href="{{route('user.products.edit',$product -> id)}}"><i class="fa fa-edit"></i> {{$product ->product_info-> name ?? ''}} </a>
                        @endif
                        </h4>
                        <div>
                            <span class="mp-Listing-compact-location">@if($product->viewed != false) {{ $product->viewed ?? ''}} <i class="fa fa-eye" aria-hidden="true"></i> @endif </span>
                        </div>
                        <div class="FavoritesListItem-mobile-pricing" style="font-size: 12px;">
                            @if($product->product_price  != false )
                                @if($product->product_price->type_price === 1)
                                    <span class="FavoritesListItem-mobile-pricing">السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-dollar"></i> دولار أمريكي</span>
                                @else
                                    <span class="FavoritesListItem-mobile-pricing" >السعر: &nbsp;{{$product->product_price->price ?? ''}} <i class="fa fa-turkish-lira"></i> ليرة تركية</span>
                                @endif
                            @endif
                        </div>
                        <div class="FavoritesListItem-mobile-pricing">
                            <span class="FavoritesListItem-mobile-pricing" style="font-weight: 400;color: darkgray;font-size: 10px;" > تم النشر&nbsp;{{$product->created_at->diffForHumans() ?? ''}}</span>
                        </div>

                                
                    </div>
                    <div class="FavoritesListItem-mp-Listing-compact-price mp-Listing-compact-price-content">
                        <a type="button" class="btn btn-success" style="color:#fff;">تم البيع</a>
                        <a type="button" href="{{route('user.products.delete',$product -> id)}}" class="btn btn-danger" style="color:#fff;">حذف</a>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="ps-pagination" style="padding-top: 30px;">
                <ul class="pagination">
                    <li><a href="{{$products->previousPageUrl()}}"><i class="icon-chevron-right"></i> الصفحة السابقة </a></li>
                    @for($i=1;$i<=$products->lastPage();$i++)
                    <li><a class="active" href="{{$products->url($i)}}">{{$i ?? ''}}</a></li>
                    @endfor
                    <li><a href="{{$products->nextPageUrl()}}">الصفحة التالية<i class="icon-chevron-left"></i></a></li>
                </ul>
            </div>
            @else
            <div class="mp-Listing-compact FavoritesListItem-favorites-list-item">
                <div class="mp-Listing-compact-body FavoritesListItem-not_published">
                    <div class="mp-Listing-compact-content">
                        <h4 class="mp-Listing-compact-title no_produts">لم تقم بإضافة اي اعلانات الى الان</h4>
                    </div>
                </div>
            </div>
            @endif
            @endisset
        </div>

    </div>

</div>
@endsection