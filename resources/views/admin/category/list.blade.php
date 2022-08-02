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
      {{-- <th class="column-title"></th>
      <th class="column-title"></th> --}}
      <th class="bulk-actions" colspan="7">
        <a class="antoo" style="color:#fff; font-weight:500;">Bulk Actions ( <span class="action-cnt"> </span> ) <i class="fa fa-chevron-down"></i></a>
      </th>
    </tr>
  </thead>

  <tbody>
    <tr class="even pointer">
      <td>121000040</td>
      <td>John Blank L</td>
      <td>121000210 <i class="success fa fa-long-arrow-up"></i></td>
      <td></td>
      <td>
        <a href="#" class="btn btn-primary btn-xs"><i class="fa fa-folder"></i> add </a>
        <a href="#" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Edit </a>
        <a href="#" class="btn btn-danger btn-xs"><i class="fa fa-trash-o"></i> Delete </a>
      </td>
    </tr>
  </tbody>
</table>
</div>

@stop