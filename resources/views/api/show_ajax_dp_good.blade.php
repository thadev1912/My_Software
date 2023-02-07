@extends('layout.main')
@section('main_body')
@section('javascript')
<div class="container">
<div class="card">         
                    <div class="card-header bg-primary">
                               <div class="row">
                                     <div class="col-md-12" align="center">
                                            <h1 class="btn text-light"> KẾT NỐI HỆ THỐNG API </h1>
                                     </div>                                  
                               </div>
                    </div>            
          <div class="card-body"> 
            <!-- <div class="list-group" id="connect_api">              
               </div> -->
              <!-- Button trigger modal -->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter">
  Thêm mới
</button>

<!-- Modal -->

<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

     
    <div class="modal-content">
  
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Thêm Mới Sản Phẩm</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" id="add_api">
        @csrf
      <div class="modal-body">
             <label>Mã Bài Viết</label>
             <input id="current-pass-control" name="ma_post" class="form-control" type="text" value="">
             <label>Tiêu Đề Bài Viết</label>
             <input id="current-pass-control" name="title_post" class="form-control" type="text" value="">
             <label>Nội Dung Bài Viết</label>
             <input id="current-pass-control" name="content_post" class="form-control" type="text" value="">
             <label>Danh Mục Bài Viết</label>
             <input id="current-pass-control" name="danhmuc_post" class="form-control" type="text" value="">  
    </div>
      
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" id="myModal" value="Cập Nhật"> -->
        <!-- <button type="submit" class="btn btn-success" ><i class="glyphicon glyphicon-ok"></i> Save</button> -->
        <button class="btn btn-danger" id="submit" type="submit" name="submit"  value="" >Cập Nhật</button>
        <button type="button" class=" btn btn-info" data-dismiss="modal" aria-label="Close">Đóng</button>
      </div>
      </form>
    </div>
  </div>
</div>
               <table id="api" class="table table-bordered" >
               <thread>
                    <tr>
                       
                        <th>Mã Bài Viết</th>
                        <th>Tiêu Đề Bài Viết</th>
                        <th>Nội Dung Bài Viết</th>
                        <th>Danh Mục Bài Viết</th>
                        <th>Tùy Chỉnh</th>
                    </tr>
             </thread>
                 
               </table>
          
          <div>

        <script>
          load();
           function load()
           {
           
             $.get('http://localhost/sieuga/Quanlynhansu/public/api/post',function(res)
             {
                  //console.log(res);
                  if(res.status==200)
                    {
                        //console.log('đã kết nối được rồi!!')
                        let posts=res.data;
                       
                        //console.log(posts);
                        $.each(posts,function(i,item)
                            {
                              
                               $('tbody').append(
                                '<tr>\
                                 <td>'+item.ma_post+'</td>\
                                 <td>'+item.title_post+'</td>\
                                 <td>'+item.content_post+'</td>\
                                 <td>'+item.danhmuc_post+'</td>\
                                 <td><a href="" class="btn-xs btn-primary">Sửa</a>||<a href="" class="btn-xs btn-danger">Xóa</a></td>\
                                 </tr>');                              
                                           
                            }); 
                           
                    
                    }
                    
             });
            };
           //code add_form
             $('#add_api').submit(function(e)
             {
                //alert('xác nhận');
                e.preventDefault();

                let info =$('#add_api').serialize();
                $.post('http://localhost/sieuga/Quanlynhansu/public/api/post',info,function(res)  //hàm rút gọn của cấu trúc ajax
                  {
                   // $('#api tbody').html(blank); 
                  
                    //alert('đã thêm thành công!!!');
                    $('#exampleModalCenter').modal('hide')
                    $('input[type="text"],textarea').val('');
                    $('tbody').html('');
                    load();
                   
                  });
             
                });
               
          
        </script>  
</div>





@endsection