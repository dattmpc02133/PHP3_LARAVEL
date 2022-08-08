<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\loaisp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use League\CommonMark\Extension\CommonMark\Node\Inline\Strong;

class categoryController extends Controller
{
    //
    // test middleware
    public function __construct()
    {
        return view('admin.clientsAdmin.pages.home');
    }
    function listCategory(Request $request)
    {
        // dd($request);
        $listLoai = \App\Models\loaisp::all();
        return view('admin.category.list', ['category' => $listLoai]);
    }
    function addCategory()
    {      
        return view('admin.category.add');
    }
    function handleAddCategory(Request $request)
    {
        $hinh = '';
        if ($request->file('File_Upload') != null) {
             $hinh = $request -> File_Upload ->store('img');
        }
        // if ($request->has('File_Upload')) {
        //     $file = $request->File_Upload;
        //     $ext = $request->File_Upload->extension();
        //     // $fileUrl = $file -> getClientOriginalName();
        //     $fileUrl = time() . '_' . 'image' . '.' . $ext;
        //     $file->move(public_path('images/Url_Hinh'), $fileUrl);
        // }
        // $request->merge(['File_Upload' => $fileUrl]);
        $sp = new loaisp();
        $sp->ten_loai = $_POST['ten_loai'];
        // $sp->urlHinh = $filehinhUrl;
        $sp->urlHinh = $hinh;
        $sp->save();
        return redirect(route('listCategory'));
    }
    function editCategory($id)
    {
        $updateLoai = loaisp::select()->where('id','=',$id)->first();
        return view('admin.category.update', ['updateLoai' => $updateLoai]);
    }
    function updateCategory(request $request,$id)
    {
   
        if ($request->has('File_Upload')) {
          $hinh = $request -> File_Upload ->store('img');
        }
            $updateLoai = loaisp::find($id);
            if ($updateLoai == null) return redirect(route('listCategory'));
            $updateLoai->ten_loai = $_POST['ten_loai'];
            $updateLoai->urlHinh = $hinh;
            if(isset($updateLoai->urlHinh)){
                // dd($updateLoai->urlHinh);
                Storage::delete($updateLoai->urlHinh);
                $updateLoai->urlHinh = $request -> File_Upload ->store('img');
            }
            $updateLoai->save();
            return redirect(route('listCategory'));
    }
    function deleteCategory($id) {
        $deleteCategory = loaisp::find($id);
        if ($deleteCategory == null) return redirect(route('listCategory'));
        $deleteCategory->delete();
        return redirect(route('listCategory'));
    }
};