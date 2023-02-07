<?php

namespace App\Http\Controllers;
use App\Http\Requests\CreatePostFormRequest;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;
use Auth;
use DB;
use Validator;
class PostController extends Controller
{
  public function check_login(Request $request)
   {
    if(Auth::attempt(
      [
          'name'=>$request->username,
          'password'=>$request->pass,
          
      ]))
      {
        $user=Auth::guard()->user();
        $info= User::where('name',$request->username)->first();
        //Auth::login($info);       
        $token =  $user->createToken('MyApp')-> accessToken;       
        //$request->headers->set('X-Authorization',$token);
        return response()->json([
           'user'=>$info,
           'token'=>$token,
           'messeage'=>'Đăng nhập thành công!!!',
           'status'=>200,
        ]);
      }
      else
      {
        return response()->json([
         
          'messeage'=>'Đăng nhập thất bại!!!',
          'status'=>404,
       ]);
      }
      }
      public function check()
      {
        $user=Auth::guard('api')->user();
       // dd($user);
        if(Auth::guard('api')->check())
        {
        
        return response()->json([
              //'user'=>$user,          
               'messeage'=>'Kết nối dữ liệu thành công!!!',
               'status'=>200,
                            ]);
         }
      else
      {
        return response()->json([
          //'user'=>$user,
         
          'messeage'=>'Chưa có token !!!',
          'status'=>505,
       ]);
      }
         

      }
      public function chitiet()
       {
        // $user=Auth::guard('api')->user();
                
        if( Auth::guard('api')->check())
        {
          $user=Auth::guard('api')->user();
        return response()->json([
          //'user'=>$user,
          'user'=>$user,
          'messeage'=>'Lấy dữ liệu thành công!!!',
          'status'=>200,
       ]);
      }
      else
      {
        return response()->json([
          //'user'=>$user,
         
          'messeage'=>'Bạn chưa đăng nhập !!!',
          'status'=>404,
       ]);
      }
       }
      public function thoat_api() {
        if( Auth::guard('api')->check())
        {
        $user=Auth::guard('api')->user();
        $user->tokens()->delete();
        $token=null;
        return response()->json([
          'token'=>$token,         
          'messeage'=>'Xoá token thành công !!!',
          'status'=>200,

       ]);
      }
      else
      {
        return response()->json([
          //'user'=>$user,
         
          'messeage'=>'Bạn chưa đăng nhập !!!',
          'status'=>404,
       ]);
      }
    }
         
   public function index()
     {
               $data=Post::all(); 
      
        if($data)
        {
                return response()->json([
                'data'=>$data,
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
     public function store(CreatePostFormRequest $request)
     {
      $data=Post::create([
        'ma_post'=>$request->ma_post,
        'title_post'=>$request->title_post,
        'content_post'=>$request->content_post,
        'danhmuc_post'=>$request->danhmuc_post,
      ]);
      if($data)
      {
        return response()->json([
        'data'=>$data,
        'status'=>true,
        'messege'=>'Thêm bài viết thành công rồi cha nội_ vãi!!!',      
        ]);
      }
      else
      {
        return response()->json([
          'status' => false,
          'msg' =>'Vui lòng kiểm tra lại',        
          ]);
      }
      }
    //    $validator = Validator::make($request->all(), [
    //      'ma_post' => 'required',
    //      'title_post' => 'required',
    //      'content_post' => 'required',
    //      'danhmuc_post' => 'required',
    //  ],
    // [
    //   'ma_post.required' =>'Mã bảo hiểm xã hội không được để trống',
    //   'title_post.required' =>'Mã nhân viên không được để trống',
    //   'content_post.required' =>'Mã nhân viên không được để trống',
    //   'danhmuc_post.required' =>'Ngày cấp không được để trống',
    // ]);
    //  if( $validator->fails())
    //  {
    //    return response()->json([
    //      'errors'=>$validator->errors()->all(), //hàm kiểm tra lỗi tất cả errors
    //      'status'=>400,
    //      'messege'=>'Vui lòng kiểm tra lại!!!',
    //      ]);
    //  }
       
    //      //dd($data);
    //      else
    //      {
           
         
        

    
     public function edit($id)
      {
        $data=Post::find($id);
        if($data)
        {
                return response()->json([
                'data'=>$data,
                 'status'=>200,
                 'messege'=>'Trời cập nhật thành công rồi kìa!!!',
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
    
      public function update(Request $request,$id)
       {
        $data=Post::find($id)->update([
            'ma_post'=>$request->ma_post,
            'title_post'=>$request->title_post,
            'content_post'=>$request->content_post,
            'danhmuc_post'=>$request->danhmuc_post,
          ]);
 
          if($data)
          {
              return response()->json([
              'data'=>$data,
              'status'=>200,
              'messege'=>'Trời cập nhật được hã cha nội!!!',
              ]);
          }
          else
         {
            return response()->json([
                'data'=>null,
                'status'=>400,
                'messege'=>'Vui lòng kiểm tra lại!!!',
                ]);
         }
       }
       public function destroy($id)
        {
           $data=Post::find($id)->delete();
           if($data)
              {
                return response()->json([
                    'data'=>$data,
                    'status'=>200,
                    'messege'=>'Đã xóa thành công rồi má ơi!!!',
                ]);
              }
            else
            {
                return response()->json([
                    'data'=>$data,
                    'status'=>404,
                    'messege'=>'Vui lòng kiểm tra lại!!!',
                ]);
            }
        }
    
}
