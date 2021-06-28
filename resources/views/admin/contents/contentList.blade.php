@extends('admin.layouts.master')
@section('title', 'Контент жагсаалт')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2><a href="{{ route('admin.content.add') }}" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Нэмэх</a></h2>
        </div>
        <div class="box-body">
            Хайх: <input id="filter" type="text" class="form-control input-sm w-auto inline m-r"/>
        </div>
        <div>
            <table class="table m-b-none" data-ui-jp="footable" data-filter="#filter" data-page-size="5">
                <thead>
                <tr>
                    <th data-toggle="true">
                        Нэр
                    </th>
                    <th data-hide="phone,tablet" data-name="Created Date">
                        Үүсгэсэн
                    </th>
                    <th data-hide="phone">
                        Статус
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($contents as $content)
                    <tr>
                        <td>{{ $content->content_title }}</td>
                        <td>{{ date('Y/m/d', strtotime($content->created_at)) }}</td>
                        <td>
                            <a href="javascript:void(0)" data-articleID="{{ $content->id }}" class="btn btn-sm btn-outline-danger product-remove"><i class="fa fa-trash-o"></i></a>
                            <a href="{{ route('admin.content.edit', $content->id) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                <tfoot class="hide-if-no-paging">
                <tr>
                    <td colspan="5" class="text-center">
                        <ul class="pagination"></ul>
                    </td>
                </tr>
                </tfoot>
            </table>
        </div>
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

        $('.product-remove').click(function() {
            $.LoadingOverlay("show");
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
            axios.post("{{ route('admin.article.remove') }}", {
                id: $(this).data('articleid')
            }).then(function (response) {
                if (response.data) {
                    alert("Амжилттай устгагдлаа.");
                    window.location.reload();
                }
            });
        });
    </script>
@endsection


