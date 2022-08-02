@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
    <h1 style="font-size: 20px;color: #73879C;">Cập nhật loại hàng</h1>
</div>
<form method="POST" enctype="multipart/form-data">
    @csrf
    <div class="table-responsive">
        <div class="mb-3">
            <input type="text" class="form-control" value="{{$updateLoai->ten_hh}}" id="exampleFormControlInput1" name="ten_hh" placeholder="Nhập tên loại..!">
        </div>
        <div class="mb-3">
            <input type="file"  class="form-control" id="exampleFormControlInput1"  name="File_Upload" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])" >

            <img src="{{asset($updateLoai->urlHinh)}}" id="output"  alt="">
            <input type="text" name="File_Upload" class="form-control"  readonly>
        </div>
    </div>
      
        <button type="submit" class="btn btn-primary">Cập nhật</button>
</form>

@stop