<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;


class ProductsController extends Controller
{
    //
    public function listProduct(Request $request)
    {
        $product_list =  \App\Models\product::all();
        return view('admin/product/list', ['list_hh' => $product_list]);
    }
    public function addProduct()
    {
        $lt = DB::table('loaisp')->select()->get();
        return view('admin/product/add', ['loai_hh' => $lt]);
    }
    public function handleAddProduct(Request $request)
    {
        if($request->file('File_Upload') != null){
            $path = $request->file('File_Upload')->store('img');
            $sp = new product();
            $sp->ten_hh = $_POST['ten_hh'];
            $sp->don_gia = $_POST['don_gia'];
            $sp->giam_gia = $_POST['giam_gia'];
            $sp->so_luong = $_POST['so_luong'];
            $sp->hinh_hh = $path;
            $sp->trang_thai = $_POST['trang_thai'];
            $sp->mo_ta = $_POST['mo_ta'];
            $sp->id_loai = $_POST['id_loai'];
            $sp->save();
            return redirect(route('listProducts'));
        }else{
            dd($request->file('File_Upload'));
        }
       
    }
    public function editProduct($id)
    {
        return view('admin/product/update');
    }
    public function updateProduct($id)
    {
        return view('admin/product/update');
    }
}
