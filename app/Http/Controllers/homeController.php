<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller
{
    //
    public function trangchu() {
        return view('clients.pages.index');
        // su dung compact
        // with('key',$key) or with(['key'=>$key,'content'=>$content])
    }
    public function cuahang() {
        return view('clients.pages.products');
    }
    public function tintuc() {
        return view('clients.pages.blog');
    }
    public function gioithieu() {
        return view('clients.pages.about');
    }
    public function lienhe() {
        return view('clients.pages.contact');
    }
    public function productdetail() {
        return view('clients.pages.products_detail');
    }
    public function cart() {
        return view('clients.pages.cart');
    }
    public function account() {
        return view('clients.pages.dangnhap');
    }
}
