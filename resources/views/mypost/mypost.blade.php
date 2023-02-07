@extends('layout.main')
@section('main_body')

          
        
               <div class="card-header bg-danger">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-light"> DỮ LIỆU HỆ THỐNG API</h1>
                                  </div>
                    
                     </div>
</div>
</br>

<div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col-lg-3">
   <form class="form-inline" action="" method="GET">
             <input class="form-control mr-1 font-italic" type="search" name="timkiem" placeholder="Tìm theo tên" aria-label="Search">
             <button class="btn btn-danger" type="submit"><i class="fa fa-search" style="width:18px; font-size:18px;"></i></button>
  </form>
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
                                          
                                           <th align="center">MÃ BÀI VIẾT</th>
                                           <th align="center">TIÊU ĐỀ BÀI VIẾT</th>
                                           <th align="center">NỘI DUNG BÀI VIẾT</th>
                                           <th align="center">DANH MỤC BÀI VIẾT</th>
                                           <th align="center">NGÀY TẠO</th>
                                          
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($data as $dt)
                                     <tr>
                                     
                                        <td>{{$dt->id_baiviet}}</td>
                                        <td>{{$dt->tieude_baiviet}}</td>
                                        <td>{{$dt->noidung_baiviet}}</td>
                                        <td>{{$dt->danhmuc_baiviet}}</td>
                                        <td>{{$dt->created_at}}</td>
                                       
                                        
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
                             <!--code gọi phân trang-->
                             {{$data->links("pagination::bootstrap-4")}}
                 
                  
                 
                 </div >   
              </div>
           </div>
           

       @endsection

