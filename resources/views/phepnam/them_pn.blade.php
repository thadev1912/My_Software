@extends('layout.main')
@section('main_body')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<div class="card-header ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-info"> THÊM THÔNG TIN PHÉP NĂM</h1>
                                  </div>
                    
                     </div>
                     @if($errors->any())
                <div class="alert alert-danger text-center">
                    Vui lòng kiểm tra lại!!!
                </div>
                @endif
            <form action="{!! URL::route('luu_pn')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>Mã Số Nhân Viên</label>
                        <input id="txt_ma_nv" name="txt_ma_nv" class="form-control" type="text" value="{!! old('txt_ma_nv') !!}">
                           @error('txt_ma_nv')
                             <span class='text-danger'> {{$message}}  </span>
                           @enderror  
                    </div>
                    <div class="col">
                        <label>Họ và Tên Nhân Viên</label>
                        <input id="txt_hoten_nv" name="txt_hoten_nv" class="form-control" type="text" value="{!! old('txt_hoten_nv') !!}">
                                @error('txt_sdt_nv')
                                  <span class="text-danger">{{$message}}</span>
                                  @enderror
                    </div>       
</div>

<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col">
                        <label>NGÀY BẮT ĐẦU</label>
                        <input id="new-pass-control" name="txt_ngay_batdau" class="form-control" type="date" value="{!! old('txt_ngay_batdau') !!}">
                                @error('txt_sdt_nv')
                                  <span class="text-danger">{{$message}}</span>
                                  @enderror
                    </div>                  
<div class="col">
                        <label>NGÀY NGHỈ VIỆC</label>
                        <input id="current-pass-control" name="txt_ngay_ketthuc" class="form-control" type="date" value="{!! old('txt_ngay_ketthuc') !!}">
                               @error('txt_gioitinh_nv')
                                <span class="text-danger">{{$message}}</span>
                                @enderror
                    </div>
                 
</div>



<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspVề Trang Chủ&nbsp&nbsp</a>
</div>
</div>
</form>
<script>

$('#txt_ma_nv').keyup(function(e){
           var ajax = $(this).val();
           //alert(ajax);
            $.ajax({
               headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },                   
               type:'POST',
               url: "{{route('ajax')}}", // có thể gọi bằng route ư
               data:{'ajax':ajax},
               dataType:'json', // cái này quan trọng
               success : function(data)
            {
              $('#txt_hoten_nv').val(data.hoten_nv); 
            },
          
               
            error: function(response) {
            alert(response.responseJSON.message);
        }
            });
   
   
   
   });
</script>

    @endsection