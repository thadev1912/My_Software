@extends('layout.main')
@section('main_body')
@section('javascript')
<div class="container">
  <!-- <div>
<button class="btn btn-xs btn-danger edit_btn mb-3 d-none" id="logout_status" data-toggle="modal"  data-target="#logout_form">Đăng xuất</button>
</div>  -->
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
         
</script>
          
          <div id="token_status">
          </div>
           <div id="logout_status">
          </div> 
          
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
$(window).ready(function()
        {
          let token=localStorage.getItem("your_token");
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
                           if(res.status!=200)
                              {
                                alert('Vui lòng kiểm tra lại token');
                             // $('#token_status').addClass('d-none');                                
                              $('#alert_form').html('');                                          
                              $('#token_status').addClass('alert alert-danger');
                              $('#token_status').append('Bạn chưa có quyền để truy cập dữ liệu này...Vui lòng đăng nhập  <a href="" data-toggle="modal" data-target="#modalLoginForm">tại đây</a>');
                              //load();
                               
                              }
                            else
                            {
                              //alert('đăng nhập thành công');
                              
                              console.log()
                              load();
                              $('#token_status').html('');                                                                            
                              $('#logout_status').append('<button class="btn btn-xs btn-danger edit_btn" data-toggle="modal" data-target="#logout_form">Đăng xuất</button>');                         
                             
                              
                            }
                         }  




               });

               
         });
        
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
                           localStorage.setItem("your_token",token);                           
                           $('#logout_status').html('');   
                           $('#logout_status').removeClass('alert alert-danger');
                           //$('#token_status').addClass('d-none');                                             
                           $('#logout_status').append('<button class="btn btn-xs btn-danger edit_btn" data-toggle="modal" data-target="#logout_form">Đăng xuất</button>'); 
                                        
                           load();
                           $('#modalLoginForm').modal('hide');                                 
                                  
                                  
                           }
                           else
                           {
                           alert('Đăng nhập thất bại!! Vui lòng kiểm tra lại thông tin đăng nhập');
                           }
                    
                    
                   }
             
           });
           
        });
   
</script>

<!--Form Login-->
         
         
            <!-- <div class="list-group" id="connect_api">              
               </div> -->
              <!-- Button trigger modal nút button xác định load modal-->
              <div>
<button type="button" class="btn btn-info mb-3" data-toggle="modal" data-target="#exampleModalCenter">
  Thêm mới
</button>
<a href="{!!URL::route('fetch_data')!!}" type="button" class="btn btn-success mb-3" >
  Tải Dữ Liệu Về Kho Lưu Trữ
</a>
      </div>
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
<!--Start Logout form-->
<div class="modal fade" id="logout_form" tabindex="-1" role="dialog">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger">Cảnh báo hệ thống</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Bạn thật sự muốn đăng xuất không?</p>
        <input type="text" class="d-none" id="logout_form_btn">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal" aria-label="Close">Cancel</button>
        <button type="button" class="btn btn-danger logout_form_btn " data-dismiss="modal">Thoát ngay!</button>
      </div>
    </div>
  </div>

</div>  
<!--End Logout form-->
          <script type="text/javascript">
              
          //load();
           function load()
              {
                let token=localStorage.getItem("your_token");
                
                  $.ajax({
                       
                       url:'http://localhost/sieuga/Quanlynhansu/public/api/post',
                       method:'GET',  
                       headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                                  "Content-Type": "application/x-www-form-urlencoded",
                                                  "Authorization": "Bearer "+token+"",
                                                },                      
                       success:function(res)
                          {
                            console.log(res);
                            if(res.status==200)
                               {
                                //alert("được rồi đó bạn");
                                let posts=res.data;
                                $('#status_token').html('');
                                $('#logout_token').addClass('alert alert-danger');
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
                              //  else
                              //  {
                              //         alert("vui lòng kiểm tra lại kết nối");
                              //  }
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
                    let token=localStorage.getItem("your_token");
                     $.ajax({
                      url:'http://localhost/sieuga/Quanlynhansu/public/api/post',
                      method:'POST',   
                      headers: {
                                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                              "Content-Type": "application/x-www-form-urlencoded",
                                              "Authorization": "Bearer "+token+"",
                                            }, 
                                             
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
                             else
                             {
                              alert('Token hết hạn...vui lòng đăng nhập lại...!!!');
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
                          let token=localStorage.getItem("your_token");
                          //console.log(id_post);
                          $.ajax({
                              method:'GET',
                              url:'http://localhost/sieuga/Quanlynhansu/public/api/post/'+id_post+'/edit/',  
                              dataType:'json', 
                              headers: {
                                              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                              "Content-Type": "application/x-www-form-urlencoded",
                                              "Authorization": "Bearer "+token+"",
                                            }, 
                                                                                                                             
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
                                        let token=localStorage.getItem("your_token");
                                        let id_post=$('#id').val();                                        
                                        $.ajax({
                                        method:'PUT',
                                        url:'http://localhost/sieuga/Quanlynhansu/public/api/post/'+id_post+'',                                        
                                        dataType:'json', 
                                        headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                                  "Content-Type": "application/x-www-form-urlencoded",
                                                  "Authorization": "Bearer "+token+"",
                                                },     
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
                                  let token=localStorage.getItem("your_token");
                                  let id_post=$('#id_delete').val();                                  
                                     $.ajax({
                                      headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') 
                                                  // sử dụng kiểu phương thức "token" kiểu meta header
                                                },
                                    method:'DELETE',
                                    url:'http://localhost/sieuga/Quanlynhansu/public/api/post/'+id_post+'', 
                                    dataType:'json',
                                    headers: {
                                                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'), 
                                                  "Content-Type": "application/x-www-form-urlencoded",
                                                  "Authorization": "Bearer "+token+"",
                                                },    
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

                              
                                 $(document).on('click','.logout_form_btn',function(e)
                                  {
                                           e.preventDefault();   
                                           let token=localStorage.getItem("your_token");
                                           $.ajax({                                          
                                                  method:'DELETE',
                                                  url:'http://localhost/sieuga/Quanlynhansu/public/api/thoat_api', 
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
                                                                
                                                                  alert('Xóa token thành công!!!');    
                                                                  localStorage.removeItem("your_token");                                                                                                                    
                                                                  
                                                                                                                               
                                                                    $('#logout_status').html('');// có chức năng reset lại đoạn html đó
                                                                    $('#logout_status').addClass('alert alert-danger');
                                                                    $('#logout_status').append('Bạn chưa có quyền để truy cập dữ liệu này...Vui lòng đăng nhập  <a href="" data-toggle="modal" data-target="#modalLoginForm">tại đây</a>');
                                                                    $('#load').html('');
                                                                    load();
                                                                 } 
                                                                 else
                                                                  {
                                                                    alert('Vui lòng kiểm tra lại!!!');
                                                                  }
                                                                
                                                            }
                                            });
                                  });
        </script> 
        
</div>




@endsection