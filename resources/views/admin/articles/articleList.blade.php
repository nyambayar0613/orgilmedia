@extends('admin.layouts.master')
@section('title', 'Нийтлэл жагсаалт')

@section('content')

    <?php
        if(isset($_GET['page']) && (int)$_GET['page'] > 1) {
            $num = $count - ($_GET['page'] * 10 - 10);
        } else {
            $num = $count;
        }
    ?>

    <div class="box">
        <div class="box-header">
            <h3>Нийтлэл </h3>
        </div>
        <div class="row p-a">
            <div class="col-sm-5">
                <a href="{{ route('admin.article.add') }}" class="btn btn-md active white"><i class="fa fa-plus"></i> Нэмэх</a>
            </div>
            <div class="col-sm-4">
            </div>
        </div>
        <div class="table-responsive">
            <table class="table table-striped b-t">
                <thead>
                <tr>
                    <th style="width:20px;"> № </th>
                    <th>Гарчиг</th>
                    <th>Зураг</th>
                    <th>Үүсгэсэн</th>
                    <th style="width:50px;">Засах</th>
                    <th style="width:50px;">Устгах</th>
                </tr>
                </thead>
                <tbody>
                @if($count > 0)
                    @foreach($articles as $article)
                        <tr>
                            <td>{{ $num-- }}</td>
                            <td>{{ $article->article_title }}</td>
                            <td><img src="/uploaded/thumbnail/{{ $article->article_image }}" class="img-fluid" width="100"  alt=""></td>
                            <td>{{ date('Y/m/d', strtotime($article->created_at)) }}</td>
                            <td>
                                <a href="{{ route('admin.article.edit', $article->id) }}" class="btn btn-md active">
                                    <i class="fa fa-pencil text-info"></i>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-id="{{ $article->id }}" class="btn btn-md active slider-remove">
                                    <i class="fa fa-trash text-warning "></i>
                                </a>
                            </td>
                        </tr>
                    @endforeach
                @endif
                </tbody>
            </table>
        </div>
        <footer class="light lt p-a">
            <div class="row">
                <div class="col-sm-6 ">
                    <small class="text-muted inline m-t-sm m-b-sm">
                        <p class="board_data_text">Нийт <strong>{{$count}}</strong> ( <strong>{{ $articles->currentPage()}}</strong> / {{$articles->lastPage()}} )</p>
                    </small>
                </div>
                <div class="col-sm-6 text-right text-center-xs">
                    {!! $articles->render() !!}
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('script')
    <script>
        $(function() {
            $('.pagination').addClass('pagination-sm')

            /*$.toast({
                heading: 'Success',
                text: 'And these were just the basic demos! Scroll down to check further details on how to customize the output.',
                showHideTransition: 'slide',
                icon: 'success',
                position: 'top-right',
            })*/
        });

        $('.article-remove').click(function() {
            $.LoadingOverlay("show");
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
            axios.post("{{ route('admin.remove.data') }}", {
                tb_name: 'articles',
                id: $(this).data('id')
            }).then(function (response) {
                if (response.data) {
                    alert("Амжилттай устгагдлаа.");
                    window.location.reload();
                }
            });
        });
    </script>
@endsection


