@extends('front.layouts.site')

@section('content')

<div id="content" class="l-page">
    <div class="box">
        <div class="form-group">
            <h3 class="row mr-2 ml-2">البيانات الاساسية للاعلان  </h3>
            @foreach($categories as $category)
            <p> قسم : {{$category->name}}</p>
            @endforeach
        </div>
        <form action="{{ route('products.create.step.two.post') }}"  enctype="multipart/form-data" method="POST">
            @csrf
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
                <label for="projectinput1">القسم الفرعي</label>
                <select name="category_id" class="select2 form-control" >
                    <optgroup label="من فضلك أختر القسم الفرعي ">
                        @if($sub_categories && $sub_categories -> count() > 0)
                            @foreach($sub_categories as $sub_category)
                                <option value="{{$sub_category -> id}}">{{$sub_category -> name}}</option>
                            @endforeach
                        @endif
                    </optgroup>
                </select>
                @error('categories.0')
                <span class="text-danger"> {{$message}}</span>
                @enderror
            </div>
            <div class="form-group">
                <label id="syi-categories-title" class="selection-title" for="radio-suggestion-manual">
                        <p>الصور:(المسموح 10 صور) </p>
                </label>
                <input type="file" class="form-control" id="file" value="{{ $product->photo ?? '' }}" name="photo"><span class="file-custom"></span>
            </div>

            <div class="form-group">
                <input  type="text" class="form-control" value="{{ $product->name ?? '' }}" name="name" placeholder="عنوان الأعلان">
            </div>


            <div class="form-group">
                <textarea  type="text" class="form-control" value="{{ $product->name ?? '' }}" name="name" placeholder="الوصف "></textarea>
            </div>

            <div class="form-group">
            <label for="projectinput1">الموقع</label>
                <select name="category_id" class="select2 form-control" value="{{ $product->category_id ?? '' }}" >
                    <optgroup label="من فضلك أختر الموقع ">
                        <option value="">الدانا</option>
                        <option value="">سرمدا</option>
                        <option value="">اطمة</option>
                    </optgroup>
                </select>            
            </div>
            <div class="form-group">
                <input  type="text" class="form-control" value="{{ $product->price ?? '' }}" name="price" placeholder="السعر ">
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-secondary" style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">التالي</button>
                <a href="{{ route('products.create.step.one') }}" class="btn btn-danger float-left"style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">السابق</a>
            </div>


        </form>

    </div>
</div>

@endsection