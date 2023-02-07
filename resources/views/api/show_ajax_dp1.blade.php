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
              <!-- Button trigger modal nút button xác định load modal-->
<button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#exampleModalCenter">
  Thêm mới
</button>

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
             <input id="ma_post" name="ma_post" class="form-control" type="text" value="">
             <label>Tiêu Đề Bài Viết</label>
             <input id="title_post" name="title_post" class="form-control" type="text" value="">
             <label>Nội Dung Bài Viết</label>
             <input id="content_post" name="content_post" class="form-control" type="text" value="">
             <label>Danh Mục Bài Viết</label>
             <input id="danhmuc_post" name="danhmuc_post" class="form-control" type="text" value="">  
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
                  $.ajax({
                       url:'http://localhost/sieuga/Quanlynhansu/public/api/post',
                       method:'GET',
                       dataType:'json',
                       success:function(res)
                          {
                            console.log(res);
                            if(res.status==200)
                               {
                                //alert("được rồi đó bạn");
                                let posts=res.data;
                                $.each(posts,function(i,item)
                                   {
                              
                                         $('tbody').append(
                                        '<tr>\
                                        // <td class="id" style="display:none">'+item.id+'</td>\
                                         <td>'+item.ma_post+'</td>\
                                         <td>'+item.title_post+'</td>\
                                         <td>'+item.content_post+'</td>\
                                         <td>'+item.danhmuc_post+'</td>\
                                         <td class="btn btn-xs btn-danger edit_btn" data-toggle="modal">Sửa</td>\
                                                                                  </tr>');                          
    
                                   }); 
                               }
                          }
                       });
              };
             
         
           //code add_form
           $('#add_api').submit(function(e)
                   {
                    e.preventDefault();
                    let info =$('#add_api').serialize();
                    //console.log(info);
                     $.ajax({
                      url:'http://localhost/sieuga/Quanlynhansu/public/api/post',
                      method:'POST',                     
                      //data:$(this).serialize(), có thể sử dụng kiểu này
                      data:info,
                      success:function(res)
                             {
                               //console.log(res);  giá trị luôn nhận về là <res> nha
                               $('#exampleModalCenter').modal('hide')
                               $('input[type="text"],textarea').val('');
                               $('tbody').html('');
                               load();
                             }
                //code edit form
              


                   });
                  });
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
			                                                  title_post:$('#title').val() ,
		                                             	      content_post: $('#noidung').val(),
				                                                danhmuc_post: $('#danhmuc').val(),
                                                   
			                                        },
                                          success: function(res)
                                                {
                                                  $('#exampleModalCenter1').modal('hide');   
                                                  //$('#api').append('thread');                                                 
                                                  $('tbody').html('');
                                                  load();
                                                }
                                              
                                          
                                          });
                                });
              
                   $(document).on
          
        </script>  
</div>





@endsection