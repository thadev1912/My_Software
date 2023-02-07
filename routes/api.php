<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ApiAuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\quanlybanhang\Phieunhapkho_Controller;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::post('login_api',[AdminController::class,'login_api']);
 Route::get('detail',[AdminController::class,'detail']); 
Route::post('check_login',[PostController::class,'check_login']);
Route::delete('thoat_api',[PostController::class,'thoat_api'])->name('thoat_api');
//middle ware login
Route::middleware('check_api:api')->group(function () {    
    Route::get('chitiet',[PostController::class,'chitiet']);
    Route::get('check',[PostController::class,'check']);// nhiệm vụ kiểm tra token có tồn tại hay không?
    Route::resource('post',PostController::class);
   
});
//ajax_nhap kho
Route::get('ajax_dsvattu/{id_vattu}',[Phieunhapkho_Controller::class,'ajax_dsvattu'])
->name('ajax_dsvattu');
Route::post('luu_vattu',[Phieunhapkho_Controller::class,'luu_vattu'])
->name('luu_vattu');
Route::get('xoa_vattu/{id}',[Phieunhapkho_Controller::class,'xoa_vattu'])
->name('xoa_vattu');
















Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::resource('nhanvien',ApiController::class);
//route linh_tinh
Route::resource('nhanvien',ApiController::class);
Route::get('/hopdong',[ApiController::class,'hopdong'])
->name('api.hopdong');
Route::get('/baohiem',[ApiController::class,'baohiem'])
->name('api.baohiem');
Route::get('timkiem_shop',[ProductController::class,'timkiem_shop'])
->name('timkiem_shop');























//Route::group(['prefix'=>'demo'],function(){  //trong api có sẵn tiền tố này nên không cần phải thêm tiền tố api
 //Route::get('/post','PostController@index'); // cách này là dùng ở phiên bản cũ
    // Route::get('post',[PostController::class,'index']);
    // Route::post('/store_post',[PostController::class,'store']);


