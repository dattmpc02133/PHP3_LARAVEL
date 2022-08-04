@extends('admin.clientsAdmin.layouts.master_admin')
@section('content-admin')
<div class="headings" >
    <h1 style="font-size: 20px;color: #73879C;">Cập nhật hàng hóa</h1>
</div>
<form  id="form_du_an1" style="margin-bottom: 10px;" >
    @csrf
    <div class="form-group">
        <label for="">Tên sản phẩm:</label>
        <input type="text" class="form-control" placeholder="Nhập tên sản phẩm" name="ten_sp" id="ten_sp">
        <span class="errs">
                    </span>
    </div>
    <div class="form-group">
        <label for="">Đơn giá:</label>
        <input type="number" class="form-control" placeholder="Nhập đơn giá" name="don_gia" id="don_gia">
        <span class="errs">
                    </span>
    </div>
    <div class="form-group">
        <label for="">Giảm giá (%):</label>
        <input type="number" value="0" min="0" max="100" class="form-control" placeholder="Nhập đơn giá giảm" name="giam_gia" id="giam_gia">
        <span class="errs">
                    </span>
    </div>
    <div class="form-group">
        <label for="">Ảnh chính:</label>
        <input type="file" class="form-control-file" name="hinh" id="hinh" aria-describedby="fileHelpId">
    </div>
    <div class="form-group">
        <label for="">Ảnh phụ:</label>
        <input type="file" multiple="true" class="form-control-file" name="hinh_phu[]" id="hinh_phu" aria-describedby="fileHelpId">
    </div>
    <div class="form-group">
        <label for="">Số lượng:</label>
        <input type="number" class="form-control" placeholder="Nhập số lượng" name="so_luong" id="so_luong">
        <span class="errs">
                    </span>
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
        <select class="form-control" id="ma_loai" name="ma_loai">
            <option value="15">Phòng ngủ</option><option value="12">Phòng làm việc</option><option value="11">Ghế phụ</option><option value="10">Nhà bếp</option><option value="9">Sản phẩm mới</option><option value="8">Khuyến mãi</option><option value="3">Trang trí</option><option value="1">Phòng khách</option>        </select>
    </div>
    <div class="form-group">
        <label for="">Mô tả:</label>
        <textarea name="mo_ta" id="mo_ta"></textarea>
    </div>
    <button type="submit" name="add" id="add" class="btn btn-info">Thêm sản phẩm</button>
    <button type="reset" class="btn btn-info" name="nhap_lai">Nhập lại</button>
    <a href="index.php?btn_list" class="btn btn-info">Danh sách</a>
</form>
    <script src="../../content/ckeditor/ckeditor.js"></script>
        <script>
                            CKEDITOR.replace('mo_ta');
                         
        </script>
@stop
