@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
  <h1 style="font-size: 20px;color: #73879C;">Danh sách loại hàng</h1>
</div>
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr>
      <th >Mã loại</th>
      <th >Tên loại</th>
      <th >Hình</th>
      <th ></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($category as $list_loai)
    <tr>
     <div>
      <th>{{$list_loai->ma_loai}}</th>
      <td>{{$list_loai->ten_hh}}</td>
      <td><img style="width: 10%;border-radius: 65%;" src="{{asset($list_loai->urlHinh)}}" alt=""></td>
      <td> 
        <a href="{{ url('admin/category/update/'. $list_loai->ma_loai) }}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
        <a href="{{ url('admin/category/delete/'. $list_loai->ma_loai) }}" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a></td>
     </div>
    </tr>
    @endforeach
  </tbody>
</table>
@stop