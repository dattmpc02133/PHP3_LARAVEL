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
        Route::get('/',[categoryController::class,'listCategory']);
        Route::get('add',[categoryController::class,'addCategory'])->name('category.addCategory');
        Route::post('add',[categoryController::class,'handleAddCategory']);
        Route::get('update/{id}',[categoryController::class,'updateCategory']);
      //   Route::post('update/{id}', [categoryController::class, 'editCategory']);
      // Route::delete('delete/{id}', [categoryController::class, 'deleteCategory'])->name('category.delete'); 

   });
   Route::prefix('product')->group(function (){
      Route::get('/',[ProductsController::class, 'listProduct']);
      Route::get('add',[ProductsController::class, 'addProduct'])->name('Product.addProduct');
      Route::post('add',[ProductsController::class, 'handleAddProduct']);
      Route::get('update/{id}',[ProductsController::class, 'updateProduct']);
    //   Route::post('update/{id}', [ProductsController::class, '::class, 'editCategory']);
    // Route::delete('delete/{id}', [ProductsController::class, '::class, 'deleteCategory'])->name('category.delete'); 

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