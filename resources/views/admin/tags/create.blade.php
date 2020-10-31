@extends('admin.layouts.admin')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="">@lang('admin/create.Main') </a>
                                </li>
                                <li class="breadcrumb-item"><a href="{{route('admin.tags')}}"> @lang('admin/create.Tags') </a>
                                </li>
                                <li class="breadcrumb-item active">  @lang('admin/create.Add a Tags')</li>
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
                                    <h4 class="card-title" id="basic-layout-form"> @lang('admin/create.Add a Tags')</h4>
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
                                              action="{{route('admin.tags.store')}}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                                
                                            <div class="form-body">

                                                @if(get_languages() -> count() > 0)
                                                    @foreach(get_languages() as $index => $lang)
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1">  @lang('admin/index.Name') - {{__('admin/create.'.$lang -> abbr)}} </label>
                                                                    <input type="text" value="" id="name"
                                                                        class="form-control"
                                                                        placeholder="  "
                                                                        name="tag[{{$index}}][name]">
                                                                    @error("tag.$index.name")
                                                                    <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                            <div class="col-md-6">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> @lang('admin/index.Slug') - {{__('admin/create.'.$lang -> abbr)}} 
                                                                    </label>
                                                                    <input type="text" id="name"
                                                                            class="form-control"
                                                                            placeholder="  "
                                                                            value="{{old('slug')}}"
                                                                            name="tag[{{$index}}][slug]">
                                                                    @error("tag.$index.name")
                                                                    <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                            <div class="col-md-6 hidden">
                                                                <div class="form-group">
                                                                    <label for="projectinput1"> أختصار اللغة {{__('admin/create.'.$lang -> abbr)}}  </label>
                                                                    <input type="text" id="abbr"
                                                                        class="form-control"
                                                                        placeholder="  "
                                                                        value="{{$lang -> abbr}}"
                                                                        name="tag[{{$index}}][abbr]">

                                                                    @error("tag.$index.abbr")
                                                                    <span class="text-danger"> هذا الحقل مطلوب</span>
                                                                    @enderror
                                                                </div>
                                                            </div>


                                                        </div>
                                                        <div class="row">
                                                            <div class="col-md-6">
                                                                <div class="form-group mt-1">
                                                                    <input type="checkbox" value="1"
                                                                        name="tag[{{$index}}][active]"
                                                                        id="switcheryColor4"
                                                                        class="switchery" data-color="success"
                                                                        checked/>
                                                                    <label for="switcheryColor4"
                                                                        class="card-title ml-1">@lang('admin/index.Status') - {{__('admin/create.'.$lang -> abbr)}}  </label>

                                                                    @error("tag.$index.active")
                                                                    <span class="text-danger"> </span>
                                                                    @enderror
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endif
                                                </div>
                                            </div>


                                            <div class="form-actions" style="    margin: 0px 20px 20px 0px;">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> @lang('admin/create.Back')
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i> @lang('admin/create.Add')
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
