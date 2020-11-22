<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <meta charset="utf-8">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="format-detection" content="telephone=no">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="author" content="">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{asset('assets/front/css/style.css')}}">
</head>

<body>
    <div class="ps-page--comming-soon">
        <div class="container">
            <div class="ps-page__header"><a class="ps-logo" href="{{route('site.index')}}"><img src="{{asset('assets/front/img/coming-soon-logo.png')}}" alt=""></a>
                <h1 style="text-align: center;"> ترقبوا افتتاح الموقع قريبا</h1>
                <p style="text-align: center;"> الموقع قيد الإنشاء و التطوير</a>
            </div>
            <div class="ps-page__content"><img src="{{asset('assets/front/img/coming-soon.jpg')}}" alt="">
                <figure>
                    <figcaption>متجرنا سيتم إطلاقه في:</figcaption>
                    <ul class="ps-countdown" data-time="July 21, 2020 15:37:25" style="text-align: center;">
                        <li><span class="days"></span>
                            <p>يوم</p>
                        </li>
                        <li><span class="hours"></span>
                            <p>ساعة</p>
                        </li>
                        <li><span class="minutes"></span>
                            <p>دقيقة</p>
                        </li>
                        <li><span class="seconds"></span>
                            <p>ثانية</p>
                        </li>
                    </ul>
                </figure>
            </div>
            <div class="ps-page__footer" style="">
                <ul class="ps-list--social" style="text-align: center;">
                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
        </div>
    </div>
</body>

</html>
