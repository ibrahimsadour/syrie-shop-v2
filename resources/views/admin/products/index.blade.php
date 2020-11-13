@extends('admin.layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> @lang('admin/index.products')</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">@lang('admin/create.Main')</a>
                                </li>
                                <li class="breadcrumb-item active">@lang('admin/index.products')
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- DOM - jQuery events table -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">@lang('admin/index.products')</h4>
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
                                    <div class="card-body card-dashboard">
                                        <table
                                            class="table display nowrap table-striped table-bordered scroll-horizontal">
                                            <thead class="">
                                            <tr>
                                                <th>@lang('admin/index.Name')</th>
                                                <th>@lang('admin/index.price')</th>
                                                <th>@lang('admin/create.Catgegory')</th>
                                                <th>@lang('admin/create.Vendors')</th>
                                                <th>@lang('admin/create.Brands')</th>
                                                <th>@lang('admin/create.Tags')</th>
                                                <th>@lang('admin/index.language')</th>
                                                <th>@lang('admin/index.Status')</th>
                                                <th>@lang('admin/index.sales status')</th>
                                                <th>@lang('admin/index.viewed')</th>
                                                <th>@lang('admin/index.description')</th>
                                                <th>@lang('admin/index.image')</th>
                                                <th>@lang('admin/index.Action')</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($products)
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{$product -> name}}</td>
                                                        <td>{{$product -> price}}</td>
                                                        <th>
                                                            @if($product->category_id != true) 
                                                            <b class="warning">@lang('admin/create.without section')
                                                            @else  
                                                            <b class="">{{$product -> categories->name}}</b>

                                                            @endif
                                                        </th>

                                                        <th>
                                                            @if($product->vendor_id != true) 
                                                            <b class="warning">@lang('admin/create.without section')
                                                            @else  
                                                            <b class="">{{$product -> vendors->name}}</b>
                                                            @endif
                                                        </th>

                                                        <th>
                                                            @if($product->brand_id != true) 
                                                            <b class="warning">@lang('admin/create.without section')
                                                            @else  
                                                            <b class="">{{$product -> brands->name}}</b>
                                                            @endif
                                                        </th>
                                                        <th>@lang('admin/create.Tags')</th>
                                                        <td>{{get_default_lang()}}</td>
                                                        <td>
                                                            @if($product -> getActive() === "active" || $product -> getActive() === "مفعل") 
                                                            <b class="success">{{$product -> getActive() }}
                                                            @else  
                                                            <b class="warning">{{$product -> getActive()}}</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($product -> getSold() === "active" || $product -> getSold() === "ليس مباع") 
                                                            <b class="success">{{$product -> getSold() }}
                                                            @else  
                                                            <b class="warning">{{$product -> getSold()}}</b>
                                                            @endif
                                                        </td>
                                                        <th>@lang('admin/index.viewed')</th>
                                                        <th>{{$product -> description}}</th>
                                                        <td> <img style="width: 150px; height: 100px;" src="{{$product -> 	photo}}"></td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.products.edit',$product -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">@lang('admin/index.Edit')</a>


                                                                <a href="{{route('admin.products.delete',$product -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">@lang('admin/index.Remove')</a>


                                                                    @if($product -> active == 0)
                                                                    <a href="{{route('admin.products.status',$product -> id)}}"
                                                                   class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">@lang('admin/index.Active')</a>
                                                                        @else
                                                                    <a href="{{route('admin.products.status',$product -> id)}}"
                                                                   class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                   @lang('admin/index.Deactivate')</a>
                                                                    @endif
                                                                


                                                            </div>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endisset


                                            </tbody>
                                        </table>
                                        <div class="justify-content-center d-flex">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
@endsection
