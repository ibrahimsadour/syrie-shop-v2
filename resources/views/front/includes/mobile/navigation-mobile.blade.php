<div class="ps-panel--sidebar" id="navigation-mobile">
    <div class="ps-panel__header">
        <h3>الاقسام الرئيسية</h3>
    </div>
    <div class="ps-panel__content">
        <ul class="menu--mobile">
            <?php
                $categories = App\Models\MainCategory::with('subCategories')->get();
                if($categories && $categories -> count() > 0){
                    foreach($categories as $category){
                        echo "<li class='current-menu-item menu-item-has-children has-mega-menu'>";?>
                        <a href="{{route('site.getProductCategory',[$category->id,$category-> slug])}}">{!!$category->icon!!} {{$category->name}}</a>
                    
                        <?php if($category->subCategories && $category->subCategories->count() > 0  ){
                            echo "<span class='sub-toggle'></span>
                            <div class='mega-menu'>
                                <ul class='mega-menu__column'>";
                                    foreach($category->subCategories as $subCategory){
                                        echo "<li  class='current-menu-item has-mega-menu' >";?>
                                        <a href="{{route('site.getProductSubCategory',[$subCategory->id,$subCategory-> slug])}}">{{$subCategory->name }}</a>
                                        <?php echo "</li>";
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