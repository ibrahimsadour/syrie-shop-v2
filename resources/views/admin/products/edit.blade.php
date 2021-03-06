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
                                              action="{{route('admin.products.update',$products -> id)}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <input name="id" value="{{$products -> id}}" type="hidden">

                                            <div class="form-group">
                                                <div class="text-center">
                                                    <img
                                                        src="{{$products -> photo}}"
                                                        class="rounded-circle  height-150" alt="صورة القسم  ">
                                                </div>
                                            </div>
                                            
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
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.Name') - {{__('admin/create.'.$products -> translation_lang)}}
                                                                        </label>
                                                                        <input type="text" id="name"
                                                                            class="form-control"
                                                                            placeholder=" @lang('admin/index.Name') "
                                                                            value="{{$products -> name}}"
                                                                            name="name">
                                                                        @error("name")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>

                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.Slug') - {{__('admin/create.'.$products -> translation_lang)}} 
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder="  @lang('admin/index.Slug')"
                                                                            value="{{$products -> slug}}"
                                                                            name="slug">
                                                                        @error("slug")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.price') - {{__('admin/create.'.$products -> translation_lang)}}
                                                                        </label>
                                                                        <input type="text"
                                                                            class="form-control"
                                                                            placeholder=""
                                                                            value="{{$products -> price}}"
                                                                            name="price">
                                                                        @error("price")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> @lang('admin/index.description') - {{__('admin/create.'.$products -> translation_lang)}}
                                                                        </label>
                                                                        <textarea  name="description" id="description"
                                                                                class="form-control"
                                                                                placeholder="  "
                                                                        >{{$products -> description}}</textarea>

                                                                        @error("description")
                                                                        <span class="text-danger">{{$message}}</span>
                                                                        @enderror
                                                                    </div>
                                                                </div>
                                                                <div class="col-md-6 hidden">
                                                                    <div class="form-group">
                                                                        <label for="projectinput1"> أختصار اللغة {{__('messages.'.$products -> translation_lang)}} </label>
                                                                        <input type="text" id="abbr"
                                                                            class="form-control"
                                                                            placeholder="  "
                                                                            value="{{$products -> translation_lang}}"
                                                                            name="product[{{$index}}][abbr]">

                                                                        @error("product.$index.abbr")
                                                                        <span class="text-danger"> هذا الحقل مطلوب</span>
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
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر القسم
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
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر المتجر
                                                            </label>
                                                            <select name="vendor_id" class="select2 form-control" >
                                                                <optgroup label="من فضلك أختر متجرك ">
                                                                    @if($vendors && $vendors -> count() > 0)
                                                                        @foreach($vendors as $vendor)
                                                                            <option value="{{$vendor -> id}}">{{$vendor -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر ألعلامات الدلالية
                                                            </label>
                                                            <select name="tags[]" class="select2 form-control" multiple>
                                                                <optgroup label=" اختر ألعلامات الدلالية ">
                                                                    @if($tags && $tags -> count() > 0)
                                                                        @foreach($tags as $tag)
                                                                            <option value="{{$tag -> id }}">{{$tag -> name}}</option>
                                                                        @endforeach
                                                                    @endif
                                                                </optgroup>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    
                                                    <div class="col-md-3">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اختر ألماركة
                                                            </label>
                                                            <select name="brand_id" class="select2 form-control">
                                                                <optgroup label="من فضلك أختر الماركة ">
                                                                    @if($brands && $brands -> count() > 0)
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
                                                    <i class="la la-check-square-o"></i> تحديث
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
