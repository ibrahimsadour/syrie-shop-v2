@extends('front.layouts.site')

@section('content')

<div id="content" class="l-page">
    <div class="category-selection-container box">
        <div class="form-group">
            <h3 class="row mr-2 ml-2">ماذا تريد ان تبيع ؟</h3>
        </div>
        <form action="/user/advertisement/create-step1" method="post">
            {{ csrf_field() }}

            <div class="form-group">
                <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                        <span> أدخل عنوانا:</span>
                </label>
                <input  type="text" class="form-control" value="" name="name">
            </div>

            <div id="syi-categories-wrap" class="form-group">
                <div class="syi-categories-select" data-event="list-suggestions">
                    <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                        <span> اختر القسم المناسب:</span>
                    </label>
                    <select name="category_id" class="select2 form-control" >
                        <optgroup label="من فضلك أختر القسم ">
                            @if($categories && $categories -> count() > 0)
                                @foreach($categories as $category)
                                    <option value="{{$category -> id}}">{{$category -> name}}</option>
                                @endforeach
                            @endif
                        </optgroup>
                    </select>
                </div>
            </div>
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form-group">
                <button  type="submit" class="ps-btn ps-btn--fullwidth"> اضافة باقي المعلومات </button>
            </div>
        </form>

    </div>
</div>

@endsection