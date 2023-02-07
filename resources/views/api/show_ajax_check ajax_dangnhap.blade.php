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
            <script>
          $(window).ready(function()
        
            {
                   let token='eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxMSIsImp0aSI6ImU5YmYwNTVhYmU0YTdiN2YyNjIwOGU1MjBjNTgxNTJmZWI4Y2RjZTU4MjNiNmNjODlkOTUzYTBiNzI1ZjBhZWU1MTZjNTZlODY5Nzg5N2NhIiwiaWF0IjoxNjcwOTg0NDA2LjU1NDA1LCJuYmYiOjE2NzA5ODQ0MDYuNTU0MDU0LCJleHAiOjE2ODY3MDkyMDYuNTQzNjM3LCJzdWIiOiI2Iiwic2NvcGVzIjpbXX0.jc0To3DLdzk7XNx9ScoXL8q_rwygggmwqM4jSLWUphxPqjeu8unGWzSYIDvpuicSiUt7bEh4oH4v5R28i5kMZxFznQLJByl_2Pb58bo_VI5eXjvkeIgCejrjKiY1eWgliEOTYMP01aPceNfwZ8dEJicvEIS7VoQu2z00m2zX2V3TbpyrFPsCvCqxqX_Bk1gLoyzZbXL_HnjxKIOPYLx0e33D-ksKMChdAqukP_MQtzjtfVMEIkUKsplO89zGnexxJcn3Mjk1R-3aik4iyTsna4Q2hy5Qmi33DaBI0A3VtakupuBRyAHZ3Ot8TCfU6rZXUA70j8kuKRQGHu9Rjf95E6Fou37DL5gUGymZESXcbitbqRBSK41xVICX7_1lRcwM0G0N4HwBhSXCQ9508vqVmC5CFX4Nkm9L5YF_DJLHADa7AJqwJHTemyRqSGxvM9a-8khN-llGMyaGT4h81CrUGfIAx1OzHD5RT0yoVvZAGjUi0TBcmUiANGdMEbBNE2_f_aoHktUlmU1eqZYllDuIQTR0GlIcUMUWng55b3C2FDd7aqhLG3nAbMFRLMjAFgWwbWxtr7CAy3fNQAIkDjWXNnN10KMbf1aeInstWfCKqBOeBgM1qdOl_stY6bO58nYVyybX0uSdub2JmABuFMwguXBKvKEfbA28jeNkSyCYuiM';
                   $.ajax({
                              method:'GET',
                              url:'http://localhost/sieuga/Quanlynhansu/public/api/check',  
                              dataType:'json', 
                              headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                                  "Content-Type": "application/x-www-form-urlencoded",
                                                  "Authorization": "Bearer "+token+"",
                                                }, 
                               
                             success:function(res)
                             {
                               if(res.status==200)
                                  {
                                   
                                    alert('đã đăng nhập');
                                   
                                  }
                                else
                                {
                                  alert('Vui lòng kiểm tra lại token');
                                  $('#token_status').html('');
                                  $('#token_status').addClass('alert alert-danger');
                                  $('#token_status').append('Bạn chưa có quyền để truy cập dữ liệu này...Vui lòng đăng nhập  <a href="" data-toggle="modal" data-target="#modalLoginForm">tại đây</a>');
                                }
                             }  




                   })

                   
             });
</script>
          <!-- @if(!Auth::guard('api')->check())
         <div class="alert alert-danger">
          Bạn chưa có quyền để truy cập dữ liệu này...Vui lòng đăng nhập  <a href="" data-toggle="modal" data-target="#modalLoginForm">tại đây</a>
         </div>
         <div> -->
          <div id="token_status"></div>
          
        </div> 
         <!--Form Login-->
       
          <div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold text-danger">HỆ THỐNG API</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="post" id="check_api">
        @csrf
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <label  data-success="right" for="orangeForm-email">Tài Khoản</label>
          <input type="text" name="username" class="form-control">          
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <label  data-success="right" for="orangeForm-email">Mật Khẩu</label>
          <input type="password" name="pass" id="defaultForm-pass" class="form-control" >         
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
      <button class="btn btn-primary btn-lg btn-block" id="submit" type="submit" name="submit">Xác Nhận</button>
            <a href="" class="btn btn-danger btn-lg btn-block"><i class="icon-remove"></i>&nbsp&nbspĐăng Ký&nbsp&nbsp</a>
      </div>
    </div>
  </div>
</div>
</form>
<script>

     $('#check_api').submit(function(e)
         {            
   e.preventDefault();           
           var username = $("input[name='username']").val();
           var pass = $("input[name='pass']").val();
          
           console.log(username);                             
           $.ajax({
             url:'http://localhost/sieuga/Quanlynhansu/public/api/check_login',
             method:'POST',
                          data: {username:username, pass:pass},
             success:function(res)
                {
                        
                           if(res.status==200)
                           {
                           alert('Đăng nhập thành công!!!');
                           let token=res.token;
                           console.log(token);
                           $('#token_data').addClass('alert alert-success');
                           $('#token_data').append(token);
                           $('#modalLoginForm').modal('hide');                                 
                                  // $('#load').html('');
                                   load();
                           }
                           else if(res.status==500)
                           {
                           alert('đăng nhập thất bại!!');
                           }
                    
                    
                   }
             
           });
           
        });
</script>
@else
<!--Form Login-->
         
         
            <!-- <div class="list-group" id="connect_api">              
               </div> -->
              <!-- Button trigger modal nút button xác định load modal-->
<button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModalCenter">
  Thêm mới
</button>
<a href="{!!URL::route('fetch_data')!!}" type="button" class="btn btn-success mb-3" >
  Cập Nhật Cơ Sở Dữ Liệu
</a>

<!-- Modal -->

   <!--Start Index post Area -->
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
             <input type="hidden" id="id">
             <label>Mã Bài Viết</label>
             <input id="ma_post" name="ma_post" class="form-control" type="text" value="" >           
             <small id="ma_post_er" class="form-text text-danger d-none"></small>
             <label>Tiêu Đề Bài Viết</label>
             <input id="title_post" name="title_post" class="form-control" type="text" value="">
             <small id="title_post_er" class="form-text text-danger d-none"></small>
             <label>Nội Dung Bài Viết</label>
             <input id="content_post" name="content_post" class="form-control" type="text" value="" >
             <small id="content_post_er" class="form-text text-danger d-none"></small>
             <label>Danh Mục Bài Viết</label>
             <input id="danhmuc_post" name="danhmuc_post" class="form-control" type="text" value="" >  
             <small id="danhmuc_post_er" class="form-text text-danger d-none"></small>
            
    </div>
      
      <div class="modal-footer">
        <!-- <input type="submit" class="btn btn-danger" id="myModal" value="Cập Nhật"> -->
        <!-- <button type="submit" class="btn btn-success" ><i class="glyphicon glyphicon-ok"></i> Save</button> -->
        <button class="btn btn-danger" id="submit" type="submit" name="submit"  value="" >Lưu Lại</button>
        <button type="button" class=" btn btn-info" data-dismiss="modal" aria-label="Close">Đóng</button>
      </div>
      </form>
    </div>
    
  </div>
</div>
  <!--End Index post Area -->

   <!--Edit post Area -->

<div class="modal fade" id="exampleModalCenter1" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">

  
    <div class="modal-content">
    <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Chỉnh Sửa Bài Viết</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="" method="put" id="capnhat_ajax">
        @csrf
      <div class="modal-body">
             <input type="hidden" id="id">
             <label>Mã Bài Viết</label>
             <input type="text" id="ma" name="ma_post1" class="form-control">
             <label>Tiêu Đề Bài Viết</label>
             <input type="text" id="title" name="title_post1" class="form-control">
             <label>Nội dung Bài Viết</label>
             <input type="text" id="noidung" name="content_post1" class="form-control">
             <label>Danh Mục Bài Viết</label>
             <input type="text" id="danhmuc" name="danhmuc_post1" class="form-control">  
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
  <!--End Edit post Area -->
  <!-- <div id="alert_form" class="alert alert-success">Thêm bài viết thành công!!</div> -->
  <div id="alert_form"></div>
               <table id="table" class="table table-bordered" >
               <thread>              
                        <th>Mã Bài Viết</th>
                        <th>Tiêu Đề Bài Viết</th>
                        <th>Nội Dung Bài Viết</th>
                        <th>Danh Mục </th>
                        <th>SỬA </th> 
                         <th>XÓA </th>                    
             </thread>
             
              <tbody id="load"></tbody>
               </table>
          
          <div>
<!--Start Deleted form-->
  <div class="modal fade" id="delete_form" tabindex="-1" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger">Cảnh báo</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Bạn chắc chắn có muốn xóa không?</p>
        <input type="text" class="d-none" id="id_delete">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Quay Lại</button>
        <button type="button" class="btn btn-danger delete_form_btn " data-dismiss="modal">Xóa Ngay!</button>
      </div>
    </div>
  </div>

</div>
<!--End Deleted form-->
          <script type="text/javascript">
              
          load();
           function load()
              {
                  $.ajax({
                       
                       url:'http://localhost/sieuga/Quanlynhansu/public/api/post',
                       method:'GET',  
                       headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                                  "Content-Type": "application/x-www-form-urlencoded",
                                                  "Authorization": "Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxMSIsImp0aSI6ImI5NTdjMTI1OGZkODZlMzM3ZjJhMWViZDE1MjgwODBkNmY2OTgxNGE3NmJkMDU3MmYwZGZkYWE5MjhkNGM3MzM1ZTliN2RmNDFjN2EzZGI3IiwiaWF0IjoxNjcwOTgxMTExLjkzNzgwNCwibmJmIjoxNjcwOTgxMTExLjkzNzgwOCwiZXhwIjoxNjg2NzA1OTExLjkyOTQxNCwic3ViIjoiNiIsInNjb3BlcyI6W119.MqJRt1N-xuXPx3BL9EjgfFQRQUTbOaf-N3qEGYMKNQpNTtDgyUBTPD7kKYuVHlIMydIzSB1xaL--0GFG16SdzKBSp5tIf1AYCUK6iNt_2FylWcmU5JbZKEDugxwTvC2pX6yRjry2NUJBE1fnqWKprcstikr4sjou8NkeEe0W7CHO3MmkOUllLXOiF8NDsAqGZKderP7Ayo4MWHmhf3E7ys7eCy9sZnI4-bXtahIo5Y-Am3mkgZXtF9dJIo2cDGL614lfndFJa9KYF8PZeaCpYKBFtle34InHRgRlXdUIheWf6lIt6pQbmo03v4kQb2luEOLeV3KXilRttN8bLnkOYZaXhiClFNb0M9rESAGZwbqs2DhS0rVNsc4Qy30oEdlutZtAe4IP1CL3Vtf99XCzVgcmEj2S49MBOy4rsZ09lDy6USd6ttZP8m_nc5hbfMHhWnmVbWM9aJ8JfGCszIG3Ux9uE4J2aysuziUW8_me8d5HAqYqViEsc7Fmv5HNJYzFeL0NX5qo1FT1IyDAbhua8Gg2BLRc3bQHSB-Uy-UlzU8PQcrvUDTll1suGeXhQPcKkYRFeFTJg7JzS7bXrQOyqezXHHgHQ8Dr-ELShLb2vF9agmrxX10OJN_VHr6fDh1bkewmJFtrO-xnBjhy34g0zY5l4OsXjH0hT7XNoeHtook",
                                                },                      
                       success:function(res)
                          {
                            console.log(res);
                            if(res.status==200)
                               {
                                //alert("được rồi đó bạn");
                                let posts=res.data;

                                $.each(posts,function(i,item)
                                   {
                                        
                                         $('#load').append(
                                        '<tr>\
                                         <td class="id" style="display:none">'+item.id+'</td>\
                                         <td>'+item.ma_post+'</td>\
                                         <td>'+item.title_post+'</td>\
                                         <td>'+item.content_post+'</td>\
                                         <td>'+item.danhmuc_post+'</td>\
                                         <td><button class="btn btn-xs btn-danger edit_btn" data-toggle="modal">Sửa</button></td>\
                                         <td><button value="'+item.id+'" class="btn btn-xs btn-info delete_btn "data-toggle="modal" >Xóa</button></td>\
                                                                                  </tr>');                          
    
                                   }); 
                               }
                               else
                               {
                                      alert("vui lòng kiểm tra lại token");
                               }
                          }
                       });
              };
             
         
           //code add_form
           $('#add_api').submit(function(e)
                   {
                    e.preventDefault();
                    $('#ma_post_er').text('');
                    $('#title_post_er').text('');
                    $('#content_post_er').text('');
                    $('#danhmuc_post_er').text('');
                  
                    // let info =$('#add_api').serialize();
                    //console.log(info);
                    var _token = $("input[name='_token']").val();
                    var ma_post = $("input[name='ma_post']").val();
                    var title_post = $("input[name='title_post']").val();
                    var content_post = $("input[name='content_post']").val();
                    var danhmuc_post = $("input[name='danhmuc_post']").val();
                    
                     $.ajax({
                      url:'http://localhost/sieuga/Quanlynhansu/public/api/post',
                      method:'POST',                     
                      //data:$(this).serialize(), có thể sử dụng kiểu này
                      data: {_token:_token,ma_post:ma_post, title_post:title_post, content_post:content_post, danhmuc_post:danhmuc_post},
                      success:function(res)
                             {
                                                           //console.log(res);  giá trị luôn nhận về là <res> nha
                            //if($.isEmptyObject(res.errors))
                            if(res.status==true)
                             {
                                   $('#alert_form').html('');
                                   $('#alert_form').addClass('alert alert-success');
                                   $('#alert_form').append(res.messege);
                                   $('input[type="text"],textarea').val('');  
                                   $('#exampleModalCenter').modal('hide');                                 
                                   $('#load').html('');
                                   load();
                             }
                            },
                            error: function (res) 
                            {
                              
                                   var res = $.parseJSON(res.responseText);
                                   console.log(res);
                                  $.each(res.errors, function (key, value) 
                                  {
                                              
                                            $("#" + key).next().html(value[0]);  
                                            $("#" + key).next().removeClass('d-none'); 
                                                                                 
                                 });
                                 
                            }
                          });                               
                
              });
    //code chỉnh sửa form
                  $(document).on('click','.edit_btn',function()
                   {
                          let id_post=$(this).closest('tr').find('.id').text();
                          //console.log(id_post);
                          $.ajax({
                              method:'GET',
                              url:'http://localhost/sieuga/Quanlynhansu/public/api/post/'+id_post+'/edit/',  
                              dataType:'json',                                                                                 
                              success:function(res)
                                       {                                
                                                 console.log(res);                                           
                                                //  console.log(item['ma_post']);
                                                 $('#id').val(res.data.id);
                                                 $('#ma').val(res.data.ma_post);
                                                 $('#title').val(res.data.title_post);
                                                 $('#noidung').val(res.data.content_post);                                       
                                                 $('#danhmuc').val(res.data.danhmuc_post);                                                
                                                 $('#exampleModalCenter1').modal('show');                                         
                                          
                                        }                                          
                                       });

                               });
                               $('#capnhat_ajax').submit(function(e)
                                {
                                        e.preventDefault();
                                        let id_post=$('#id').val();                                        
                                        $.ajax({
                                        method:'PUT',
                                        url:'http://localhost/sieuga/Quanlynhansu/public/api/post/'+id_post+'',                                        
                                        dataType:'json',  
                                        data:{
                                                        _token:'{{ csrf_token() }}',				
				                                                 ma_post: $('#ma').val(),
			                                                  title_post:$('#title').val(),
		                                             	      content_post: $('#noidung').val(),
				                                                danhmuc_post: $('#danhmuc').val(),
                                                   
			                                        },
                                          success: function(res)
                                                {
                                                  $('#alert_form').html('');
                                                  $('#alert_form').addClass('alert alert-success');
                                                  $('#alert_form').append(res.messege);
                                                  $('#exampleModalCenter1').modal('hide');                                                                                                     
                                                  $('#load').html('');
                                                  load();
                                                }
                                              
                                          
                                          });
                                });
              
                                $(document).on('click','.delete_btn',function()
                                 {
                                 
                                  //let id_post=$(this).closest('tr').find('.id').text();
                                  let id=$(this).val();                
                                   console.log(id);
                                   $('#delete_form').modal('show');
                                  $('#id_delete').val(id);
                                
                                 });
                                 $(document).on('click','.delete_form_btn',function(e)
                                 {
                                  e.preventDefault();   
                                  //alert('đã nhận thông tin');
                                  let id_post=$('#id_delete').val();                                  
                                     $.ajax({
                                      headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                                                  // sử dụng kiểu phương thức "token" kiểu meta header
                                                },
                                    method:'DELETE',
                                    url:'http://localhost/sieuga/Quanlynhansu/public/api/post/'+id_post+'', 
                                    dataType:'json',
                                    success:function(res)
                                        {
                                         
                                          $('#alert_form').html('');
                                          $('#alert_form').addClass('alert alert-danger');
                                          $('#alert_form').append(res.messege);
                                          $('#load').html('');
                                          load();
                                        }


                                   });
                                   
                                 });   

                              
           
        </script> 
        
</div>



@endif

@endsection