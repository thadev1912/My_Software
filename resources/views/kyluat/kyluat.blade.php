@extends('layout.main')
@section('main_body')

          
        
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> DANH SÁCH KỶ LUẬT</h1>
                                  </div>
                    
                     </div>
</div>
</br>
<div> <a href="{!! URL::route('them_kl')!!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Thêm mới</i></a> <br></div> 
                   <div class="card-body">
                   @if(Session::has('thongbao'))
                      <div class="alert alert-success">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
                                <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                           <th align="center">STT</th>
                                           <th align="center">MÃ NHÂN VIÊN</th>
                                           <th align="center">TÊN NHÂN VIÊN</th>
                                           <th align="center">SỐ TIỀN</th>
                                           <th align="center">NGÀY KỶ LUẬT</th>
                                           <th align="center">LÝ DO</th>                                          
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($kyluat as $kl)
                                     <tr>
                                        <td>{{$kl->id}}</td>
                                        <td>{{$kl->ma_nv}}</td>
                                        <td>{{$kl->hoten_nv}}</td>
                                        <td>{{$kl->sotien}}</td>
                                        <td>{{$kl->ngay_kyluat}}</td>
                                        <td>{{$kl->lydo}}</td>                                      
                                        <td class="td-actions">
                        <a href="{!! URL ::route('sua_kl',$kl->ma_nv)!!}" class="btn btn-primary"><i class="btn-icon-only icon-edit">Sửa</i></a>

                        <a href="{!! URL ::route('xoa_kl',$kl->ma_nv)!!}" class="btn btn-danger">
                            <i class="btn-icon-only icon-remove">Xóa</i>
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                             {{$kyluat->links("pagination::bootstrap-4")}}
                 
                  
                 
                 </div >   
              </div>
           </div>
           

      
       @endsection

