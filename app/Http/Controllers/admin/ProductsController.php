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
        // $product_list = DB::table('users')->join('contacts', 'users.id', '=', 'contacts.user_id')->get();
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
    public function editProduct(Request $request,$id)
    {
        $lt = DB::table('loaisp')->select()->get();
        $updateProduct = product::select()->where('id','=',$id)->first();
        return view('admin/product/update', ['updateProduct' => $updateProduct,'lt' => $lt]);
    }
    public function updateProduct(Request $request,$id)
    {
        $hinh = '';
        if ($request->file('File_Upload') != null) {
             $hinh = $request -> File_Upload ->store('img');
        }
              $updateProduct = product::find($id);
              if ($updateProduct == null) return redirect(route('listProducts'));
              $updateProduct->ten_hh = $_POST['ten_hh'];
              $updateProduct->don_gia = $_POST['don_gia'];
              $updateProduct->giam_gia = $_POST['giam_gia'];
              $updateProduct->so_luong = $_POST['so_luong'];
              $updateProduct->hinh_hh = $hinh;
              $updateProduct->trang_thai = $_POST['trang_thai'];
              $updateProduct->mo_ta = $_POST['mo_ta'];
              $updateProduct->id_loai = $_POST['id_loai'];

              $updateProduct->save();
              return redirect(route('listProducts'));
        return view('admin/product/update');
    }
     public  function deleteProduct($id) {
        $deleteProduct = product::find($id);
        if($deleteProduct == null) return redirect(route('listProducts'));
        $deleteProduct -> delete();
        return redirect(route('listProducts'));
    }
}
