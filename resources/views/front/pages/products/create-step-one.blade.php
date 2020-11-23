@extends('front.layouts.site')
<meta name="csrf-token" content="{{ csrf_token() }}">
@section('title','إضافة إعلان الخطوة الاولى')

@section('content')

<div id="content" class="l-page">
    <div class="category-selection-container box">
        <div class="form-group">
            <h3 class="row mr-2 ml-2"> أضافة أعلان جديد</h3>
        </div>
        <form action="{{ route('products.create.step.one.post') }}" method="post">
            @csrf

            <div class="form-group">
                <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                        <span> عنوان الأعلان</span>
                </label>
                <input  type="text" class="form-control" value="{{ $product->name ?? '' }}" name="name">
                @error("name")
                <span class="text-danger">{{$message}}</span>
                @enderror
            </div>

            <div id="syi-categories-wrap" class="form-group">
                <div class="syi-categories-select" data-event="list-suggestions" id="categories">
                    <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                        <span> اختر القسم المناسب:</span>
                    </label>
                    <select name="category_id" class="select2 form-control" value="{{ $product->category_id ?? '' }}" >
                        <optgroup label="من فضلك أختر القسم ">
                            @if($categories && $categories -> count() > 0)
                                @foreach($categories as $category)
                                    <option value="{{$category -> id}}">{{$category -> name}}</option>
                                @endforeach
                            @endif
                        </optgroup>
                    </select>
                    @error("category_id")
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>

            </div>

            <div class="form-group">
                <button  type="submit" class="ps-btn ps-btn--fullwidth"> اضافة باقي المعلومات </button>
            </div>
        </form>

    </div>

</div>
@endsection
  

