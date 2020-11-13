<div class="navigation--list">
    <div class="navigation__content">
        <a class="navigation__item ps-toggle--sidebar" href="#menu-mobile"><i class="icon-menu"></i><span> القائمة</span></a>
        <a class="navigation__item ps-toggle--sidebar" href="#navigation-mobile"><i class="icon-list4"></i><span> الاقسام</span></a>
        <a class="navigation__item " href="{{route('advertisement.index')}}" style="border-radius: 5px;background: #fcb800;padding: 5px 5px;color: black;" ><i class="icon-plus-circle" style="font-weight: 700;"></i><span style="font-weight: 700;"> أضف أعلانك </span></a>
        <a class="navigation__item ps-toggle--sidebar" href="#search-sidebar"><i class="icon-magnifier"></i><span> البحث</span></a>
        <a class="navigation__item ps-toggle--sidebar" href="#my-account"></a>

        <a class="navigation__item ps-toggle--sidebar" href="#my-account">
            @guest
                <svg width="2em" height="2em" viewBox="0 0 16 16" class="bi bi-door-open" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M1 15.5a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13a.5.5 0 0 1-.5-.5zM11.5 2H11V1h.5A1.5 1.5 0 0 1 13 2.5V15h-1V2.5a.5.5 0 0 0-.5-.5z"/>
                    <path fill-rule="evenodd" d="M10.828.122A.5.5 0 0 1 11 .5V15h-1V1.077l-6 .857V15H3V1.5a.5.5 0 0 1 .43-.495l7-1a.5.5 0 0 1 .398.117z"/>
                    <path d="M8 9c0 .552.224 1 .5 1s.5-.448.5-1-.224-1-.5-1-.5.448-.5 1z"/>
                </svg><span> الدخول</span>
            @else
            <i class="icon-user"></i><span> حسابي</span>
            @endguest
        </a>
    </div>
</div>