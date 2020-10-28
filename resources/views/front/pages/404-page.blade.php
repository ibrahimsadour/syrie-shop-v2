@extends('front.layouts.site')

@section('content')
<div class="ps-page--404">
    <div class="container">
        <div class="ps-section__content"><img src="{{asset('assets/front/img/404.jpg')}}" alt="">
            <h3 style="text-align: center;">أوه! الصفحة غير موجودة</h3>
            <p style="text-align: center;">يبدو أننا لا نستطيع العثور على ما تبحث عنه. ربما يمكن أن يساعد البحث أو العودة إليه<a href="{{route('site.index')}}"> الصفحة الرئيسية</a></p>
            <form class="ps-form--widget-search" action="do_action" method="get">
                <input class="form-control" type="text" placeholder="بحث...">
                <button><i class="icon-magnifier"></i></button>
            </form>
        </div>
    </div>
</div>
@endsection