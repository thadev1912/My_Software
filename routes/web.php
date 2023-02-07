<?php
use Carbon\Carbon;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\PhongbanController;
use App\Http\Controllers\HopdongController;
use App\Http\Controllers\BaohiemController;
use App\Http\Controllers\ChucvuController;
use App\Http\Controllers\KhenthuongController;
use App\Http\Controllers\KyluatController;
use App\Http\Controllers\PhepnamController;
use App\Http\Controllers\ExcelController;
use App\Http\Controllers\DulieuchamcongController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\Dactinh_SanphamController;
use App\Http\Controllers\Connect_APIController;
use App\Http\Controllers\MypostController;
use App\Http\Controllers\quanlybanhang\Kho_banhang_Controller;
use App\Http\Controllers\quanlybanhang\Nhanvien_banhang_Controller;
use App\Http\Controllers\quanlybanhang\Nhacc_banhang_Controller;
use App\Http\Controllers\quanlybanhang\Vattu_banhang_Controller;
use App\Http\Controllers\quanlybanhang\Nhapkho_Controller;
use App\Http\Controllers\quanlybanhang\Phieunhapkho_Controller;
use App\Http\Controllers\quanlybanhang\Invoice_Controller;
use App\Http\Controllers\PDFController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|*/
//Midleware
Route::group(['prefix'=>'admin','middleware'=>'auth'],function()
{
//Danh mục Nhân Viên
  Route::get('/nhanvien',[NhanvienController::class,'nhanvien'])
  ->name('nhanvien'); 
  Route::get('/timnhanvien',[NhanvienController::class,'timkiem'])
  ->name('timkiem');
  Route::get('/danhsachnhanvien',[NhanvienController::class,'ds_nhanvien'])
  ->name('ds_nhanvien');
  Route::get('/timkiem_dsnhanvien',[NhanvienController::class,'timkiem_dsnhanvien'])
  ->name('timkiem_dsnhanvien');
  Route::get('/chitietnhanvien/{id}',[NhanvienController::class,'chitiet_nhanvien'])
  ->name('chitiet_nhanvien');
   Route::get('/themnhanvien',[NhanvienController::class,'them_nv'])
  ->name('them_nv');
  Route::post('/luunhanvien',[NhanvienController::class,'luu_nv'])
  ->name('luu_nv');
  Route::get('/suanhanvien/{id}',[NhanvienController::class,'sua_nv'])
  ->name('sua_nv');
  Route::post('/capnhatnhanvien/{id}',[NhanvienController::class,'capnhat_nv'])
  ->name('capnhat_nv');
  Route::get('/xoanhanvien/{id}',[NhanvienController::class,'xoa_nv'])
  ->name('xoa_nv');

  // Danh muc phong ban  
  Route::get('/phongban',[PhongbanController::class,'phongban'])
  ->name('phongban');
  Route::get('/themphongban',[PhongbanController::class,'them_pb'])
 ->name('them_pb');
 Route::post('/luuphongban',[PhongbanController::class,'luu_pb'])
 ->name('luu_pb');
 Route::get('/suaphongban/{id}',[PhongbanController::class,'sua_pb'])
 ->name('sua_pb');
 Route::post('/capnhatphongban/{id}',[PhongbanController::class,'capnhat_pb'])
 ->name('capnhat_pb');
 Route::get('/xoaphongban/{id}',[PhongbanController::class,'xoa_pb'])
 ->name('xoa_pb');



//Danh muc chuc vu
  Route::get('chucvu',[ChucvuController::class,'chucvu'])
  ->name('chucvu');
  Route::get('/themchucvu',[ChucvuController::class,'them_cv'])
  ->name('them_cv');
  Route::post('/luuchucvu',[ChucvuController::class,'luu_cv'])
  ->name('luu_cv');
  Route::get('/suachucvu/{id}',[ChucvuController::class,'sua_cv'])
  ->name('sua_cv');
  Route::post('/capnhatchucvu/{id}',[ChucvuController::class,'capnhat_cv'])
  ->name('capnhat_cv');
  Route::get('/xoachucvu/{id}',[ChucvuController::class,'xoa_cv'])
  ->name('xoa_cv');

  //Danh mục khen thưởng
  
  Route::get('khenthuong',[KhenthuongController::class,'khenthuong'])
  ->name('khenthuong');
   Route::get('/themkhenthuong',[KhenthuongController::class,'them_kt'])
  ->name('them_kt');
  Route::post('/luukhenthuong',[KhenthuongController::class,'luu_kt'])
  ->name('luu_kt');
  Route::get('/suakhenthuong/{id}',[KhenthuongController::class,'sua_kt'])
  ->name('sua_kt');
  Route::post('/capnhatkhenthuong/{id}',[KhenthuongController::class,'capnhat_kt'])
  ->name('capnhat_kt');
  Route::get('/xoa/{id}',[KhenthuongController::class,'xoa_kt'])
  ->name('xoa_kt');


    //Danh mục ky luat
  
  Route::get('kyluat',[KyluatController::class,'kyluat'])
  ->name('kyluat');
  Route::get('/themkyluat',[KyluatController::class,'them_kl'])
  ->name('them_kl');
  Route::post('/luukyluat',[KyluatController::class,'luu_kl'])
  ->name('luu_kl');
  Route::get('/suakyluat/{id}',[KyluatController::class,'sua_kl'])
  ->name('sua_kl');
  Route::post('/capnhatkyluat/{id}',[KyluatController::class,'capnhat_kl'])
  ->name('capnhat_kt');
  Route::get('/xoakyluat/{id}',[KyluatController::class,'xoa_kl'])
  ->name('xoa_kl');


// Route::group(['middleware'=>'hr'],function()
// {
 //Danh mục Hợp đồng

 Route::get('/hopdong',[HopdongController::class,'hopdong'])
  ->name('hopdong');
  Route::get('/themhopdong',[HopdongController::class,'them_hd'])
 ->name('them_hd');
 Route::post('/luuhopdong',[HopdongController::class,'luu_hd'])
 ->name('luu_hd');
 Route::get('/suahopdong/{id}',[HopdongController::class,'sua_hd'])
 ->name('sua_hd');
 Route::post('/capnhathopdong/{id}',[HopdongController::class,'capnhat_hd'])
 ->name('capnhat_hd');
 Route::get('/xoahopdong/{id}',[HopdongController::class,'xoa_hd'])
 ->name('xoa_hd');
 Route::get('/chitiethopdong/{id}',[HopdongController::class,'chitiet_hopdong'])
 ->name('chitiet_hopdong');

 //Danh mục Bảo Hiểm

 Route::get('baohiem',[BaohiemController::class,'baohiem'])
 ->name('baohiem');
  Route::get('/thembaohiem',[BaohiemController::class,'them_bhxh'])
 ->name('them_bhxh');
 Route::post('/luubaohiem',[BaohiemController::class,'luu_bhxh'])
 ->name('luu_bhxh');
 Route::get('/suabaohiem/{id}',[BaohiemController::class,'sua_bhxh'])
 ->name('sua_bhxh');
 Route::post('/capnhatbaohiem/{id}',[BaohiemController::class,'capnhat_bhxh'])
 ->name('capnhat_bhxh');
 Route::get('/xoabaohiem/{id}',[BaohiemController::class,'xoa_bhxh'])
 ->name('xoa_bhxh');
 Route::get('/chitietbaohiem/{id}',[BaohiemController::class,'chitiet_bhxh'])
 ->name('chitiet_bhxh');

  //Danh mục phep nam
  
  Route::get('phepnam',[PhepnamController::class,'phepnam'])
  ->name('phepnam');
  Route::get('themphepnam',[PhepnamController::class,'them_pn'])
  ->name('them_pn');
  Route::post('ajax',[PhepnamController::class,'ajax'])
  ->name('ajax');
  Route::post('/luuphepnam',[PhepnamController::class,'luu_pn'])
  ->name('luu_pn');
  Route::get('/suaphepnam/{id}',[PhepnamController::class,'sua_pn'])
  ->name('sua_pn');
  Route::post('/capnhatphepnam/{id}',[PhepnamController::class,'capnhat_pn'])
  ->name('capnhat_pn');
  Route::get('/xoaphepnam/{id}',[PhepnamController::class,'xoa_pn'])
  ->name('xoa_pn');
    
  //Du lieu cham cong
Route::get('/getform',[DulieuchamcongController::class,'getform'])
->name('getform');
Route::post('import',[DulieuchamcongController::class,'import'])
->name('import');
Route::get('/dulieuchamcong',[DulieuchamcongController::class,'dulieu_chamcong'])
->name('dulieu_chamcong');  
Route::get('/timkiemchamcong',[DulieuchamcongController::class,'timkiem_chamcong'])
->name('timkiem_chamcong');  
Route::get('/bangluong',[DulieuchamcongController::class,'bangluong'])
->name('bangluong'); 
Route::get('/chitietbangluong/{id}',[DulieuchamcongController::class,'chitiet_bangluong'])
->name('chitiet_bangluong'); 

//Demo Import_Excel
Route::get('/excel',[ExcelController::class,'import_excel'])
->name('excel');
Route::post('import',[ExcelController::class,'import'])
->name('import'); 


// });
  


//Product







});

//Gio hàng
// Route::get('/old_gh',[CartController::class,'old_gh'])
// ->name('old_gh');

Route::get('/shop', [ProductController::class, 'index'])
->name('shop');
Route::get('/giohang',[CartController::class,'giohang'])
->name('giohang');
Route::get('buy/{id}',[CartController::class,'buy'])
->name('buy');
Route::get('remove/{id}',[CartController::class,'remove'])
->name('remove');
Route::post('update',[CartController::class,'update'])
->name('update');
Route::get('/thanhtoan',[CartController::class,'payment'])
->name('payment');
Route::post('/chotdel',[CartController::class,'chotdeal'])
->name('chotdeal');
Route::get('/donhang',[CartController::class,'donhang'])
->name('donhang');
Route::get('/test',[NhanvienController::class,'test'])
->name('test');
Route::get('/hasmany',[PhongbanController::class,'hasmany'])
->name('hasmany');
Route::get('/belongstoMany',[Dactinh_SanphamController::class,'dactinh_sanpham'])
->name('dactinh_sanpham');

//Phan quyen_Role
Route::get('/role',[RoleController::class,'role'])
->name('role');
Route::get('/add_role',[RoleController::class,'add_role'])
->name('add_role');
Route::get('/timkiem_route',[RoleController::class,'timkiem_route'])
->name('timkiem_route');
Route::post('/luu_role',[RoleController::class,'luu_role'])
->name('luu_role');
Route::get('/chitiet_role/{id}',[RoleController::class,'chitiet_role'])
->name('chitiet_role');
Route::get('/chinhsua_role/{id}',[RoleController::class,'chinhsua_role'])
->name('chinhsua_role');
Route::post('/capnhat_role/{id}',[RoleController::class,'capnhat_role'])
->name('capnhat_role');
Route::get('/xoa_role/{id}',[RoleController::class,'xoa_role'])
->name('xoa_role');




//Phan quyen_User_Role
Route::get('/list_user',[AdminController::class,'list_user'])
->name('list_user');
Route::get('/add_user_role/{id}',[AdminController::class,'add_user_role'])
->name('add_user_role');
Route::post('/luu_user_role',[AdminController::class,'luu_user_role'])
->name('luu_user_role');
Route::get('/them_quyen/{id}',[AdminController::class,'them_quyen'])
->name('them_quyen');
Route::post('/capnhat_quyen/{id}',[AdminController::class,'capnhat_quyen'])
->name('capnhat_quyen');
Route::get('/pq',[AdminController::class,'pq'])
->name('pq');
//Function Account
Route::get('/',[AdminController::class,'dangnhap'])
->name('dangnhap');
Route::get('/dangky',[AdminController::class,'dangky'])
->name('dangky');
Route::post('/xulydangky',[AdminController::class,'xulydangky'])
->name('xulydangky');
Route::post('/xulydangnhap',[AdminController::class,'xulydangnhap'])
->name('xulydangnhap');
Route::get('/thoat',[AdminController::class,'thoat'])
->name('thoat');

//Kết nối API
Route::get('ketnoiapi',[Connect_APIController::class,'connect'])
->name('ketnoiapi');
Route::get('apilogin_form',[Connect_APIController::class,'apilogin_form'])
->name('apilogin_form');
Route::get('fetch_data',[MypostController::class,'fetch_data'])
->name('fetch_data');
Route::get('mypost',[MypostController::class,'mypost'])
->name('mypost');











// //demo cart giỏ hàng
// Route::get('/',[CartController::class,'show'])
// ->name('show');
// Route::get('/giohang',[CartController::class,'giohang'])
// ->name('giohang');
// Route::get('/xoa',[CartController::class,'xoa'])
// ->name('xoa');
// Route::get('add/{id}',[CartController::class,'add'])
// ->name('add');
// Route::get('store',[CartController::class,'store'])
// ->name('store');
// Route::get('check',[CartController::class,'check'])
// ->name('check');


//demo test
// Route::get('/test',function()
// {
  
//  $day1=Carbon::parse('08:00:00');
//  $day2=Carbon::parse('08:30:00');
//  $day=$day2-$day1;
//  dd($day);
// });
Route::get('gh',function()
{
  $aa=array('a'=>'2','b'=>'3');
  
  print_r($aa);
});
Route::get('vue',function()
{
  return view('vuejs.demo');
}

);
//Quan ly bang hang

Route::get('kho_banhang',[Kho_banhang_Controller::class,'kho_banhang'])
->name('kho_banhang');
Route::get('nhanvien_banhang',[Nhanvien_banhang_Controller::class,'nhanvien_banhang'])
->name('nhanvien_banhang');
Route::get('vattu_banhang',[Vattu_banhang_Controller::class,'vattu_banhang'])
->name('kho_banhang');
Route::get('nhacc_banhang',[Nhacc_banhang_Controller::class,'nhacc_banhang'])
->name('nhacc_banhang');
Route::get('nhapkho',[Nhapkho_Controller::class,'nhapkho'])
->name('nhapkho');
// Phieu nhap kho
Route::get('phieunhapkho',[Phieunhapkho_Controller::class,'phieunhapkho'])
->name('phieunhapkho');
Route::post('them_phieunhapkho',[Phieunhapkho_Controller::class,'them_phieunhapkho'])
->name('them_phieunhapkho');
Route::get('ajax_dsvattu',[Phieunhapkho_Controller::class,'ajax_dsvattu'])
->name('ajax_dsvattu');
//Route::post('luu_vattu',[Phieunhapkho_Controller::class,'luu_vattu'])
//->name('luu_vattu');
//invoice number
Route::get('invoice',[Invoice_Controller::class,'invoice'])
->name('invoice');
//Xuất PDF
Route::get('basic_view',[PDFController::class,'basic_view'])
->name('basic_view');
Route::get('sample_view',[PDFController::class,'sample_view'])
->name('sample_view');
//Jax Tìm kiem Shop
Route::get('timkiem_shop',[ProductController::class,'timkiem_shop'])
->name('timkiem_shop');


    

 


