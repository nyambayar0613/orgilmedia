@extends('admin.layouts.master')
@section('title', 'Бичлэг нэмэх')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="videoAddForm" id="videoAddForm" method="POST">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="row m-b">
                            <div class="col-sm-3">
                                <label class="md-switch">
                                    <input type="checkbox" name="is_active" checked>
                                    <i class="blue"></i>
                                    Идэвхтэй эсэх
                                </label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="product_name">Гарчиг</label>
                            <input type="text" class="form-control parsley-error" name="video_title" id="video_title" required >
                        </div>

                        <div class="form-group">
                            <label for="product_name">Холбоос</label>
                            <input type="text" class="form-control parsley-error" name="video_url" id="video_url" required >
                        </div>

                        <div class="form-group">
                            <label>Агуулга</label>
                            <textarea class="ckeditor" name="video_description"></textarea>
                        </div>

                        <div class="">
                            <a href="{{ route('admin.video.list') }}" class="btn  btn-secondary">Болих</a>
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
            $('#videoAddForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    video_title: {
                        required: true
                    },
                    video_url: {
                        required: true
                    },
                },
                messages: {
                    video_title: "Бичлэг гарчиг оруулна уу",
                    video_url: "Бичлэг холбоос оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.video.insert') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            })
        })
    </script>
@endsection
