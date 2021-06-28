@extends('admin.layouts.master')
@section('title', 'Бүтээгдхүүн жагсаалт')

@section('content')
<div class="box">
    <div class="box-header">
        <h2><a href="{{ route('admin.product.add') }}" class="btn btn-sm btn-default"><i class="fa fa-plus"></i> Нэмэх</a></h2>
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
                    Англи нэр
                </th>
                <th>
                    Үнэ
                </th>
                <th data-hide="phone,tablet">
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
                @foreach($products as $product)
                <tr>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_name_en }}</td>
                    <td>{{ number_format($product->product_price) }} ₮</td>
                    <td><img src="/uploaded/thumbnail/{{ $product->product_image }}" class=" img-thumbnail" width="70"  alt=""></td>
                    <td>{{ date('Y/m/d', strtotime($product->created_at)) }}</td>
                    <td>
                        <a href="javascript:void(0)" data-id="{{ $product->id }}" class="btn btn-sm btn-outline-danger product-remove"><i class="fa fa-trash-o"></i></a>
                        <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-edit"></i></a>
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
        $('.product-remove').click(function() {
            $.LoadingOverlay("show");
            axios.defaults.headers.common['X-CSRF-TOKEN'] = $('meta[name="csrf-token"]').attr('content');
            axios.post("{{ route('admin.remove.data') }}", {
                tb_name: 'products',
                id: $(this).data('id'),
            }).then(function (response) {
                if (response.data) {
                    //window.location.reload();
                    $.LoadingOverlay("hide");
                    toastMessage('Амжилттай устгагдлаа.', 'success')
                }
            });
        });
    </script>
@endsection


