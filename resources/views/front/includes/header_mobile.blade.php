
<header class="header header--mobile" data-sticky="true">
        <div class="header__top">
            <div class="header__left">
                <p>مرحبًا بكم في متجر صدور للتسوق عبر الإنترنت!</p>
            </div>
            <div class="header__right">
                <ul class="navigation__extra">
                    <li><a href="#">قائمة المتاجر</a></li>
                    <li><a href="#"><i class="icon-plus-circle" ></i> أضافة أعلان</a></li>
                    <li>
                        <div class="ps-dropdown"><a href="#">(ليرة تركي) - TRY</a>
                            <ul class="ps-dropdown-menu">
                                <li><a href="#"> (دولارأمريكي) - USA</a></li>
                                <li><a href="#">(ليرة تركي) - TRY</a></li>
                            </ul>
                        </div>
                    </li>
                    <li>
                        <div class=" language"><a href="{{route('site.about-us')}}"><img src="{{asset('assets/front/img/flag/en.png')}}" alt=""> معلومات عنا</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navigation--mobile">
            <div class="navigation__left"><a class="ps-logo" href="{{route('site.index')}}"><img style="width: 60%;" src="{{asset('assets/front/img/logo_light.webp')}}" alt=""></a></div>
            <div class="navigation__right">
                <div class="header__actions">
                    <div class="ps-cart--mini"><a class="header__extra" href="{{route('site.wish-list')}}"><i class="icon-heart"></i><span><i>0</i></span></a>
                    </div>
                    @guest
                        <div class="ps-block--user-header">
                            <a class="ps-block__left"href="{{route('user.login')}}" >
                                <i class="icon-user-plus"></i>
                            </a>
                        </div>    
                    @else
                    <div class="ps-block--user-header">

                        <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="font-size: 85%;font-weight: 700; background: #fcb800;">
                            مرحبا <span style="font-weight: 700;">{{ Auth::user()->name }} <span>
                            <span class="avatar avatar-online">                         
                                <img style="height: 35px; border-radius: 50%;" src="http://localhost:8000/assets/admin/images/logo/ibo.jpeg" alt="avatar">  
                            </span>
                        </button>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('user.editProfile')}}">تعديل ملفي الشخصي</a>
                            <a class="dropdown-item" href="{{route('user.myProducts')}}">إعلاناتي</a>
                            <a class="dropdown-item" href="{{ route('user.logout') }}">تسجيل الخروج</a>
                            <!-- <div class="dropdown-divider"></div> 
                            <a class="dropdown-item" href="#">Separated link</a>  -->
                        </div>
                    </div>
                    
                    @endguest
                </div>
            </div>
        </div>
        <div class="ps-search--mobile">
            <form class="ps-form--search-mobile" action="{{route('site.index')}}" method="get">
                <div class="form-group--nest">

                    <input class="form-control" type="text" placeholder="أنا أبحث عن">
                    <button><i class="icon-magnifier"></i></button>
                </div>
                <div class="choose-items" style="display: none;">
                    <div class="form-group--icon" style="background-color: white;"><i class="icon-chevron-down"></i>
                        <select class="form-control">
                            <option value="0" selected="selected">كل الأقسام</option>
                            <?php
                            $categories = App\Models\MainCategory::get();
                            if($categories && $categories -> count() > 0){
                                foreach($categories as $category){
                                    echo "<option value='$category->id' > $category->name</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group--icon" style="background-color: white;"><i class="icon-chevron-down"></i>
                        <select class="form-control" >
                            <option value="0" selected="selected" >كل المناطق</option>
                            <?php
                            $locations = App\Models\Location::get();
                            if($locations && $locations -> count() > 0){
                                foreach($locations as $location){
                                    echo "<option value='$location->id' > $location->name</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                <div>
            </form>
        </div>
    </header>
