@extends('admin.layouts.master')
@section('title', 'Бичлэг жагсаалт')

@section('content')
    <div class="box">
        <div class="box-header">
            <h2><a href="{{ route('admin.video.add') }}" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Нэмэх</a></h2>
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
                    <th>
                        Зураг
                    </th>
                    <th data-hide="phone,tablet" data-name="Date Of Birth">
                        Үүсгэсэн
                    </th>
                    <th data-hide="phone">
                        Статус
                    </th>
                </tr>
                </thead>
                <tbody>
                @foreach($videos as $video)
                    <?php $url = $video->video_url; preg_match('#(?:http://)?(?:www\.)?(?:youtube\.com/(?:v/|watch\?v=)|youtu\.be/)([\w-]+)(?:\S+)?#', $url, $match); ?>
                    <tr>
                        <td>{{ $video->video_title }}</td>
                        <td>
                            <img src="http://i3.ytimg.com/vi/{{ $match[1] }}/hqdefault.jpg" width="100" alt="">
                        </td>
                        <td>{{ date('Y/m/d', strtotime($video->created_at)) }}</td>
                        <td>
                            <a href="javascript:void(0)" data-id="{{ $video->id }}" class="btn btn-sm btn-outline-danger video-remove"><i class="fa fa-trash-o"></i></a>
                            <a href="{{ route('admin.video.edit', $video->id) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
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
        $('.video-remove').click(function() {
            $.LoadingOverlay("show");
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
            axios.post("{{ route('admin.remove.data') }}", {
                tb_name: 'videos',
                id: $(this).data('id'),
            }).then(function (response) {
                if (response.data) {
                    alert("Амжилттай устгагдлаа.");
                    window.location.reload();
                }
            });
        });
    </script>
@endsection


