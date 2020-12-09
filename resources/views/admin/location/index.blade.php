@extends('admin.layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> @lang('admin/create.Main Catgegory')</h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">@lang('admin/create.Main')</a>
                                </li>
                                <li class="breadcrumb-item active">@lang('admin/create.Main Catgegory')
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
                                    <h4 class="card-title">@lang('admin/create.Main Catgegory')</h4>
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
                                                <th>الاسم بالرابط</th>
                                                <th>@lang('admin/index.Status')</th>
                                                <th>@lang('admin/index.Action')</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($locations)
                                                @foreach($locations as $location)
                                                    <tr>
                                                        <td>{{$location -> name}}</td>
                                                        <td>{{$location -> slug}}</td>
                                                        <td>
                                                            @if($location -> getActive() === "active" || $location -> getActive() === "مفعل") 
                                                            <b class="success">{{$location -> getActive() }}
                                                            @else  
                                                            <b class="warning">{{$location -> getActive()}}</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.location.edit',$location -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">@lang('admin/index.Edit')</a>


                                                                <a href="{{route('admin.location.delete',$location -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">@lang('admin/index.Remove')</a>


                                                                    @if($location -> active == 0)
                                                                    <a href="{{route('admin.location.status',$location -> id)}}"
                                                                   class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">@lang('admin/index.Active')</a>
                                                                        @else
                                                                    <a href="{{route('admin.location.status',$location -> id)}}"
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
