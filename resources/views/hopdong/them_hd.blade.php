@extends('layout.main')
@section('main_body')

<div class="card-header ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-info"> THÊM THÔNG TIN HỢP ĐỒNG</h1>
                                  </div>
                    
                     </div>
                     @if($errors->any())
                           <div class="alert alert-danger text-center">
                            Vui lòng kiểm tra lại thông tin!!!
                           </div>
                     @endif
            <form action="{!! URL::route('luu_hd')!!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>MÃ HỢP ĐỒNG</label>
                        <input id="current-pass-control" name="txt_ma_hd" class="form-control" type="text" value="{!! old('txt_ma_hd') !!}">
                        @error('txt_ma_hd')
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
                        <label>TÌNH TRẠNG NHÂN VIÊN</label>
                        <input id="new-pass-control" name="txt_tinhtrang" class="form-control" type="text" value="{!! old('txt_tinhtrang') !!}">
                        @error('txt_heso_luong')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>                  

<div class="col">
                        <label>THỜI HẠN HỢP ĐỒNG</label>
                        <input id="current-pass-control" name="txt_loai_hd" class="form-control" type="text" value="{!! old('txt_loai_hd') !!}">
                        @error('txt_ngayvao')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>
                       
</div>

<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col">
                        <label>HỆ SỐ LƯƠNG</label>
                        <input id="new-pass-control" name="txt_heso_luong" class="form-control" type="text" value="{!! old('txt_heso_luong') !!}">
                        @error('txt_heso_luong')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>                  

<div class="col">
                        <label>NGÀY VÀO LÀM</label>
                        <input id="current-pass-control" name="txt_ngayvao" class="form-control" type="date" value="{!! old('txt_ngayvao') !!}">
                        @error('txt_ngayvao')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>
                       
</div>




<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="{!! URL::route('hopdong')!!}" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspVề Trang Chủ&nbsp&nbsp</a>
</div>


</div>


    @endsection