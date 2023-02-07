<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Models\Role;
use App\Models\User_Role;
use App\Models\Role_Permission;
use Auth;
use DB;

class AdminController extends Controller
{
    
    public function dangnhap()
      {
     
        return view('admin.dangnhap');
      }
      public function dangky()
      {
        return view('admin.dangky');
      }
    public function xulydangky(Request $request)
     {
       $user=new User;
       $user->name=$request->username;
       $user->hoten=$request->hoten;
       $user->sdt=$request->sdt;
       $user->diachi=$request->diachi;
       $user->email=$request->email;
       $user->password=bcrypt($request->pass);
       $user->permision='1';
       $user->avatar='sieuga.jpg';
      
    
       $user->save();
      
       //dd($user);
       return redirect()->route('dangnhap')->with('thongbao',"Đã đăng ký thành công!!!");
     }
     public function xulydangnhap(Request $request)
      {
        $username=$request->username;
        if(Auth::attempt(
            [
                'name'=>$request->username,
                'password'=>$request->pass,
                
            ]))
            {
                $user= User::where('name',$username)->first();
                $per=$user->permision;
               // dd($per);
                Auth::login($user); 
                if($per==1)
                {              
                    //return redirect()->route('nhanvien')->with('thongbao','Đăng nhập thành công!!!'); 
                    return redirect()->route('nhanvien')->with('thongbao','Đăng nhập thành công!!!'); 
                } 
                // else
                // {
                //     return redirect()->route('')->with('thongbao','Đăng nhập thành công!!!'); 
                //    // return redirect()->route('shop')->with('thongbao','Đăng nhập thành công!!!'); 
                // }              
            }
                   return redirect()->route('dangnhap')->with('thongbao','Tài khoản và mật khẩu chưa đúng!!!');

     
            }
            public function login_api(Request $request)
            {
              if(Auth::attempt(
                [
                  'name'=>$request->username,
                  'password'=>$request->pass,
                    
                ]))
                 {           
                   $user=Auth::guard('api')->user();                                             
                   $token = $user->createToken('hr')->accessToken;                 
                    return response()->json([                    
                     'user'=>$user,                   
                     'token'=>$token,
                     'status'=>200,
                     'message'=>'Đăng nhập thành công!!!',
                    ]);
                 }
                 else
                 {
                  return response()->json([
                   
                     'status'=>404,
                     'message'=>'Đăng nhập thất bại!!!',

                    ]);
                 }
            }
            public function detail()
             {
              if(Auth::guard('api')->check())
               {
                $info=Auth::guard('api')->user(); 
               }
             
             
        //cách return đúng kiểu json:
        if($info)
        {
                return response()->json([
                'data'=>$info,
                 'status'=>200,
                 'messege'=>'thành công',
                ]);
                }
        else
        {
                return response()->json([
                 'data'=>null,   
                 'stats'=>404,
                 'messege'=>'kết nối lỗi rồi đó',
                ]);
        }
             }
        public function thoat()
           {
             Auth::logout();
             return redirect()->route('dangnhap')->with('thongbao','Bạn đã đăng xuất thành công!!!');

           }    
          public function list_user()
           {
               $data=User::all();            
               return view('phanquyen.list_user',compact('data'));
           }

       public function add_user_role($id)
            {
              $info=User::where('id',$id)->first();
              $data=User_Role::where('name',$id)
              ->join('permission_role','role_user.role_name','=','permission_role.id')
              ->get();              
              //dd($data);    
              return view('phanquyen.add_user_role',compact('data','info'));
            }
       public function luu_user_role(Request $request)
            {
                           
              //dd($request->all());
              //load dữ liệu của id_user    
               $name=$request->txt_taikhoan; 
               $result1=User::where('name',$name)->first();
               $id_user=$result1->id;
               //load dữ liệu của id_user  
                $checkbox=$request->input('txt_checkbox');
                $result2=Role_Permission::where('role_name',$checkbox)->first();
                $id_role=$result2->id;              
                
             // $roles=json_encode($request->role);
               User_Role::create([
                          'name'=>$id_user,
                          'role_name'=>$id_role,
    
                               ]);
    
            }  
            public function them_quyen($id)
             {
              $data=Role_Permission::all();
              //dd($data);   
              $info=User::find($id);
                         
              $get_checked=$info->getPermissions->pluck('role_name')->toArray(); //quét các checkbox đã chọn trong user đó
              //dd($get_checked);
               return view('phanquyen.themquyen',compact('data','get_checked','info'));
             } 
             public function capnhat_quyen(Request $request,$id)
             {
              $user_id=$id;
           
            
              //$roles=json_encode($request->role); ==> lưu ý json_encode không phải là mạng array nha!!! 
              //dd($request->role);        
              if(is_array($request->role))
              {
                User_Role::where('name',$id)->delete();
                    foreach($request->role as $rs)
                        {
                            User_Role::create([
                            'name'=>$id,
                            'role_name'=>$rs,
                          ]);
                        }
              
               }
                return redirect()->route('add_user_role',$id);
             }  
            public function pq()
             {
              
            $result=User::all();
          //  dd($result);
            foreach($result as $rs)
              {
                echo $rs->name;
                echo '<br>';
                
                //dd($rs->getPermissions);
                foreach($rs->getPermissions as $info)
               
                   {
                   echo $info->permissions;
                    echo '<br>';
                   }
                   echo '<hr>';
              }
             }

}
