@inject('imageHelper', 'App\Helper\ImageHelper')
@extends('admin.layouts.master')
@section('title', $product->product_name)

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="productEditForm" id="productEditForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $product->id }}">

                    <div class="box-body">
                        <div class="row m-b">
                            <div class="col-sm-3">
                                <label class="md-switch">
                                    <input type="checkbox" name="is_active"  @if($product->is_active == 1) checked @endif >
                                    <i class="blue"></i>
                                    Идэвхтэй эсэх
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product_name">Гарчиг</label>
                            <input type="text" class="form-control parsley-error" name="product_name" id="product_name" value="{{ $product->product_name }}" required >
                        </div>

                        <div class="form-group">
                            <label>Гарчиг /Англи/</label>
                            <input type="text" class="form-control parsley-error" name="product_name_en" value="{{ $product->product_name_en }}" required >
                        </div>

                        <div class="form-group">
                            <label>Үнэ</label>
                            <input type="text" class="form-control parsley-error" name="product_price" value="{{ $product->product_price }}" required >
                        </div>

                        <div class="row m-b">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Зураг</label>
                                    <input type="file" class="form-control" name="product_image" >
                                </div>
                                <img src="/uploaded/thumbnail/{{ $product->product_image }}" class=" img-thumbnail" width="100"  alt="">
                            </div>
                        </div>

                        <div class="row m-b">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Нэмэлт Зураг</label>
                                    <input type="file" class="form-control" name="product_image_optional[]" multiple >
                                </div>
                                @foreach($attach_files as $attach_file)
                                    <div class="show-image">
                                        <img src="/uploaded/thumbnail/{{ $attach_file->file }}" class=" img-thumbnail" width="100"  alt="">
                                        <a class="delete" data-fileid="{{ $attach_file->id }}"><i class="fa fa-trash-o"></i></a>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Тайлбар</label>
                            <textarea class="ckeditor" name="product_description">{!! $product->product_description !!}</textarea>
                        </div>

                        <div class="  ">
                            <a href="{{ route('admin.product.list') }}" class="btn  btn-secondary">Болих</a>
                            <button type="submit" class="btn info" id="f_submit">Засах</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection

@section('script')

    <script>
        $('.delete').click(function() {
            $.LoadingOverlay("show");
            axios.post("{{ route('admin.remove.file') }}", {
                fileId: $(this).data('fileid')
            }).then(function (response) {
                if (response.data) {
                    alert("Амжилттай устгагдлаа.");
                    window.location.reload();
                }
            });
        });

        $().ready(function() {
            $('#productEditForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    product_name: {
                        required: true
                    },
                    product_name_en: {
                        required: true
                    }
                },
                messages: {
                    product_name: "Барааны нэр оруулна уу",
                    product_name_en: "Барааны англи нэр оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.product.update') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            })
        })
    </script>
@endsection
