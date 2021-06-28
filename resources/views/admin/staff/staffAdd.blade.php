@extends('admin.layouts.master')
@section('title', 'Ажилчин нэмэх')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="staffAddForm" id="staffAddForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="box-body">
                        <div class="form-group">
                            <label for="product_name">Нэр</label>
                            <input type="text" class="form-control parsley-error" name="staff_name" id="staff_name" required >
                        </div>

                        <div class="form-group">
                            <label>Зураг</label>
                            <input type="file" class="form-control" name="staff_image" >
                        </div>

                        <div class="form-group">
                            <label>Албан тушаал</label>
                            <input type="text" class="form-control parsley-error" name="staff_position" id="staff_position" required >
                        </div>

                        <div class="">
                            <a href="{{ route('admin.staff.list') }}" class="btn btn-md btn-secondary">Болих</a>
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
            $('#staffAddForm').submit(function(e) {
                e.preventDefault();
            }).validate({
                rules: {
                    staff_name: {
                        required: true
                    },
                    staff_position: {
                        required: true
                    },
                },
                messages: {
                    staff_name: "Нэр оруулна уу",
                    staff_position: "Албан тушаал оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.staff.insert') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            });
        });
    </script>
@endsection
