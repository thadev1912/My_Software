@extends('layout.main')
@section('main_body')
  <div class="container"> 
        <div class="card">         
                    <div class="card-header bg-primary">
                               <div class="row">
                                     <div class="col-md-12" align="center">
                                            <h1 class="btn text-light"> CẬP NHẬT NHÓM QUYỀN</h1>
                                     </div>                                  
                               </div>
                    </div>            
          <div class="card-body "> 
        <a href="{{URL::route('add_role')}}" class="btn-xs btn btn-info mb-3"><i class="btn-icon-only icon-edit">Thêm Mới Nhóm Quyền</i></a>
       
   <form action="{{URL ::route('capnhat_quyen',$info->id)}}" method="post">
      @csrf
<table class="table table-bordered text-center">
<tr>
     <th>Mã Quyền</th>
     <th>Nhóm Quyền</th>
     <th>Tùy Chỉnh</th>
     
</tr>
 @php $user=$info->id;
 @endphp
@foreach($data as $dt)

<tr>
      <td>
      {{$dt->id}} 
      </td>
      <td> 
     
               <div class="form-check">
               @php
       //dd($get_checked);
   $checked=in_array($dt->role_name,$get_checked) ? 'checked':'123';
  
@endphp
                        <input class="form-check-input" type="checkbox" name="role[]" value="{{$dt->id}}" id="flexCheckDefault" {{$checked}}>
                        
                        <label class="form-check-label" for="">{{$dt->role_name}}</label>
              </div>
              
               
                </td>
                <td>
                <a href="{{URL ::route('chitiet_role',$dt->id)}}" class="btn-xs btn btn-success"><i class="btn-icon-only icon-edit">Xem Chi Tiết Quyền</i></a>
                <a href="{{URL ::route('chinhsua_role',$dt->id)}}" class="btn-xs btn btn-danger"><i class="btn-icon-only icon-edit">Chỉnh Sửa Quyền</i></a>
                <a href="{{URL ::route('xoa_role',$dt->id)}}" class="btn-xs btn btn-warning"><i class="btn-icon-only icon-edit">Xóa Quyền</i></a> 
                
            </td>
                </tr>
                @endforeach
</table>
<button class="btn-xs btn btn-danger" type="submit"><i class="btn-icon-only icon-edit">Cập Nhật Nhóm Quyền</i></button>
<a href="" class="btn-xs btn btn-primary"><i class="btn-icon-only icon-edit">Quay Lại </i></a>
</div>
</div>
    @endsection
