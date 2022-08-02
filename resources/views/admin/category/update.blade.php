@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
    <h1 style="font-size: 20px;color: #73879C;">Cập nhật loại hàng hóa {{$id}}</h1>
</div>
<form action="">
    <div class="table-responsive">
        <div class="mb-3">
            <input type="text" class="form-control "disabled id="exampleFormControlInput1" placeholder="Mã loại: ">
          </div>
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nhập tên loại..!">
          </div>
          <button type="button" class="btn btn-primary">Cập nhật</button>
    </div>
</form>
@stop