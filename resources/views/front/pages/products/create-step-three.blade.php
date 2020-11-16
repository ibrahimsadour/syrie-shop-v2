@extends('front.layouts.site')
@section('content')
<div class="container" style="margin-top: 5%;margin-bottom: 5%;">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header"> مراجعة تفاصيل الأعلان قبل النشر</div>
   
                    <div class="card-body">
  
                        <table class="table">
                            <tr>
                                <td>عنوان الاعلان</td>
                                <td><strong>{{$product->name}}</strong></td>
                            </tr>
                            <tr>
                                <td>السعر:</td>
                                <td><strong>{{$product->price}}</strong></td>
                            </tr>
                            <tr>
                                <td>الوصف:</td>
                                <td><strong>{{$product->description }}</strong></td>
                            </tr>
                            @if($categories_name != false)
                                <tr>
                                    <td> القسم:</td>
                                    <td><strong>{{$categories_name}}</strong></td>
                                </tr>
                            @endif
                            @if($kilometer != false)
                                <tr>
                                    <td>الكيلو متر:</td>
                                    <td><strong>{{$kilometer}}</strong></td>
                                </tr>
                            @endif
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