@extends('layout.main')
@section('main_body')
  <div class="container"> 
        <div class="card">         
                    <div class="card-header bg-primary">
                               <div class="row">
                                     <div class="col-md-12" align="center">
                                            <h1 class="btn text-light"> ĐIỀU CHỈNH PHÂN QUYỀN</h1>
                                     </div>                                  
                               </div>
                    </div>
                    <form action="{{URL::route('luu_user_role')}}" method="post">  
                        @csrf          
          <div class="card-body "> 
           <div class="row">
                   <div class="col-6">
                   <div class="card-header bg-danger text-center">                               
                                     <div class="col-md-6" >
                                            <h1 class="btn text-light"> THÔNG TIN TÀI KHOẢN</h1>
                                     </div>
                                     </div>
                                     
                   <div class="card-body">
                   <label>Tài Khoản:</label>
                        <input id="current-pass-control" name="txt_taikhoan" class="form-control" type="text" value="{{$info->name}}">                  
                   <label>Họ Tên:</label>
                        <input id="current-pass-control" name="txt_hoten" class="form-control" type="text" value="{{$info->hoten}}">                   
                   <label>Email:</label>
                        <input id="current-pass-control" name="txt_email" class="form-control" type="text" value="{{$info->email}}">
                    <label>Số Điện Thoại:</label>
                        <input id="current-pass-control" name="txt_sdt" class="form-control" type="text" value="{{$info->sdt}}">
                    <label>Địa chỉ:</label>
                        <input id="current-pass-control" name="txt_diachi" class="form-control" type="text" value="{{$info->diachi}}">
                    </div>                                                   
                
                   </div>
                   <div class="col-6">
                   <div class="card-header bg-danger">                               
                                     <div class="col-md-6">
                                            <h1 class="btn text-light"> THÔNG TIN NHÓM QUYỀN</h1>
                                     </div>                                  
                  </div>
                  <br> 
                  @foreach($data as $dt)
               
                  <div class="form-check">
                           <input class="form-check-input" type="checkbox" disabled =true name="txt_checkbox" value="{{$dt->role_name}}" id="flexCheckChecked" checked>
                           <label class="form-check-label" for="">{{$dt->role_name}}</label>
                 </div>
                 
                   @endforeach
                <hr>
                <a href="{{URL::route('them_quyen',$info->id)}}" class="btn-xs btn btn-primary"><i class="btn-icon-only icon-edit">Điều chỉnh Nhóm Quyền</i></a>
           </div>
</div>
<div class="col">
              <button class="btn btn-info" type="submit">LƯU LẠI</button>
              </form> 
              </div>
          </div>
    </div> 
   
    @endsection
