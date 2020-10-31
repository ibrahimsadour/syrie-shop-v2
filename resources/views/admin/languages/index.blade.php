@extends('admin.layouts.admin')

@section('content')
    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <h3 class="content-header-title"> Languages </h3>
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Main</a>
                                </li>
                                <li class="breadcrumb-item active"> Languages
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
                                    <h4 class="card-title">All languages of the site</h4>
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
                                            class="table display nowrap table-striped table-bordered ">
                                            <thead>
                                            <tr>
                                                <th> Name</th>
                                                <th>Abbreviation</th>
                                                <th>Direction</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @isset($languages)
                                                @foreach($languages as $language)
                                                    <tr>
                                                        <td>{{$language -> name}}</td>
                                                        <td>{{$language -> abbr}}</td>
                                                        <td>{{$language -> direction}}</td>
                                                        <td>
                                                            @if($language -> getActive() === "active" || $language -> getActive() === "مفعل") 
                                                            <b class="success">{{$language -> getActive() }}
                                                            @else  
                                                            <b class="warning">{{$language -> getActive()}}</b>
                                                            @endif
                                                        </td>
                                                        <td>
                                                            <div class="btn-group" role="group"
                                                                 aria-label="Basic example">
                                                                <a href="{{route('admin.languages.edit',$language -> id)}}"
                                                                   class="btn btn-outline-primary btn-min-width box-shadow-3 mr-1 mb-1">Edit</a>


                                                                <a href="{{route('admin.languages.delete',$language -> id)}}"
                                                                   class="btn btn-outline-danger btn-min-width box-shadow-3 mr-1 mb-1">Remove</a>

                                                                @if($language -> active == 0)
                                                                    <a href="{{route('admin.languages.status',$language -> id)}}"
                                                                    class="btn btn-outline-success btn-min-width box-shadow-3 mr-1 mb-1">active</a>
                                                                            @else
                                                                    <a href="{{route('admin.languages.status',$language -> id)}}"
                                                                    class="btn btn-outline-warning btn-min-width box-shadow-3 mr-1 mb-1">
                                                                    Deactivate</a>
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
