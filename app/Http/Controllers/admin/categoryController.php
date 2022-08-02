<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    //
    // test middleware
    public function __construct () {
        return view('admin.clientsAdmin.pages.home');
    }
    function listCategory (Request $request) {
        // dd($request);
        return view('admin.category.list');
    }
    function addCategory() {
        return view('admin.category.add');
    }
    function handleAddCategory () {
        print_r($_POST);
    }
    function updateCategory($id) {
        $data = ['id'=>$id];
        return view('admin.category.update',$data);
    }
}
