@extends('admin.layouts.master')
@section('title', 'Контент нэмэх')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="contentAddForm" id="contentAddForm" method="POST">
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
                            <input type="text" class="form-control parsley-error" name="content_title" id="content_title" required >
                        </div>

                        <div class="form-group">
                            <label>Агуулга</label>
                            <textarea class="ckeditor" name="content_description"></textarea>
                        </div>

                        <div class="">
                            <a href="{{ route('admin.content.list') }}" class="btn  btn-secondary">Болих</a>
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
            $('#contentAddForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    content_title: {
                        required: true
                    },
                },
                messages: {
                    content_title: "Агуулга Гарчиг оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.content.insert') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            })
        })
    </script>
@endsection
