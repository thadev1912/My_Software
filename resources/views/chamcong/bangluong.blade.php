@extends('layout.main')
@section('main_body')
<?php
use Carbon\Carbon;
use Illuminate\Support\Str;
?>
          
        
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> THÔNG KÊ LƯƠNG</h1>
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
                   @php
                       $tong = 0;
                   @endphp
                   @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >                                          
                                           <th align="center">MÃ NHÂN VIÊN</th>                                                                          
                                           <th align="center">TÊN NHÂN VIÊN</th>  
                                           <th align="center">PHÒNG BAN</th>                                                   
                                           <th align="center">CÔNG</th>                                             
                                           <th align="center">TỔNG LƯƠNG </th>                                             
                                           <th align="center">THỰC LÃNH</th>       
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     
                                     @foreach ($data as $re)
                                     <tr>
                                     
                                       <td>{{$re->ma_nv}}</td>                                   
                                       <td>{{$re->hoten_nv}}</td>   
                                       <td>{{$re->ten_pb}}</td>                                                        
                                       <td>{{floor($re->total)}}</td>                                       
                                       <td>{{(number_format(floor($re->heso_luong/26*$re->total),0,','))}} VND</td>                                      
                                       <td>{{number_format($total=floor($re->heso_luong/26*$re->total) +$re->phu_cap),0,','}} VND</td>
                                       <td class="td-actions">
                                       <a href="{!! URL::route('chitiet_bangluong',$re->ma_nv)!!}" class="btn-sm btn-primary"><i class="btn-icon-only icon-edit">Xem Chi Tiết</i></a>     

                        
                    </td>
                                     </tr>
                                     
@php
    $tong += $total;
@endphp
                                       @endforeach 
                                   <tr>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                    <td><strong>Tổng lưởng tháng:<strong></td>
                                    <td><strong>{{number_format($tong),0,','}} VND<strong></td>
                                   </tr>

                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                           
                           
                        
                          
                            
                       
                 
                  
                 
                 </div >   
              </div>
           </div>
           

       @endsection

