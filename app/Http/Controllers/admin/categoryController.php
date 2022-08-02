<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\loaisp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class categoryController extends Controller
{
    //
    // test middleware
    public function __construct () {
        return view('admin.clientsAdmin.pages.home');
    }
    function listCategory (Request $request) {
        // dd($request);
        $listLoai = \App\Models\loaisp::paginate(5);
        return view('admin.category.list',['category'=>$listLoai]);
    }
    function addCategory() {
        $loaitin = DB::table('loaisp')->select()->get();
        return view('admin.category.add');
    }
    function handleAddCategory (Request $request) {
        // print_r($_POST);
        // if($request->has('urlHinh')) {
        //     $file = $request->urlHinh;
        //     $fileUrl = $file -> getClientOriginalFilename();
        //     $file->move(public_path('images'),$fileUrl);
        // }
        dd($request->all());
        $sp = new loaisp();
        $sp -> ten_hh = $_POST['ten_hh'];
        $sp -> urlHinh = $_FILES['urlHinh'];
        $sp ->save();
        return redirect('listCategory');
    }
    function updateCategory($id) {
        $data = ['id'=>$id];
        return view('admin.category.update',$data);
    }
}
