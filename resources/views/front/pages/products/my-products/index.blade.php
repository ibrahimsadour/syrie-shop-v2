@extends('front.layouts.site')
<style>
.mp-Listing-compact-body {
    display: flex;
}

.FavoritesListItem-favorites-list-item {
    margin: 0;
    border-radius: 0;
    border-bottom: 1px solid #e6e4e1;
}


.FavoritesListItem-mp-Listing-compact-selector {
    display: flex;
    align-items: center;
    margin-left: 10px;
}

.mp-Listing-compact,
.mp-NotificationListItem-wrapper {
    display: block;
    margin-bottom: 5px;
    overflow: hidden;
    padding: 8px;
    text-decoration: none;
}

.mp-Card,
.mp-Form-body,
.mp-Form-footer,
.mp-Listing,
.mp-Listing-card,
.mp-Listing-compact,
.mp-NotificationListItem-wrapper {
    background: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .14);
    color: #2d3c4d;
    overflow: hidden;
}

.mp-Listing-compact-body .mp-Listing-compact-picture,
.mp-Listing-compact-body .mp-NotificationListItem-picture,
.mp-NotificationListItem-body .mp-Listing-compact-picture,
.mp-NotificationListItem-body .mp-NotificationListItem-picture {
    background-color: #f7f7f6;
    background-size: cover;
    border-radius: 3px;
    font-size: 0;
    height: 60px;
    line-height: 60px;
    margin: 0 16px 0 0;
    text-align: center;
    width: 60px;
}

.FavoritesListItem-favorites-list-item img.FavoritesListItem-unshrinkable-thumb {
    width: 100%;
}

.mp-Listing-compact-body .mp-Listing-compact-picture img,
.mp-Listing-compact-body .mp-NotificationListItem-picture img,
.mp-NotificationListItem-body .mp-Listing-compact-picture img,
.mp-NotificationListItem-body .mp-NotificationListItem-picture img {
    max-height: 100%;
    max-width: 100%;
    vertical-align: middle;
}

.mp-Listing-compact-body .mp-Listing-compact-content,
.mp-Listing-compact-body .mp-NotificationListItem-content,
.mp-NotificationListItem-body .mp-Listing-compact-content,
.mp-NotificationListItem-body .mp-NotificationListItem-content {
    font-family: Roboto, sans-serif;
    font-family: var(--mp-font-base--light, "Roboto", sans-serif);
    font-style: normal;
    font-weight: 300;
    font-size: 14px;
    line-height: 20px;
    flex: 1 0 0;
}

.mp-Listing-compact-body .mp-Listing-compact-content .mp-Listing-compact-title,
.mp-Listing-compact-body .mp-Listing-compact-content .mp-NotificationListItem-title,
.mp-Listing-compact-body .mp-NotificationListItem-content .mp-Listing-compact-title,
.mp-Listing-compact-body .mp-NotificationListItem-content .mp-NotificationListItem-title,
.mp-NotificationListItem-body .mp-Listing-compact-content .mp-Listing-compact-title,
.mp-NotificationListItem-body .mp-Listing-compact-content .mp-NotificationListItem-title,
.mp-NotificationListItem-body .mp-NotificationListItem-content .mp-Listing-compact-title,
.mp-NotificationListItem-body .mp-NotificationListItem-content .mp-NotificationListItem-title {
    font-family: Roboto, sans-serif;
    font-family: var(--mp-font-base, "Roboto", sans-serif);
    font-style: normal;
    font-weight: 400;
    display: block;
    font-size: 16px;
    line-height: 22px;
    margin: 0;
    width: 100%;
}

.mp-Listing-compact-body .mp-Listing-compact-content .mp-Listing-compact-title--link.mp-NotificationListItem-title a,
.mp-Listing-compact-body .mp-Listing-compact-content .mp-Listing-compact-title.mp-Listing-compact-title--link a,
.mp-Listing-compact-body .mp-NotificationListItem-content .mp-Listing-compact-title--link.mp-NotificationListItem-title a,
.mp-Listing-compact-body .mp-NotificationListItem-content .mp-Listing-compact-title.mp-Listing-compact-title--link a,
.mp-NotificationListItem-body .mp-Listing-compact-content .mp-Listing-compact-title--link.mp-NotificationListItem-title a,
.mp-NotificationListItem-body .mp-Listing-compact-content .mp-Listing-compact-title.mp-Listing-compact-title--link a,
.mp-NotificationListItem-body .mp-NotificationListItem-content .mp-Listing-compact-title--link.mp-NotificationListItem-title a,
.mp-NotificationListItem-body .mp-NotificationListItem-content .mp-Listing-compact-title.mp-Listing-compact-title--link a {
    font-family: Roboto, sans-serif;
    font-family: var(--mp-font-base, "Roboto", sans-serif);
    font-style: normal;
    font-weight: 400;
    color: #116db4;
    color: var(--mp-color-link, #116db4);
    font-size: 14px;
    line-height: 20px;
    text-decoration: none;
}

.mp-Listing-compact-body .mp-Listing-compact-content,
.mp-Listing-compact-body .mp-NotificationListItem-content,
.mp-NotificationListItem-body .mp-Listing-compact-content,
.mp-NotificationListItem-body .mp-NotificationListItem-content {
    font-family: Roboto, sans-serif;
    font-family: var(--mp-font-base--light, "Roboto", sans-serif);
    font-style: normal;
    font-weight: 300;
    font-size: 14px;
    line-height: 20px;
    flex: 1 0 0;
}

.mp-Card,
.mp-Form-body,
.mp-Form-footer,
.mp-Listing,
.mp-Listing-card,
.mp-Listing-compact,
.mp-NotificationListItem-wrapper {
    background: #fff;
    box-shadow: 0 1px 2px 0 rgba(0, 0, 0, .14);
    color: #2d3c4d;
    overflow: hidden;
}

.FavoritesListItem-mobile-pricing {
    font-weight: 600;
}

.no_produts {
    color: #fcb800;
    text-align: center;
    font-weight: 600;
    margin-bottom: 15px;
}
.mp-Listing-compact-location{
    color: darkgray;
    font-size: 12px;
}
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
                    <label for="m1453792805" class="FavoritesListItem-mp-Listing-compact-selector"><input
                            type="checkbox" id="m1453792805">
                        <figure class="mp-Listing-compact-picture"><img class="FavoritesListItem-unshrinkable-thumb"
                                src="//i.ebayimg.com/00/s/MTAwMFg0NzQ=/z/kkAAAOSw56NdcVgC/$_14.JPG"
                                alt="Apple iPhone 8 8plus X Xs Xs MaxXR achterkant reparatie "></figure>
                    </label>
                    <div class="mp-Listing-compact-content">
                        <h4 class="mp-Listing-compact-title mp-Listing-compact-title--link"><a
                                href="/a/telecommunicatie/mobiele-telefoons-apple-iphone/m1596352461-iphone-x-met-hoesje.html?c=4dc4183dfac1254e7aa85845826d5acd&amp;previousPage=mympBuyer">{{$product -> name}}</a>
                        </h4>
                        <div>
                            <span class="mp-Listing-compact-location">المشاهدات</span>
                        </div>
                        <div class="FavoritesListItem-mobile-pricing">
                            <span class="FavoritesListItem-mobile-pricing">السعر: &nbsp;{{$product -> price}}</span>
                        </div>
                    </div>
                    <div class="FavoritesListItem-mp-Listing-compact-price mp-Listing-compact-price-content">
                        <a type="button" class="btn btn-success" style="color:#fff;">مباع</a>
                        <a type="button" class="btn btn-info" style="color:#fff;">تعديل</a>
                    </div>
                </div>
            </div>
            @endforeach
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