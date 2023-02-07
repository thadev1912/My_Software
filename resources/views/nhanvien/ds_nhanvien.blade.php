@extends('layout.main')
@section('main_body')
      
          
      
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md align="center">
                                       <h1 class="btn text-light"> DANH SÁCH NHÂN VIÊN</h1>
                                  </div>
                    
                     </div>
</div>
</br>

<div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col-lg-3">
   <form class="form-inline" action="{!! route('timkiem_dsnhanvien')!!}" method="GET">
             <input class="form-control mr-1 font-italic" type="search" name="timkiem_dsnhanvien" placeholder="Tìm theo tên" aria-label="Search">
             <button class="btn btn-danger" type="submit"><i class="fa fa-search" style="width:18px; font-size:18px;"></i></button>
  </form>
</div>
<div class="col-lg-3">
    <a href="{!! URL::route('them_nv')!!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a>
</div>
</div>
<br>
       
                   <div class="card-body overflow-x:auto ">
                   @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                          
                                           <th>MÃ SỐ</th>
                                           <th align="center">TÊN NHÂN VIÊN</th>
                                           <th align="center">PHÒNG BAN</th>
                                           <th align="center">CHỨC VỤ</th>
                                           <th align="center">ĐỊA CHỈ</th>
                                           <th align="center">GIỚI TÍNH</th>
                                           <th align="center">ĐỊA CHỈ</th>
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($result as $sv)
                                     <tr>
                                     
                                        <td>{{$sv->ma_nv}}</td>
                                        <td>{{$sv->hoten_nv}}</td>
                                        <td>{{$sv->ten_pb}}</td>
                                        <td>{{$sv->ten_cv}}</td>
                                        <td>{{$sv->diachi_nv}}</td>
                                        <td>{{$sv->gioitinh_nv}}</td>
                                        <td>{{$sv->diachi_nv}}</td>
                                        <td class="td-actions">
                                        <a href="{!! URL::route('chitiet_nhanvien',$sv->id)!!}" class="btn-sm btn-primary"><i class="btn-icon-only icon-edit">Xem Chi Tiết</i></a>           
                      

                       
                       
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                             {{$result->links("pagination::bootstrap-4")}}
                             <br>
           <div> <a href="{!! URL::route('nhanvien')!!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Quay Lại</i></a> <br></div>   
           </div>
                  
                 
                 </div >   
              </div>
             
          
      
       @endsection

