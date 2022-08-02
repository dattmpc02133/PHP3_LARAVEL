@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
  <h1 style="font-size: 20px;color: #73879C;">Danh sách loại hàng</h1>
</div>
<div class="table-responsive">
<table class="table table-striped jambo_table bulk_action">
  <thead>
    <tr class="headings">
      <th colspan="2" class="column-title">Mã loại </th>
      <th colspan="2" class="column-title">Tên loại</th>
      <th colspan="2" class="column-title">Hình</th>
      <th colspan="2" class="column-title"></th>
      <th class="bulk-actions" colspan="7">
        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
      </th>
    </tr>
  </thead>

  <tbody>
    @foreach ($category as $list_loai)
    <tr class="flex-row">
      <td>{{$list_loai->ma_loai}}</td>
      <td colspan="2">{{$list_loai->ten_hh}}</td>
      <td colspan="2"><img src="{{$list_loai->urlHinh}}" alt="{{$list_loai->urlHinh}}" class="img-circle profile_img"></td>
      <td></td>
      <td rowspan="2" style="float:right;">
        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> add </a>
        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>

@stop