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
                                <li class="breadcrumb-item active">@lang('admin/index.products') - المعلومات الاساسية
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
                                                <th>رقم المنتج</th>
                                                <th>@lang('admin/index.Name')</th>
                                                <th>المدينة</th>
                                                <th>@lang('admin/index.description')</th>
                                                <th>@lang('admin/index.price')</th>
                                                <th>@lang('admin/index.Status')</th>
                                                <th>@lang('admin/index.sales status')</th>
                                                <th>@lang('admin/index.viewed')</th>
                                                <th>تاريخ النشر</th>
                                                <th>@lang('admin/index.image')</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($products)
                                                @foreach($products as $product)
                                                    <tr>
                                                        <td>{{$product->id}}</td>
                                                        <td>{{$product->product_info->name}}</td>
                                                        <td> 
                                                            @php
                                                                $locations = App\Models\Location::where('id',$product->product_info->location_id)->get();
                                                                foreach($locations as $location){
                                                                    echo $location->name;
                                                                }
                                                            @endphp
                                                        </td>
                                                        <td>{{$product->product_info->description}}</td>
                                                        <td> {{$product->product_price->price}}
                                                            @if($product->product_price->type_price != 0)
                                                            <p>دولار امريكي</p>
                                                            @else
                                                            <p>ليرة تركي </p>
                                                            
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($product -> getActive() === "active" || $product -> getActive() === "مفعل") 
                                                            <b class="success">{{$product -> getActive() }}
                                                            @else  
                                                            <b class="warning">{{$product -> getActive()}}</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            @if($product -> getSold() === "not slod" || $product -> getSold() === "متاح") 
                                                            <b class="success">{{$product -> getSold() }}
                                                            @else  
                                                            <b class="warning">{{$product -> getSold()}}</b>
                                                            @endif
                                                        </td>
                                                        <td>{{$product->product_status->viewed}}</td>
                                                        <td>{{$product->created_at->diffForHumans()}}</td>
                                                        <td>
                                                            @foreach($product->images as $image)
                                                                @if ($loop->first)
                                                                    <img width='50' height='50' src="{{Request::root()}}/assets/{{$image->photo}}"> 
                                                                @endif
                                                            @endforeach
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
