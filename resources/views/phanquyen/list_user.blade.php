@extends('layout.main')
@section('main_body')
  <div class="container"> 
        <div class="card">         
                    <div class="card-header bg-primary">
                               <div class="row">
                                     <div class="col-md-12" align="center">
                                            <h1 class="btn text-light"> DANH SÁCH TÀI KHOẢN</h1>
                                     </div>                                  
                               </div>
                    </div>            
          <div class="card-body "> 
          <table class="table table-bordered ">
                                     <thread >
                                         </tr >
                                          
                                           <th align="center">TÀI KHOẢN</th>
                                           <th align="center">HỌ TÊN </th>
                                           <th align="center">EMAIL</th>
                                           <th align="center">SDT</th>
                                           <th align="center">ĐỊA CHỈ</th>
                                           <th align="center">TÙY CHỈNH</th>
                                          </tr>
                                     </thread>
                                    
                                     <tbody>
                                     @foreach ($data as $dt)
                                     <tr>
                                     
                                        <td>{{$dt->name}}</td>
                                        <td>{{$dt->hoten}}</td>
                                        <td>{{$dt->email}}</td>
                                        <td>{{$dt->sdt}}</td>
                                        <td>{{$dt->diachi}}</td>
                                        <td class="td-actions">
                        <a href="{{URL::route('add_user_role',$dt->id)}}" class="btn-xs btn-danger"><i class="btn-icon-only icon-edit">Ph.Quyền</i></a>

                        <a href="" class="btn-xs btn-danger">
                          
                        </a>
                    </td>
                                     </tr>
                                       @endforeach 
                                   
                                    </tbody>
                               </table>
         </div>
 
</div>




          </div>

   
    @endsection
