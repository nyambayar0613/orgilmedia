@extends('admin.layouts.master')
@section('title', 'Ажил засах')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="portfolioEditForm" id="portfolioEditForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $portfolio->id }}">
                    <div class="box-body">
                        <div class="form-group">
                            <label for="product_name">Нэр</label>
                            <input type="text" class="form-control parsley-error" name="name" id="staff_name" value="{{ $portfolio->name }}" required >
                        </div>

                        <div class="row m-b">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label>Зураг</label>
                                    <input type="file" class="form-control" name="image" >
                                </div>
                                <img src="/uploaded/thumbnail/{{ $portfolio->image }}" class=" img-thumbnail" width="100"  alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Тайлбар</label>
                            <textarea class="ckeditor" name="description">{{ $portfolio->description }}</textarea>
                        </div>

                        <div class="form-group">
                            <label>Холбоос</label>
                            <input type="text" class="form-control parsley-error" name="url" id="url" value="{{ $portfolio->url }}" required >
                        </div>

                        <div class="">
                            <a href="{{ route('admin.portfolio.list') }}" class="btn btn-md btn-secondary">Болих</a>
                            <button type="submit" class="btn btn-md info" id="f_submit">засах</button>
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
            $('#portfolioEditForm').submit(function(e) {
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
                    form.action = "{{ route('admin.portfolio.update') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            });
        });
    </script>
@endsection
