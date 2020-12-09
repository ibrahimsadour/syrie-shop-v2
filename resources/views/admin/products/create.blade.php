@extends('admin.layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="">
                                        المنتجات </a>
                                </li>
                                <li class="breadcrumb-item active"> أضافه منتج
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> أضافة منتج جديد </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        <form class="form"
                                              action="{{route('admin.products.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <div class="form-group">
                                                <label> Seactin image </label>
                                                <label id="projectinput7" class="file center-block">
                                                    <input type="file" id="file" name="photo">
                                                    <span class="file-custom"></span>
                                                </label>
                                                @error('photo')
                                                <span class="text-danger">{{$message}}</span>
                                                @enderror
                                            </div>

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> البيانات الاساسية للمنتج   </h4>
                                                @if(get_languages() -> count() > 0 )
                                                    @foreach(get_languages() as $index => $lang)
                                                        @if($lang -> abbr === 'ar')
                                                            <div class="row">
                                                                <!-- name -->
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.Name') - {{__('admin/create.'.$lang -> abbr)}}
                                                                        </label>
                                                                        <input type="text" id="name"
                                                                            class="form-control"
                                                                            placeholder=" @lang('admin/index.Name') "
                                                                            value="{{old('name')}}"
                                                                            name="name">
                                                                        @error("name")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- slug -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.Slug') - {{__('admin/create.'.$lang -> abbr)}} 
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder="  @lang('admin/index.Slug')"
                                                                            value="{{old('slug')}}"
                                                                            name="slug">
                                                                        @error("slug")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- Type price -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="exampleFormControlSelect1">السعر بالعملة: </label>
                                                                        <select class="form-control" name="type_price" value="{{old('type_price')}}">
                                                                            <option value="0">الليرة التركية</option>
                                                                            <option value="1" selected>الدولار الامريكي</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <!-- price -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.price') - {{__('admin/create.'.$lang -> abbr)}}
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder=""
                                                                            value="{{old('price')}}"
                                                                            name="price">
                                                                        @error("price")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- description -->
                                                                <div class="col-md-3">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.description') - {{__('admin/create.'.$lang -> abbr)}}
                                                                        </label>
                                                                        <textarea  name="description" id="description"
                                                                                class="form-control"
                                                                                placeholder="  "
                                                                        >{{old('description')}}</textarea>

                                                                        @error("description")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <!-- abbr -->
                                                                <div class="col-md-3 hidden">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> أختصار اللغة {{__('messages.'.$lang -> abbr)}} </label>
                                                                        <input type="text" id="abbr"
                                                                            class="form-control"
                                                                            placeholder="  "
                                                                            value="{{$lang -> abbr}}"
                                                                            name="product[{{$index}}][abbr]">

                                                                        @error("product.$index.abbr")
                                                                        <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- kilometers -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1">الكيلو متر
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder="الكيلو متر"
                                                                            value="{{old('kilometers')}}"
                                                                            name="kilometers">
                                                                        @error("kilometers")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- age -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1">العمر
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder="العمر"
                                                                            value="{{old('age')}}"
                                                                            name="age">
                                                                        @error("age")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- color -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> اللون
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder="اللون "
                                                                            value="{{old('color')}}"
                                                                            name="color">
                                                                        @error("color")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <!-- size -->
                                                                <div class="col-md-2">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> القياس
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder="القياس"
                                                                            value="{{old('size')}}"
                                                                            name="size">
                                                                        @error("color")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @else
                                                        <h3 style="color:red;">غير متوفر الأن</h3>
                                                        
                                                        @endif
                                                    @endforeach
                                                @endif
                                                
                                                <div class="row" >
                                                    <!-- user_id -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر المستخدم
                                                            </label>
                                                            <select name="user_id" class="select2 form-control" value="{{old('user_id')}}" >
                                                                <optgroup label="من فضلك أختر المستخدم ">
                                                                    @if($users && $users -> count() > 0)
                                                                        @foreach($users as $user)
                                                                            <option value="{{$user -> id}}">{{$user -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('categories.0')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- category_id -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر القسم
                                                            </label>
                                                            <select name="category_id" class="select2 form-control" value="{{old('category_id')}}" >
                                                                <optgroup label="من فضلك أختر القسم ">
                                                                    @if($categories && $categories -> count() > 0)
                                                                        @foreach($categories as $category)
                                                                            <option value="{{$category -> id}}">{{$category -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('categories.0')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- sub_category_id  -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> ااختر القسم الفرعي
                                                            </label>
                                                            <select name="sub_category_id" class="select2 form-control" value="{{old('sub_category_id')}}" >
                                                                <optgroup label=" من فضلك أختر القسم الفرعي">
                                                                    @if($sub_categories && $sub_categories -> count() > 0)
                                                                    <option value="0">لايوجد</option>
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
                                                    </div>
                                                    <!-- location_id -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر المدينة
                                                            </label>
                                                            <select name="location_id" class="select2 form-control" value="{{old('location_id')}}" >
                                                                <optgroup label="من فضلك أختر مدينتك ">
                                                                    @if($locations && $locations -> count() > 0)
                                                                        @foreach($locations as $location)
                                                                            <option value="{{$location -> id}}">{{$location -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('categories.0')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- vendor_id -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر المتجر
                                                            </label>
                                                            <select name="vendor_id" class="select2 form-control" value="{{old('vendor_id')}}" >
                                                                <optgroup label="من فضلك أختر متجرك ">
                                                                    @if($vendors && $vendors -> count() > 0)
                                                                        <option value="0">لايوجد</option>
                                                                        @foreach($vendors as $vendor)
                                                                            <option value="{{$vendor -> id}}">{{$vendor -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('categories.0')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- tags -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر ألعلامات الدلالية
                                                            </label>
                                                            <select name="tags[]" class="select2 form-control" multiple value="{{old('tags[]')}}">
                                                                <optgroup label=" اختر ألعلامات الدلالية ">
                                                                    @if($tags && $tags -> count() > 0)
                                                                        <option value="0">لايوجد</option>
                                                                        @foreach($tags as $tag)
                                                                            <option value="{{$tag -> id }}">{{$tag -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('tags')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    <!-- brand_id -->
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر ألماركة
                                                            </label>
                                                            <select name="brand_id" class="select2 form-control" value="{{old('brand_id')}}">
                                                                <optgroup label="من فضلك أختر الماركة ">
                                                                    @if($brands && $brands -> count() > 0)
                                                                        <option value="0">لايوجد</option>
                                                                        @foreach($brands as $brand)
                                                                            <option value="{{$brand -> id }}">{{$brand -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                            @error('brand_id')
                                                            <span class="text-danger"> {{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group mt-1">
                                                            <input type="checkbox" value="1"
                                                                   name="active"
                                                                   id="switcheryColor4"
                                                                   class="switchery" data-color="success"
                                                                   checked/>
                                                            <label for="switcheryColor4"
                                                                   class="card-title ml-1">الحالة </label>

                                                            @error("active")
                                                            <span class="text-danger">{{$message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>


                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> أضافة
                                                </button>
                                            </div>
                                        </form>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>

@stop

@section('script')

    <script>
        $('input:radio[name="type"]').change(
            function(){
                if (this.checked && this.value == '2') {  // 1 if main cat - 2 if sub cat
                    $('#cats_list').removeClass('hidden');

                }else{
                    $('#cats_list').addClass('hidden');
                }
            });
    </script>
    @stop
