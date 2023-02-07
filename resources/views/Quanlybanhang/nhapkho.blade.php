@extends('layout.main')
@section('main_body')
@section('javascript')
<div class="card-header ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-info">  PHIẾU NHẬP KHO</h1>
                                  </div>
                    
                     </div>
            
                   

                

<br>
<form action="{{ URL::route('them_phieunhapkho')}}" method="POST">
<input type="hidden" name="_token" value="{!! csrf_token() !!}" />
<div class="row">
 <div class="col-6">
 <div class="form-group">          
    <input type="text" class="form-control" id="txt_maphieu" name="txt_maphieu" value="{{$invoice_number}}" placeholder="Nhập mã phiếu">
  </div>   
 </div>
 <div class="col-6">
 <input type="date" class="form-control" id="txt_ngaynhap" name="txt_ngaynhap" placeholder="Chọn ngày">
 </div>
</div>
<div class="row">
    <div class="col-6">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Vui lòng chọn Nhà Cung Cấp bên dưới:</label>
    <select class="form-control" id="txt_nhacc" name="txt_nhacc">
    <option>---Chọn----</option>
     @foreach($nhacc as $item)
     <option value="{{ $item->ma_nhacc}}">{{ $item->ten_nhacc}}</option>
     @endforeach
    </select>
  </div>   
    </div>
    <div class="col-6">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Vui lòng chọn Địa chỉ bên dưới:</label>
    <input type="text" class="form-control" id="txt_diachi" name="txt_diachi" placeholder="Địa chỉ nhà cung cấp">
  </div>   
    </div>
</div>
<div class="row">
    <div class="col-6">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Vui lòng chọn kho bên dưới:</label>
    <select class="form-control" id="txt_kho" name="txt_kho">
    <option>---Chọn----</option>
     @foreach($kho as $item)
     <option value="{{ $item->ma_kho}}">{{ $item->ten_kho}}</option>
     @endforeach
    </select>
  </div>   
    </div>
    <div class="col-6">
    <div class="form-group">
    <label for="exampleFormControlSelect1">Vui lòng chọn nhân viên</label>
    <select class="form-control" id="txt_nhanvien" name="txt_nhanvien">
    <option>---Chọn----</option>
     @foreach($nhanvien as $item)
     <option value="{{ $item->ma_nhanvien}}">{{ $item->ten_nhanvien}}</option>
     @endforeach
    </select>
  </div>   
    </div>
</div>
 

<!-- kết thúc xem xét kỷ luật  -->
<br>  
<div class="row">
  <div class="col-6">

  </div>
  <div class="col-6">
  <div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-danger" id="luu_phieu" name="action" value="CONFIRM"><i class="icon-save"></i>Lưu Phiếu</button>
                    <button id="submit-button" type="submit" class="btn btn-warning" name="action" value="CONFIRM"><i class="icon-save"></i>Sửa Phiếu</button>              
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>Thoát</button>
                   
</div>
<script type="text/javascript">

    function clear_vattu() {
      alert('bạn có thật muốn thoát không');
      var _token = $("input[name='_token']").val();
                              var ma_phieu = $("input[name='txt_maphieu']").val(); 
         
           
            $.ajax({
              url:'http://localhost/sieuga/Quanlynhansu/public/api/xoa_vattu/'+ma_phieu+'',
              method:'GET',
              headers: {
                                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                              "Content-Type": "application/x-www-form-urlencoded",
                                             
                                            }, 
             
              success:function(res)
              {
                if(res.status==true)
                 {
                 // $('input[type="text"],textarea').val('');  
                  $('#load').html('');
                  load();
                 }
                 else
                 {
                  alert('Kết nối lỗi!!!');
                 }

              }
           });
    }
    </script>
  </div>
  
</div>

</form>
<p class="text-danger">Danh Sách Vật Tư</p>
<form action="" method="get" id="them_vattu">
        @csrf
<div class="row">
 <div class="col-3">
 <div class="form-group">          
 <select class="form-control" id="ma_vattu" name="ma_vattu">
    <option>---Chọn----</option>
     @foreach($vattu as $item)
     <option value="{{ $item->ma_vattu}}">{{ $item->ten_vattu}}</option>
     @endforeach
    </select>
  </div>   
 </div>
 <div class="col-3">
 <div class="form-group">          
 <select class="form-control" id="dvt_vattu" name="dvt_vattu">
    <option>---Chọn----</option>
     @foreach($vattu as $item)
     <option value="{{ $item->dvt_vattu}}">{{ $item->dvt_vattu}}</option>
     @endforeach
    </select>
 </div>
 </div>
 <div class="col-3">
    <input type="text" class="form-control" id="soluong" name="soluong" placeholder="Nhập số lượng">
 </div>
 <div class="col-3">
 <button class="btn btn-primary" id="submit" type="submit" name="submit"  value="" >Thêm Vật Tư</button>
</div>

</form>
<script type="text/javascript">
   // load du lieu vao form
     load();
   function load()
              {
                var ma_phieu = $("input[name='txt_maphieu']").val();
                //alert('load được rồi');
                  $.ajax({
                       
                       url:'http://localhost/sieuga/Quanlynhansu/public/api/ajax_dsvattu/'+ma_phieu+'',
                       method:'GET',  
                       headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                                  "Content-Type": "application/x-www-form-urlencoded",
                                                
                                                },                      
                       success:function(res)
                          {
                            console.log(res);
                            if(res.status==200)
                               {
                               // alert("được rồi đó bạn");
                                 let posts=res.data;
                                // $('#status_token').html('');
                                // $('#logout_token').addClass('alert alert-danger');
                                $.each(posts,function(i,item)
                                   {
                                      
                                         $('#load').append(
                                        '<tr>\
                                         <td class="id" style="display:none">'+item.id+'</td>\
                                         <td>'+item.id_phieunhap+'</td>\
                                         <td>'+item.id_vattu+'</td>\
                                         <td>'+item.sl_vattu+'</td>\
                                         <td>'+item.id_kho+'</td>\
                                         <td><button class="btn btn-xs btn-danger edit_btn" data-toggle="modal">Sửa</button></td>\
                                         <td><button value="'+item.id+'" class="btn btn-xs btn-info delete_btn "data-toggle="modal" >Xóa</button></td>\
                                                                                  </tr>');                          
    
                                   }); 
                               }
                              //  else
                              //  {
                              //         alert("vui lòng kiểm tra lại kết nối");
                              //  }
                          }
                       });
              };
              //them vật tư
      $('#them_vattu').submit(function(e){
      e.preventDefault();      
      var ma_phieu = $("input[name='txt_maphieu']").val();
      var ma_vattu= $("#ma_vattu :selected").val();
    //  var ma_vattu= $("#ma_vattu :selected").text(); nếu muốn lên tên hiện thị
      var soluong = $("input[name='soluong']").val();
      var _token = $("input[name='_token']").val();
      console.log(soluong);
      console.log(ma_vattu);
     $.ajax({
              url:'http://localhost/sieuga/Quanlynhansu/public/api/luu_vattu',
              method:'POST',
              headers: {
                                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                              "Content-Type": "application/x-www-form-urlencoded",
                                             
                                            }, 
              data: {_token:_token,ma_phieu:ma_phieu,ma_vattu:ma_vattu, soluong:soluong, },
              success:function(res)
              {
                if(res.status==true)
                 {
                 // $('input[type="text"],textarea').val('');  
                  $('#load').html('');
                  load();
                 }
                 else
                 {
                  alert('Kết nối lỗi!!!');
                 }

              }
           });
      });
     
    </script>
<div id="alert_form"></div>
               <table id="table" class="table table-bordered" >
               <thread>   
                        <th>Mã Phiếu</th>           
                        <th>Mã Vật Tư</th>                      
                        <th>Số Lượng</th>
                        <th>Kho </th>
                        <th>SỬA </th> 
                         <th>XÓA </th>                    
             </thread>
             
              <tbody id="load"></tbody>
               </table>
          
          <div>
  </div>  

    </div>
 
@endsection