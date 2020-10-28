@extends('front.layouts.site')

@section('content')

<div class="page-header page-header-page">
    <div class="page-breadcrumbs">
        <div class="container">
            <ul class="breadcrumbs">
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <a class="home" href="../{{route('site.index')}}" itemprop="item"><span itemprop="name">الرئيسية
                        </span></a>
                </li><span class="sep">/</span>
                <li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                    <span itemprop="item"><span itemprop="name">قائمة الرغبات</span></span>
                </li>
            </ul>
        </div>
    </div>
    <h1 class="entry-title">قائمة الرغبات</h1>
</div>

<!-- Begin  empty white space 30px -->
@include('front.home-includes.empty-space-30px')
<!-- End white space -->

@endsection