<div class="ps-filter--sidebar">
    <div class="ps-filter__header">
        <h3>الفلترة</h3><a class="ps-btn--close ps-btn--no-boder" href="#"></a>
    </div>
    <div class="ps-filter__content">
        <aside class="widget widget_shop">
            <h4 class="widget-title">الأقسام</h4>
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
            <h4 class="widget-title">الماركة</h4>
            <form class="ps-form--widget-search" action="do_action" method="get">
                <input class="form-control" type="text" placeholder="">
                <button><i class="icon-magnifier"></i></button>
            </form>
            <div class="slimScrollDiv" style="position: relative; overflow: hidden; width: auto; height: 250px;"><figure class="ps-custom-scrollbar" data-height="250" style="overflow: hidden; width: auto; height: 250px;">
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
            </figure><div class="slimScrollBar" style="background: rgb(0, 0, 0); width: 6px; position: absolute; top: 0px; opacity: 0.4; display: block; border-radius: 7px; z-index: 99; right: 1px; height: 154.321px;"></div><div class="slimScrollRail" style="width: 6px; height: 100%; position: absolute; top: 0px; display: block; border-radius: 7px; background: rgb(51, 51, 51); opacity: 0.2; z-index: 90; right: 1px;"></div></div>
            <figure>
                <h4 class="widget-title">السعر</h4>
                <div class="ps-slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content" data-default-min="13" data-default-max="1300" data-max="1311" data-step="100" data-unit="$"><div class="ui-slider-range ui-corner-all ui-widget-header" style="left: 0%; width: 100%;"></div><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 0%;"></span><span tabindex="0" class="ui-slider-handle ui-corner-all ui-state-default" style="left: 100%;"></span></div>
                <p class="ps-slider__meta">Price:<span class="ps-slider__value ps-slider__min">$13</span>-<span class="ps-slider__value ps-slider__max">$1300</span></p>
            </figure>
            <figure>
                <h4 class="widget-title">السعر</h4>
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
            </figure>
            <figure class="sizes">
                <h4 class="widget-title">BY SIZE</h4><a href="#">L</a><a href="#">M</a><a href="#">S</a><a href="#">XL</a>
            </figure>
        </aside>
    </div>
</div>