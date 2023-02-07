@extends('layout.main')
@section('main_body')
<?php
use Carbon\Carbon;
?>
          
        
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> THÔNG KÊ CHẤM CÔNG</h1>
                                  </div>
                    
                     </div>
</div>
</br>

<div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col-lg-5">
   <form class="form-inline" action="" method="GET">
             <input class="form-control mr-1 font-italic" type="search" name="timkiem_ten" value="{!! old('timkiem_ten') !!}" placeholder="Tìm theo mã hoặc tên..." aria-label="Search">
             <input class="form-control mr-1 font-italic" type="date" name="timkiem_ngay"> 
             <button class="btn btn-danger" type="submit"><i class="fa fa-search" style="width:18px; font-size:18px;"></i></button>
  </form>
</div>
<div class="col-lg-3">
    <a href="" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a>
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
                                        
                                           <th align="center">CHỨC VỤ</th>
                                           <th align="center">PHÒNG BAN</th>
                                           <th align="center">NGÀY CHẤM CÔNG</th>
                                           <th align="center">GIỜ VÀO</th>
                                           <th align="center">GIỜ RA</th>
                                           <th align="center">NGÀY CÔNG</th>
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     
                                     @foreach ($data as $re)
                                     <tr>
                                     
                                        <td>{{$re->ma_nv}}</td>
                                        
                                        <td>{{$re->ma_cv}}</td>
                                        <td>{{$re->ma_pb}}</td>                                      
                                        <td>{{Carbon::parse($re->ngay_chamcong)->format('d-m-Y')}}</td>
                                        <td>{{Carbon::parse($re->gio_vao)->format('H:i:A')}}</td>
                                        <td>{{Carbon::parse($re->gio_ra)->format('H:i:A')}}</td>
                                        <td>{{(Carbon::parse($re->gio_ra)->diffInHours(Carbon::parse($re->gio_vao))-1.0)/8}}</td>
                                        <td class="td-actions">
                        <a href="" class="  btn-xs btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="" class="  btn-xs btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   

                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                           
                           
                        
                          
                            
                       
                 
                  
                 
                 </div >   
              </div>
           </div>
           

       @endsection

