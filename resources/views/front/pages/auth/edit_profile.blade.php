@extends('front.layouts.site')
@section('title','تعديل ملفي الشخصي  ')

@section('content')
<div class="ps-page--my-account">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية </a></li>
                <li>تعديل الملف الشخصي</li>
            </ul>
        </div>
    </div>
    
    <div id="content" class="l-page">
        <div class="category-selection-container box">
            @include('admin.includes.alerts.success')
            @include('admin.includes.alerts.errors')
            <form action="{{route('user.updateProfile',$users->id)}}" method="post">
                @csrf
                <input name="id" value="{{$users->id}}" type="hidden">

                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                                    <span> الاسم :</span>
                            </label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{$users->name}}" required>
                            @error('name')
                                <span class="text-danger">{{$message}}</span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                                    <span> رقم الهاتف :</span>
                            </label>
                            <input type="text" class="form-control @error('mobile') is-invalid @enderror"  name="mobile"  value="{{$users->mobile}}" required >
                            @error('mobile')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                            <span> الايميل :</span>
                    </label>
                    <input type="email" class="form-control"  name="email" value="{{$users-> email}}" required readonly>
                </div>


                <div class="form-group" style="padding: 10px;">
                    <button type="submit" class="btn btn-success" style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">تعديل المعلومات</button>
                    <button type="button" class="btn btn-danger float-left" onclick="history.back();" style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">تراجع </button>
                    
                </div>
            </form>

        </div>
    </div>
</div>

@endsection