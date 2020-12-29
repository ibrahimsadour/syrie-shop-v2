@extends('front.layouts.site')
@section('title','إضافة إعلان الخطوة الثالثة')
@section('content')
<div class="container" style="margin-top: 5%;margin-bottom: 5%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header"> <span>مراجعة تفاصيل الأعلان قبل النشر</span></div>
   
                    <div class="card-body">
  
                        <table class="table">
                            <tr>
                                <td>عنوان الاعلان</td>
                                <td><strong>{{ request()->get('name')  ?? ''}}</strong></td>
                            </tr>
                            <tr>
                                <td>السعر:</td>
                                <td><strong>{{$price ?? ''}}
                                    @if($type_price != 1)
                                    <i class="fa fa-turkish-lira"></i> ليرة تركية</h4>
                                    @else 
                                    <i class="fa fa-dollar"></i> دولار أمريكي</h4>
                                    @endif
                                </strong></td>
                            </tr>
                            <tr>
                                <td>الوصف:</td>
                                <td><strong>{{ request()->get('description')  ?? ''}}</strong></td>
                            </tr>
                            @if($categories_name != false)
                                <tr>
                                    <td> القسم:</td>
                                    <td><strong>{{$categories_name ?? ''}}</strong></td>
                                </tr>
                            @endif
                            @if($location_name != false)
                                <tr>
                                    <td> الموقع:</td>
                                    <td><strong>{{$location_name ?? ''}}</strong></td>
                                </tr>
                            @endif
                            @if($kilometer != false)
                                <tr>
                                    <td>الكيلو متر:</td>
                                    <td><strong>{{$kilometer ?? ''}}</strong></td>
                                </tr>
                            @endif
                            <tr>
                                <td> صور الاعلان:</td>

                                <?php
                                if($filename != false){
                                    foreach($filename as $image){
                                        $slice = Str::between($image, '"', '"');
                                        $remove_slash=  Str::replaceArray('\/', ['/'], $slice);
                                        $photo=  Str::replaceArray('\/', ['/'], $remove_slash);
                                        echo"<td><strong><img src=";?>{{Request::root()}}<?php echo "/assets/$photo></strong></td>";
                                    }
                                }else{
                                    echo"<td><strong>لم تقم باضافة صور لاعلانك</strong></td>";

                                }

                                 ?>
                            </tr>
                        </table>
  
                    </div>
                    <div class="form-group" style="padding: 10px;">
                        <button type="submit" class="btn btn-success" style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">نشر الاعلان</button>
                        <a href="{{ route('products.create.step.two') }}" class="btn btn-danger float-left"style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">تراجع</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection