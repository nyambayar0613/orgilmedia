@extends('admin.layouts.master')
@section('title', 'Бүтээгдхүүн нэмэх')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="productAddForm" id="productAddForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row m-b">
                            <div class="col-sm-3">
                                <label class="md-switch">
                                    <input type="checkbox" name="product_isactive" checked>
                                    <i class="blue"></i>
                                    Идэвхтэй эсэх
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product_name">Гарчиг</label>
                            <input type="text" class="form-control parsley-error" name="product_name" id="product_name" required >
                        </div>

                        <div class="form-group">
                            <label>Гарчиг /Англи/</label>
                            <input type="text" class="form-control parsley-error" name="product_name_en" required >
                        </div>

                        <div class="form-group">
                            <label>Үнэ</label>
                            <input type="text" class="form-control parsley-error" name="product_price" required >
                        </div>

                        <div class="row m-b">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Зураг</label>
                                    <input type="file" class="form-control" name="product_image" >
                                </div>
                                {{--<img src="/uploaded/thumbnail/{{ $product->product_image }}" class=" img-thumbnail" width="100"  alt="">--}}
                            </div>
                        </div>

                        <div class="row m-b">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Нэмэлт Зураг</label>
                                    <input type="file" class="form-control" name="product_image_optional[]" multiple >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Тайлбар</label>
                            <textarea class="ckeditor" name="product_description"></textarea>
                        </div>

                        <div class="  ">
                            <a href="{{ route('admin.product.list') }}" class="btn  btn-secondary">Болих</a>
                            <button type="submit" class="btn info" id="f_submit">Нэмэх</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        $().ready(function() {
            $('#productAddForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    product_name: {
                        required: true
                    },
                    product_name_en: {
                        required: true
                    },
                    product_price: {
                        required: true
                    }
                },
                messages: {
                    product_name: "Барааны нэр оруулна уу",
                    product_name_en: "Барааны англи нэр оруулна уу",
                    product_price: "Барааны үнэ оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.product.insert') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            })
        })
    </script>
@endsection
