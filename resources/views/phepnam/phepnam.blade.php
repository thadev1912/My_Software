<?php
use Carbon\Carbon;
?> 
@extends('layout.main')
@section('main_body')

          
        
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> DANH SÁCH PHÉP NĂM</h1>
                                  </div>
                    
                     </div>
</div>
</br>
<div> <a href="{!! URL::route('them_pn') !!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a> <br></div> 
                   <div class="card-body">
                  
                   @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                          
                                           <th align="center">MÃ NV</th>
                                           <th align="center">TÊN NHÂN VIÊN</th>
                                           <th align="center">NGÀY N. VIỆC</th>                                           
                                           <th align="center">TỔNG PHÉP NĂM</th>
                                           <th align="center">PHÉP ĐÃ DÙNG</th>
                                           <th align="center">PHÉP TỒN</th>
                                           <th align="center">NGÀY NGHỈ VIỆC</th>
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($phepnam as $pn)
                                     <tr>
                                     
                                        <td>{{$pn->ma_nv}}</td>
                                        <td>{{$pn->hoten_nv}}</td>
                                        <td>{{$pn->ngay_batdau}}</td>
                                         @if($pn->ngay_ketthuc)
                                        <td>{{ floor(Carbon::parse($pn->ngay_ketthuc)->diffInDays(Carbon::parse($pn->ngay_batdau))/30) }}</td>
                                        @else
                                        <td>{{ floor(Carbon::now()->diffInDays(Carbon::parse($pn->ngay_batdau))/30) }}</td>
                                        @endif
                                        <td>{{$pn->phepnam_dadung}}</td>                                        
                                        <td>{{floor(Carbon::parse($pn->ngay_ketthuc)->diffInDays(Carbon::parse($pn->ngay_batdau))/30)-$pn->phepnam_dadung}}</td>     
                                        <td>{{$pn->ngay_ketthuc}}</td>
                                        <td class="td-actions">
                        <a href="{!! URL::route('sua_pn',$pn->id) !!}" class="  btn-xs btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL::route('xoa_pn',$pn->id) !!}" class="  btn-xs btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                             {{$phepnam->links("pagination::bootstrap-4")}}
                 
                  
                 
                 </div >   
              </div>
           </div>
           

       @endsection

