<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PromoController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*Route::get('/', function () {
    return view('welcome');
});*/

/** route vers le controller client */


Route::get('/',[ClientController::class , 'home']);
Route::get('/store',[ClientController::class , 'store']);
Route::get('/productdetail',[ClientController::class , 'productdetail']);
Route::get('/checkout',[ClientController::class , 'checkout']);




/**route vers le controller admin */


Route::get('/admin',[AdminController::class,'home']);
Route::get('/admin/addcategory',[AdminController::class,'addcategory']);
Route::get('/admin/category',[AdminController::class,'category']);
Route::get('/admin/addslider',[AdminController::class,'addslider']);
Route::get('/admin/slider',[AdminController::class,'slider']);
Route::get('/admin/addproduct',[AdminController::class,'addproduct']);
Route::get('/admin/product',[AdminController::class,'product']);
Route::get('/admin/promo',[AdminController::class,'promo']);
Route::get('/admin/addpromo',[AdminController::class,'addpromo']);

//route vers les categotirs controller


Route::post('/admin/savecategory',[CategoryController::class,'savecategory']);
Route::get('/admin/deletecategory/{id}',[CategoryController::class,'deletecategory']);
Route::delete('/admin/yesdeletecategory/{id}',[CategoryController::class,'yesdeletecategory']);
Route::get('/admin/editecategory/{id}',[CategoryController::class,'editecategory']);
Route::put('admin/updatecategory/{id}',[CategoryController::class,'updatecategory']);



//route vers les sliders controller

Route::post('/admin/saveslider',[SliderController::class,'saveslider']);
Route::get('/admin/deleteslider/{id}',[SliderController::class,'deleteslider']);
Route::delete('/admin/yesdeleteslider/{id}',[SliderController::class,'yesdeleteslider']);
Route::get('/admin/editeslider/{id}',[SliderController::class,'editeslider']);
Route::put('/admin/updateslider/{id}',[SliderController::class,'updateslider']);
Route::put('/admin/unactivateslider/{id}',[SliderController::class,'unactivateslider']);
Route::put('/admin/activateslider/{id}',[SliderController::class,'activateslider']);


//route vers les products controller


Route::post('/admin/saveproduct/',[ProductController::class,'saveproduct']);
Route::get('/admin/editeproduct/{id}',[ProductController::class,'editeproduct']);
Route::put('/admin/unactivateproduct/{id}',[ProductController::class,'unactivateproduct']);
Route::put('/admin/activateproduct/{id}',[ProductController::class,'activateproduct']);
Route::get('/admin/deleteproduct/{id}',[ProductController::class,'deleteproduct']);
Route::delete('/admin/yesdeleteproduct/{id}',[ProductController::class,'yesdeleteproduct']);
Route::get('/admin/deleteproductimage/{id}',[ProductController::class,'deleteproductimage']);
Route::delete('/admin/yesdeleteproductimage/{id}',[ProductController::class,'yesdeleteproductimage']);
Route::put('admin/updateproduct/{id}',[ProductController::class,'updateproduct']);


//route vers les promo controller


Route::post('/admin/savepromo/',[PromoController::class,'savepromo']);
Route::get('/admin/editepromo/{id}',[PromoController::class,'editepromo']);
Route::put('/admin/updatepromo/{id}',[PromoController::class,'updatepromo']);
Route::get('/admin/deletepromo/{id}',[PromoController::class,'deletepromo']);
Route::delete('/admin/yesdeletepromo/{id}',[PromoController::class,'yesdeletepromo']);
Route::put('/admin/unactivatepromo/{id}',[PromoController::class,'unactivatepromo']);
Route::put('/admin/activatepromo/{id}',[PromoController::class,'activatepromo']);