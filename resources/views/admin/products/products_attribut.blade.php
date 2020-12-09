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
                                                <th>الكيلو متر</th>
                                                <th>العمر</th>
                                                <th>اللون</th>
                                                <th>القياس</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                @isset($products)
                                                    @foreach($products as $product)
                                                        @if(App\Models\ProductAttribut::count() > 0)
                                                            @if($product->product_attribut != NULL)
                                                            <tr>
                                                                <td>{{$product->id}}</td>
                                                                <td>{{$product->product_attribut->kilometers}}</td>
                                                                <td>{{$product->product_attribut->age}}</td>
                                                                <td><input type="color" disabled  value="{{$product->product_attribut->color}}"></td>
                                                                <td>{{$product->product_attribut->size}}</td>
                                                            </tr>
                                                            @endif
                                                        @endif
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
