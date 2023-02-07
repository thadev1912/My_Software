@extends('layout.main')
@section('main_body')
  <div class="container"> 
        <div class="card">         
                    <div class="card-header bg-primary">
                               <div class="row">
                                     <div class="col-md-12" align="center">
                                            <h1 class="btn text-light"> CHI TIẾT NHÓM QUYỀN</h1>
                                     </div>                                  
                               </div>
                    </div>            
          <div class="card-body "> 
            <form action="{{URL::route('capnhat_role',$data->id)}}" method="post">
                  @csrf
          <label for="sel1" class="form-label text-danger">Tên nhóm Quyền</label>
    <input class="form-control mr-1 font-italic" type="text" name="ten_quyen" value ="{{$data->role_name}}"placeholder="Thêm tên nhóm">
    @php $total=0; @endphp             
    <table>
                  <tr>
                       
                 @foreach($all_route as $per)
                 <td>
                 <div class="form-check">
                 @php
                  //dd($permission);
                 $checked=in_array($per,$permission) ? 'checked':'';
         
                 @endphp
                 <input class="form-check-input" type="checkbox"  name="route[]" value="{{$per}}" id="flexCheckDefault" {{$checked}} >
                        
                        <label class="form-check-label" for="">{{$per}}</label>
              </div>
                   
                    </td>
                    @php
             $total=$total+1;
             @endphp  
             @if($total %6==0)
                      @php echo "</tr>"; @endphp 
             
               @endif  
               @endforeach      
                  
                 </table>
                    <button class="mt-3  btn-xs btn btn-danger" type="submit"><i class="btn-icon-only icon-edit">Cập Nhật Nhóm Quyền</i></button>
                    <a href="{{ url()->previous() }}" class="mt-3 btn-xs btn btn-primary"><i class="btn-icon-only icon-edit">Quay lại</i></a>
                  </form>
</div>
</div>
    @endsection
