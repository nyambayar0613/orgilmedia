@extends('admin.layouts.master')
@section('title', 'Ажилчид жагсаалт')

@section('content')
    <?php
        if(isset($_GET['page']) && (int)$_GET['page'] > 1) {
            $num = $count - ($_GET['page'] * 5 - 5);
        } else {
            $num = $count;
        }
    ?>
    <div class="box">
        <div class="box-header">
            <h3>Слайдэр</h3>
        </div>
        <div class="row p-a">
            <div class="col-sm-5">
                <a href="{{ route('admin.staff.add') }}" class="btn btn-md active white"><i class="fa fa-plus"></i> Нэмэх</a>
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
                        <th>Албан тушаал</th>
                        <th>Үүсгэсэн</th>
                        <th style="width:50px;">Засах</th>
                        <th style="width:50px;">Устгах</th>
                    </tr>
                </thead>
                <tbody>
                @if($count > 0)
                    @foreach($staffs as $staff)
                        <tr>
                            <td>{{ $num-- }}</td>
                            <td>{{ $staff->staff_name }}</td>
                            <td><img src="/uploaded/thumbnail/{{ $staff->staff_image }}" class="img-fluid" width="100"  alt=""></td>
                            <td>{{ $staff->staff_position }}</td>
                            <td>{{ date('Y/m/d', strtotime($staff->created_at)) }}</td>
                            <td>
                                <a href="{{ route('admin.staff.edit', $staff->id) }}" class="btn btn-md active">
                                    <i class="fa fa-pencil text-info"></i>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-id="{{ $staff->id }}" class="btn btn-md active slider-remove">
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
                        <p class="board_data_text">Нийт <strong>{{$count}}</strong> ( <strong>{{ $staffs->currentPage()}}</strong> / {{$staffs->lastPage()}} )</p>
                    </small>
                </div>
                <div class="col-sm-6 text-right text-center-xs">
                    {!! $staffs->render() !!}
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('script')
    <script>
        /*$('.product-remove').click(function() {
            $.LoadingOverlay("show");
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
            axios.post("", {
                id: $(this).data('articleid')
            }).then(function (response) {
                if (response.data) {
                    alert("Амжилттай устгагдлаа.");
                    window.location.reload();
                }
            });
        });*/
    </script>
@endsection


