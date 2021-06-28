@extends('admin.layouts.master')
@section('title', 'Нийтлэл нэмэх')

@section('content')
    <div class="row">
        <div class="col-sm-12" id="app">
            <div class="box">
                <form name="productAddForm" id="productAddForm" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="hidden" name="id" value="{{ $article->id }}">
                    <div class="box-body">

                        <div class="form-group">
                            <label for="product_name">Гарчиг</label>
                            <input type="text" class="form-control parsley-error" name="article_title" id="article_title" value="{{ $article->article_title }}" required >
                        </div>

                        <div class="row m-b">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label>Зураг</label>
                                    <input type="file" class="form-control" name="article_image" >
                                </div>
                                <img src="/uploaded/thumbnail/{{ $article->article_image }}" class="img-fluid" width="500"  alt="">
                            </div>
                        </div>

                        <div class="form-group">
                            <label>Тайлбар</label>
                            <textarea class="ckeditor" name="article_description">{{ $article->article_description }}</textarea>
                        </div>

                        <div class="">
                            <button type="submit" class="btn btn-md info" id="f_submit">Засах</button>
                            <a href="{{ route('admin.article.list') }}" class="btn btn-md btn-secondary">Болих</a>
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
                    article_title: {
                        required: true
                    },
                },
                messages: {
                    article_title: "Нийтлэл нэр оруулна уу",
                },
                submitHandler: function(form) {
                    $.LoadingOverlay("show");
                    form.action = "{{ route('admin.article.update') }}"
                    $('#f_submit').attr('disabled','disabled');
                    form.submit();
                }
            })
        })
    </script>
@endsection
