@extends('layout.main')
@section('main_body')

          
        
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> DANH SÁCH NHÂN VIÊN</h1>
                                  </div>
                    
                     </div>
</div>
</br>

<div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col-lg-3">
   <form class="form-inline" action="{!! route('timkiem')!!}" method="GET">
             <input class="form-control mr-1 font-italic" type="search" name="timkiem" placeholder="Tìm theo tên" aria-label="Search">
             <button class="btn btn-danger" type="submit"><i class="fa fa-search" style="width:18px; font-size:18px;"></i></button>
  </form>
</div>
<div class="col-lg-3">
    <a href="{!! URL::route('them_nv')!!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a>
</div>
</div>
<br>
                   <div class="card-body">
                  
                   @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                          
                                           <th align="center">MÃ NHÂN VIÊN</th>
                                           <th align="center">HỌ TÊN NHÂN VIÊN</th>
                                           <th align="center">ĐỊA CHỈ</th>
                                           <th align="center">GIỚI TÍNH</th>
                                           <th align="center">ĐỊA CHỈ</th>
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($nhanvien as $sv)
                                     <tr>
                                     
                                        <td>{{$sv->ma_nv}}</td>
                                        <td>{{$sv->hoten_nv}}</td>
                                        <td>{{$sv->diachi_nv}}</td>
                                        <td>{{$sv->gioitinh_nv}}</td>
                                        <td>{{$sv->sdt_nv}}</td>
                                        <td class="td-actions">
                        <a href="{!! URL ::route('sua_nv',$sv->id)!!}" class="  btn btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL ::route('xoa_nv',$sv->id)!!}" class="  btn btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                             {{$nhanvien->links("pagination::bootstrap-4")}}
                 
                  
                 
                 </div >   
              </div>
           </div>
           

       @endsection

