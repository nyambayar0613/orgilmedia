@extends('admin.layouts.master')
@section('title', 'Слайдэр жагсаалт')

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
                <a href="{{ route('admin.slider.add') }}" class="btn btn-md active white"><i class="fa fa-plus"></i> Нэмэх</a>
            </div>
            <div class="col-sm-4">
            </div>
            {{--<div class="col-sm-3">
                <form class="form-search" method="GET" action="{{ route('admin.slider.search') }}" >
                    <div class="input-group">
                        <input type="text" name="s" value="" class="form-control" placeholder="Хайлт">
                        <span class="input-group-btn">
                            <button class="btn white" type="submit">Хайх</button>
                            <a href="{{ route('admin.slider.list') }}" class="btn btn-white">Цуцлах</a>
                        </span>
                    </div>
                </form>
            </div>--}}
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
                    @foreach($sliders as $slider)
                        <tr>
                            <td>{{ $num-- }}</td>
                            <td>{{ $slider->slider_title }}</td>
                            <td><img src="/uploaded/thumbnail/{{ $slider->slider_image }}" class="img-fluid" width="100"  alt=""></td>
                            <td>{{ date('Y/m/d', strtotime($slider->created_at)) }}</td>
                            <td>
                                <a href="{{ route('admin.slider.edit', $slider->id) }}" class="btn btn-md active">
                                    <i class="fa fa-pencil text-info"></i>
                                </a>
                            </td>
                            <td>
                                <a href="javascript:void(0)" data-id="{{ $slider->id }}" class="btn btn-md active slider-remove">
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
                        <p class="board_data_text">Нийт <strong>{{$count}}</strong> ( <strong>{{ $sliders->currentPage()}}</strong> / {{$sliders->lastPage()}} )</p>
                    </small>
                </div>
                <div class="col-sm-6 text-right text-center-xs">
                    {!! $sliders->render() !!}
                </div>
            </div>
        </footer>
    </div>
@endsection

@section('script')
    @if(session()->has('successUpdateMessage'))
        <script>
            toastMessage("{{ session()->get('successUpdateMessage') }}", "success");
        </script>
    @endif
    @if(session()->has('error'))
        <script>
            toastMessage("{{ session()->get('error') }}", "error");
        </script>
    @endif
    <script>
        $('.slider-remove').click(function() {
            $.LoadingOverlay("show");
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
            axios.post("{{ route('admin.remove.data') }}", {
                tb_name: 'sliders',
                id: $(this).data('id'),
            }).then(function (response) {
                if (response.data) {
                    $.LoadingOverlay("hide");
                    toastMessage('Амжилттай устгагдлаа.', 'success');
                    setTimeout(function(){
                        window.location.reload();
                    }, 2500);
                }
            });
        });
    </script>
@endsection
