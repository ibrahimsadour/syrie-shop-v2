@include('front.pages.products.includes.header')
@section('title','إضافة إعلان الخطوة الثانية')

    <div class="app-content content">
        <div class="content-wrapper">

            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                @include('admin.includes.alerts.success')
                                @include('admin.includes.alerts.errors')
                                <div class="card-content collapse show">
                                    <div class="card-body">
                                    <form method="post" action="{{ route('admin.products.images.store') }}" enctype="multipart/form-data" class="dropzone"    id="dropzone">
                                    @csrf
                                        <div class="dz-message" style="">يمكنك تحميل اكثر من صوره هنا</div>                                    
                                    </form>  
                                        <form class="form"
                                              action="{{ route('products.create.step.two.post') }}"
                                              method="POST"
                                              enctype="multipart/form-data">
                                            @csrf

                                            <!-- <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i>صور الاعلان </h4>
                                                <div class="form-group">
                                                    <div id="dpz-multiple-files" class="dropzone dropzone-area">
                                                        <div class="dz-message" style="">يمكنك تحميل اكثر من صوره هنا</div>
                                                    </div>
                                                </div>
                                            </div> -->

                                                <h4 class="form-section"><i class="ft-home"></i> البيانات الاساسية للإعلان   </h4>

                                                    <div class="row">
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> العنوان
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    placeholder=""
                                                                    value="{{ $product->name ?? '' }}"
                                                                    name="name">
                                                                @error("name")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> @lang('admin/index.description') 
                                                                </label>
                                                                <textarea  name="description" id="description"
                                                                        class="form-control"
                                                                        placeholder="  "
                                                                >{{old('description')}}</textarea>

                                                                @error("description")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="exampleFormControlSelect1">السعر بالعملة: </label>
                                                                <select class="form-control" name="type_price">
                                                                    <option value="0">الليرة التركية</option>
                                                                    <option value="1" selected>الدولار الامريكي</option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1"> السعر
                                                                </label>
                                                                <input type="text"
                                                                    class="form-control"
                                                                    placeholder=""
                                                                    name="price">
                                                                @error("price")
                                                                <span class="text-danger">{{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    </div>

                                                <div class="row" >

                                                    @if($sub_categories && $sub_categories -> count() > 0)
                                                        <div class="col-md-6">
                                                            <div class="form-group">
                                                                <label for="projectinput1">القسم الفرعي</label>
                                                                <select name="sub_category_id" class="form-control" >
                                                                    <optgroup label=" أختر القسم الفرعي الخاص باعلانك">
                                                                            @foreach($sub_categories as $sub_category)
                                                                                <option value="{{$sub_category -> id}}">{{$sub_category -> name ?? ''}}</option>
                                                                            @endforeach
                                                                    </optgroup>
                                                                </select>
                                                                @error('categories.0')
                                                                <span class="text-danger"> {{$message}}</span>
                                                                @enderror
                                                            </div>
                                                        </div>
                                                    @endif

                                                    @if($product->category_id == 1)
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> الكيلو متر
                                                            </label>
                                                            <input type="text"
                                                                class="form-control"
                                                                placeholder=""
                                                                name="kilometer">
                                                            @error("kilometer")
                                                            <span class="text-danger">{{$message}}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                    @endif
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1">الموقع</label>
                                                            <select name="location_id" class="form-control" value="{{ $product->category_id ?? '' }}" >
                                                                <optgroup label="من فضلك أختر الموقع ">
                                                                    <option value="">الدانا</option>
                                                                    <option value="">سرمدا</option>
                                                                    <option value="">اطمة</option>
                                                                </optgroup>
                                                            </select>            
                                                        </div>
                                                    </div>
                                                </div>



                                            <div class="form-actions">

                                                <button type="submit" class="btn btn-secondary float-left">
                                                التالي
                                                </button>
                                                <a href="{{ route('products.create.step.one') }}" class="btn btn-danger float-right"style="margin-bottom:10px">تراجع</a>
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

@include('front.pages.products.includes.footer')
<meta name="_token" content="{{csrf_token()}}" />

<script type="text/javascript">
        Dropzone.options.dropzone =
         {
            maxFilesize: 10,
            renameFile: function(file) {
                var dt = new Date();
                var time = dt.getTime();
               return time+file.name;
            },
            acceptedFiles: ".jpeg,.jpg,.png,.gif",
            addRemoveLinks: true,
            timeout: 50000,
            removedfile: function(file) 
            {
                var name = file.upload.filename;
                $.ajax({
                    headers: {
                                'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                            },
                    type: 'POST',
                    url: '{{ url("user/products/image/delete") }}',
                    data: {filename: name},
                    success: function (data){
                        console.log("File has been successfully removed!!");
                    },
                    error: function(e) {
                        console.log(e);
                    }});
                    var fileRef;
                    return (fileRef = file.previewElement) != null ? 
                    fileRef.parentNode.removeChild(file.previewElement) : void 0;
            },
       
            success: function(file, response) 
            {
                console.log(response);
            },
            error: function(file, response)
            {
               return false;
            }
};
</script>

