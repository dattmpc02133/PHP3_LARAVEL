<?php

use App\Http\Controllers\Admin\adminController;
use App\Http\Controllers\admin\categoryController;
use App\Http\Controllers\Api\productController;
use App\Http\Controllers\admin\ProductsController;

use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/test',function(){
   return '<h1 style="text-align:center;">Ban Khong phai la admin</h1>';
})->name('login');

Route::middleware('auth.admin')->prefix('admin')->group(function (){
   Route::get('/',[adminController::class,'trangchuAdmin']);
   Route::prefix('category')->group(function (){
        Route::get('/',[categoryController::class,'listCategory'])->name('listCategory');
        Route::get('add',[categoryController::class,'addCategory'])->name('category.addCategory');
        Route::post('add',[categoryController::class,'handleAddCategory']);
        Route::get('update/{id}',[categoryController::class,'editCategory']);
        Route::post('update/{id}', [categoryController::class, 'updateCategory']);
        Route::get('delete/{id}', [categoryController::class, 'deleteCategory']); 

   });
   Route::prefix('product')->group(function (){
      Route::get('/',[ProductsController::class, 'listProduct'])->name('listProducts');
      Route::get('add',[ProductsController::class, 'addProduct']);
      Route::post('add',[ProductsController::class, 'handleAddProduct']);
      Route::get('update/{id}',[ProductsController::class, 'editProduct']);
      Route::post('update/{id}',[ProductsController::class, 'updateProduct']);
      Route::get('delete/{id}', [ProductsController::class, 'deleteProduct']); 

 });
});

Route::get('/',[homeController::class,'trangchu']);
Route::get('/productdetail',[homeController::class,'productdetail']);
Route::get('/cart',[homeController::class,'cart']);
Route::get('/shop',[homeController::class,'cuahang']);
Route::get('/blog',[homeController::class,'tintuc']);
Route::get('/about',[homeController::class,'gioithieu']);
Route::get('/contact',[homeController::class,'lienhe']);
Route::get('/account',[homeController::class,'account']);