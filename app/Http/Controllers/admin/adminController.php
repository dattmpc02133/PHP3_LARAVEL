<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class adminController extends Controller
{
    //
    public function trangchuAdmin() {
        return view('admin.clientsAdmin.pages.home');
    }
    
}
