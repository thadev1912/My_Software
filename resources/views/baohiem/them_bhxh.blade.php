@extends('layout.main')
@section('main_body')

<div class="card-header ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-info"> THÊM THÔNG TIN BẢO HIỂM XÃ HỘI</h1>
                                  </div>
                    
                     </div>
                     @if($errors->any())
                           <div class="alert alert-danger text-center">
                            Vui lòng kiểm tra lại thông tin!!!
                           </div>
                     @endif
                    
            <form action="{!! URL::route('luu_bhxh')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>MÃ BẢO HIỂM XÃ HỘI</label>
                        <input id="current-pass-control" name="txt_ma_bhxh" class="form-control" type="text" value="{!! old('txt_ma_bhxh') !!}">
                            @error('txt_ma_bhxh')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>
                   <div class="col">
                        <label>MÃ NHÂN VIÊN</label>
                        <input id="new-pass-control" name="txt_ma_nv" class="form-control" type="text" value="{!! old('txt_ma_nv') !!}">
                        @error('txt_ma_nv')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>
</div>

<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col">
                        <label>NGÀY CẤP</label>
                        <input id="new-pass-control" name="txt_ngaycap" class="form-control" type="date" value="{!! old('txt_ngaycap') !!}">
                        @error('txt_ngaycap')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>                  
<div class="col">
                        <label>NGÀY HẾT HẠN</label>
                        <input id="current-pass-control" name="txt_ngayhethan" class="form-control" type="date" value="{!! old('txt_ngayhethan') !!}">
                        @error('txt_ngayhethan')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>
                 
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col">
                        <label>LOẠI BHXH</label>
                        <input id="current-pass-control" name="txt_loai_bhxh" class="form-control" type="text" value="">
                        @error('txt_loai_bhxh')
                             <span class="text-danger">{{$message}}</span>
                            @enderror       
                    </div>
                 
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>NƠI CẤP</label>
                        <input id="current-pass-control" name="txt_noicap" class="form-control" type="text" value="">
                        @error('txt_noicap')
                             <span class="text-danger">{{$message}}</span>
                            @enderror       
                    </div>
                   
</div>



<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="{!! URL::route('nhanvien')!!}" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspVề Trang Chủ&nbsp&nbsp</a>
</div>


</div>

 
    @endsection