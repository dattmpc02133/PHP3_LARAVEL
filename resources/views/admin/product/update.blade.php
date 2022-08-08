@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
    <h1 style="font-size: 20px;color: #73879C;">Cập nhật hàng hóa {{$updateProduct->id}}</h1>
</div>
<form method="post" enctype="multipart/form-data"  id="form_du_an1" style="margin-bottom: 10px;" >
    @csrf
    <div class="form-group">
        <label for="">Tên sản phẩm:</label>
        <input type="text" class="form-control" value="{{$updateProduct->ten_hh}}" placeholder="Nhập tên sản phẩm" name="ten_hh" id="ten_hh">
        
    </div>
    <div class="form-group">
        <label for="">Đơn giá:</label>
        <input type="number" class="form-control" value="{{$updateProduct->don_gia}}" placeholder="Nhập đơn giá" name="don_gia" id="don_gia">
        
    </div>
    <div class="form-group">
        <label for="">Giảm giá (%):</label>
        <input type="number" value="0" min="0" max="100" class="form-control" placeholder="Nhập đơn giá giảm" name="giam_gia" id="giam_gia">
        
    </div>
    <div class="form-group">
        <label for="">Ảnh chính:</label>
        <input type="file" class="form-control-file" name="File_Upload" onchange="document.getElementById('output').src = window.URL.createObjectURL(this.files[0])"  aria-describedby="fileHelpId">
        <img src="{{asset($updateProduct->hinh_hh)}}" id="output"  alt="">
        <input type="text" value="{{$updateProduct->hinh_hh}}" readonly>
    </div>
    {{-- <div class="form-group">
        <label for="">Ảnh phụ:</label>
        <input type="file" multiple="true" class="form-control-file" name="hinh_phu[]" id="hinh_phu" aria-describedby="fileHelpId">
    </div> --}}
    <div class="form-group">
        <label for="">Số lượng:</label>
        <input type="number" class="form-control" placeholder="Nhập số lượng" value="{{$updateProduct->so_luong}}" name="so_luong" id="so_luong">
        
    </div>
    <div class="form-group">
        <label for="">Trạng thái:</label>
        <div class="form-control-radio">
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai" value="1" checked>Còn hàng
                </label>
            </div>
            <div class="form-check form-check-inline">
                <label class="form-check-label">
                    <input class="form-check-input" type="radio" name="trang_thai" id="trang_thai" value="0">Hết hàng
                </label>
            </div>
        </div>
    </div>
    
    <div class="form-group">
        <select class="form-control" name="id_loai">
            @foreach($lt as $list_loai)
            <option value="{{$list_loai->id}}">{{$list_loai->ten_loai}}</option>
            @endforeach
    </div>
    <div class="form-group">
        <label for="">Mô tả:</label>
        <textarea name="mo_ta" id="mo_ta">{{$updateProduct->mo_ta}}</textarea>
    </div>
    <button type="submit" class="btn btn-info">Cập nhật sản phẩm</button>
    <button type="reset" class="btn btn-info" name="nhap_lai">Nhập lại</button>
    <a href="index.php?btn_list" class="btn btn-info">Danh sách</a>
</form>
    <script src="../../content/ckeditor/ckeditor.js"></script>
        <script>
                            CKEDITOR.replace('mo_ta');
                         
        </script>
@stop
