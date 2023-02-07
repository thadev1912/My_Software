@extends('layout.main')
@section('main_body')
@section('javascript')
<form method="POST" action="" id="check_login">
@csrf
    <div class="row d-flex justify-content-center align-items-center ">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center ">
         
        
            <h3 class="mb-5 text-danger">HỆ THỐNG API</h3>
            @if(Session::has('thongbao'))
                      <div class="alert alert-danger">
                         {{Session::get('thongbao')}}
                      </div>
                      @endif
            <div class="form-row ">
                    <div class="col-md-4">
                               <label class="form-label" for="typeEmailX-2"><h5>Tài Khoản</h5></label>
                    </div>
                    <div class="col-md-8">
                                <input type="text" name="username"  class="form-control form-control-lg" />
              
                     </div>
                  </div>
                     <br>
                  <div class="form-row ">
                      <div class="col-md-4">
                               <label class="form-label" for="typePasswordX-2"><h5>Mật Khẩu</h5></label>
                     </div> 
                     <div class="col-md-8">
                              <input type="password" name="pass" class="form-control form-control-lg" />
                       </div>
                 </div>

  <br>
          
            
            <button class="btn btn-primary btn-lg btn-block" id="submit" type="submit" name="submit">Xác Nhận</button>
            <a href="" class="btn btn-danger btn-lg btn-block"><i class="icon-remove"></i>&nbsp&nbspĐăng Ký&nbsp&nbsp</a>
      
          </div>
        </div>
      </div>
    </div>

    </form >

 <script>
     $('#check_login').submit(function(e)
         {   
          alert('CHECK');
            e.preventDefault();
           
            var username = $("input[name='username']").val();
            var pass = $("input[name='pass']").val();                             
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
                            }
                            else if(res.status==500)
                            {
                            alert('đăng nhập thất bại!!');
                            }
                     
                     
                    }
              
            });
            
         });
 </script>


@endsection
