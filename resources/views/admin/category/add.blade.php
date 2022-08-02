@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
    <h1 style="font-size: 20px;color: #73879C;">Thêm sản phẩm</h1>
</div>
<form method="post">
    <div class="table-responsive">
        <div class="mb-3">
            @csrf
            <input type="text" class="form-control" id="exampleFormControlInput1" name="category_name" placeholder="Nhập tên loại..!">
          </div>
        </div>
        <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>

@stop