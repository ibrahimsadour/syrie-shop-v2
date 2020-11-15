@extends('front.layouts.site')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <form action="{{ route('products.create.step.three.post') }}" method="post" >
                {{ csrf_field() }}
                <div class="card">
                    <div class="card-header">مراجعة تفاصيل الأعلان</div>
   
                    <div class="card-body">
  
                            <table class="table">
                                <tr>
                                    <td>Product Name:</td>
                                    <td><strong>{{$product->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product Amount:</td>
                                    <td><strong>{{$product->price}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product status:</td>
                                    <td><strong>{{$product->name }}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product Description:</td>
                                    <td><strong>{{$product->name}}</strong></td>
                                </tr>
                                <tr>
                                    <td>Product Stock:</td>
                                    <td><strong>{{$product->name}}</strong></td>
                                </tr>
                            </table>
                    </div>
                    <div class="form-group" style="padding: 10px;">
                        <button type="submit" class="btn btn-success" style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">نشر الاعلان</button>
                        <a href="{{ route('products.create.step.two') }}" class="btn btn-danger float-left"style="padding: 0.475rem 2.75rem;font-weight: 900;font-size: 13px;">السابق</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

@endsection