@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
    <h1 style="font-size: 20px;color: #73879C;">Danh sách hang hóa</h1>
</div>
<form action="#" method="POST">
    <table class="table table-striped jambo_table bulk_action">
        <thead class="table-danger">
            <tr>
                <th> Tên sản phẩm </th>
                <th> Hình sản phẩm </th>
                <th>Đơn giá</th>
                <th>Giảm giá (%)</th>
                <th>Số lượng</th>
                <th>Trạng thái</th>
                <th>Mã loại</th>
                <th></th>
                <th></th>
                <th></th>
                <th></th>

            </tr>
        </thead>
        <tbody>
            @foreach($list_hh as $list_hangHoa)
                <tr>
                    <!-- <td class="check"><input type="checkbox"> </td> -->
                    <td class="ma_sp">{{$list_hangHoa->ten_hh}}</td>
                    <td style="width:15%"><img class="w-50" src="{{asset($list_hangHoa->hinh_hh)}}" alt=""></td>
                    <td>{{$list_hangHoa->don_gia}}</td>
                    <td>{{$list_hangHoa->giam_gia}}<sup>đ</sup></td>
                    <td>{{$list_hangHoa->so_luong}}</td>
                    <td>
                        @if ($list_hangHoa->trang_thai == 0)
                            Hết hàng
                        @else 
                            Còn hàng
                        @endif 
                </td>
                    <td>{{$list_hangHoa->id_loai}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="update__delete"><a class="btn btn-info" href="{{ url('admin/product/update/'. $list_hangHoa->id) }}"><i class="fa fa-pencil"></i></a>
                    <a class="btn btn-danger xoa_sp" href="{{ url('admin/product/delete/'. $list_hangHoa->id) }}"><i class="fa fa-trash-o"></i> </a></td>
                </tr>
           @endforeach  

        </tbody>
    </table>
    <div class=" col-sm-12 phan_trang" style="display:flex; justify-content:center">
       
    </div>
    <div class="button__group">
       
    </div>
</form>
@stop