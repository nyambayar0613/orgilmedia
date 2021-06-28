@extends('admin.layouts.master')
@section('title', 'Слайдэр нэмэх')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="sliderAddForm" id="sliderAddForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="product_name">Гарчиг</label>
                            <input type="text" class="form-control parsley-error" name="slider_title" id="slider_title" required >
                        </div>

                        <div class="form-group">
                            <label for="product_name">Текст</label>
                            <input type="text" class="form-control parsley-error" name="slider_text" id="slider_text" required >
                        </div>

                        <div class="row m-b">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>Зураг</label>
                                    <input type="file" class="form-control" name="slider_image" >
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product_name">Холбоос</label>
                            <input type="text" class="form-control parsley-error" name="slider_url" id="slider_url" required >
                        </div>

                        <div class="">
                            <a href="{{ route('admin.slider.list') }}" class="btn btn-md btn-secondary">Болих</a>
                            <button type="submit" class="btn btn-md info" id="f_submit">Нэмэх</button>
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
            $('#sliderAddForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    slider_title: {
                        required: true
                    },
                },
                messages: {
                    slider_title: "гарчиг оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.slider.insert') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            })
        })
    </script>
@endsection
