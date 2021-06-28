@extends('admin.layouts.master')
@section('title', 'Ажил нэмэх')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="portfolioAddForm" id="portfolioAddForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="product_name">Нэр</label>
                            <input type="text" class="form-control parsley-error" name="name" id="staff_name" required >
                        </div>

                        <div class="form-group">
                            <label>Зураг</label>
                            <input type="file" class="form-control" name="image" >
                        </div>

                        <div class="form-group">
                            <label>Тайлбар</label>
                            <textarea class="ckeditor" name="description"></textarea>
                        </div>

                        <div class="form-group">
                            <label>Холбоос</label>
                            <input type="text" class="form-control parsley-error" name="url" id="url" required >
                        </div>

                        <div class="">
                            <a href="{{ route('admin.portfolio.list') }}" class="btn btn-md btn-sm btn-secondary">Болих</a>
                            <button type="submit" class="btn btn-md btn-sm info" id="f_submit">Нэмэх</button>
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
            $('#portfolioAddForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    name: {
                        required: true
                    },
                    url: {
                        required: true
                    },
                },
                messages: {
                    staff_name: "Нэр оруулна уу",
                    staff_position: "Холбоос оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.portfolio.insert') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            });
        });
    </script>
@endsection
