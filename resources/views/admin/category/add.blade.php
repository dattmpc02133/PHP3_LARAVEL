@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
    <h1 style="font-size: 20px;color: #73879C;">Thêm loại sản phẩm</h1>
</div>
<form method="post" enctype="multipart/form-data">
    @csrf
    <div class="table-responsive">
        <div class="mb-3">
            <input type="text" class="form-control" id="exampleFormControlInput1" name="ten_loai" placeholder="Nhập tên loại..!">
        </div>
        <div class="mb-3">
            <input type="file" class="form-control" id="exampleFormControlInput1" name="File_Upload" >
            <span id="err"></span>
        </div>
    </div>
      
        <button type="submit" class="btn btn-primary">Thêm mới</button>
</form>

@stop