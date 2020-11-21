@extends('front.layouts.site')

@section('content')
<div class="ps-page--my-account">
    <div class="ps-breadcrumb">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="{{route('site.index')}}">الرئيسية </a></li>
                <li>تعديل كلمة المرور </li>
            </ul>
        </div>
    </div>
    
    <div id="content" class="l-page">
        <div class="category-selection-container box" style="padding: 20px; ">
            @include('admin.includes.alerts.success')
            @include('admin.includes.alerts.errors')
            <form action="{{route('user.updatePassword',$users->id)}}" method="post">
                @csrf
                <input name="id" value="{{$users->id}}" type="hidden">

                <div class="form-group{{ $errors->has('current-password') ? ' has-error' : '' }}">
                    <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                            <span> كلمة السر الحالية :</span>
                    </label>
                    <input id="current-password" type="password" class="form-control" name="current-password" required  placeholder="ادخل كلمة السر الحالية" > 
                    @if ($errors->has('current-password'))
                        <span class="alert alert-danger">
                            <strong>{{ $errors->first('current-password') }}</strong>
                        </span>
                    @endif
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group{{ $errors->has('new-password') ? ' has-error' : '' }}">
                            <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                                    <span> كلمة السر الجديدة  :</span>
                            </label>
                            <input  id="new-password" type="password" class="form-control" name="new-password" required  placeholder="ادخل كلمة السر الجديد" > 
                            @if ($errors->has('new-password'))
                                <span class="alert alert-danger">
                                    <strong>{{ $errors->first('new-password') }}</strong>
                                </span>
                            @endif
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                                    <span> تأكيد كلمة السر الجديدة  :</span>
                            </label>
                            <input  id="new-password-confirm" type="password" class="form-control" name="new-password_confirmation" required  placeholder="ادخل كلمة السر الجديد للتاكيد"  > 
                        </div>
                    </div>
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