@extends('layout.main')
@section('main_body')

<div class="card-header ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-info"> SỬA THÔNG TIN KỶ LUẬT</h1>
                                  </div>
                    
                     </div>
                     @if($errors->any())
                           <div class="alert alert-danger text-center">
                            Vui lòng kiểm tra lại thông tin!!!
                           </div>
                     @endif
                    
            <form action="{!! URL::route('capnhat_kt',$data->id) !!}" method="POST">
            <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
            <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
                    <div class="col">
                        <label>MÃ NHÂN VIÊN</label>
                        <input id="current-pass-control" name="txt_ma_nv" class="form-control" type="text" value="{!! $data->ma_nv !!}">
                            @error('txt_ma_nv')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>
                    <div class="col">
                        <label>SỐ TIỀN</label>
                        <input id="new-pass-control" name="txt_sotien" class="form-control" type="text" value="{!! $data->sotien !!}">
                        @error('txt_sotien')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>       
                  
</div>

<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
           
<div class="col">
                        <label>NGÀY KỶ LUẬT </label>
                        <input id="current-pass-control" name="txt_ngay_kyluat" class="form-control" type="date" value="{!! $data->ngay_kyluat!!}">
                        @error('txt_ngay_kyluat')
                             <span class="text-danger">{{$message}}</span>
                            @enderror    
                    </div>
                 
</div>
<div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->
<div class="col">
                        <label>LÝ DO</label>
                        <input id="current-pass-control" name="txt_lydo" class="form-control" type="text" value="{!! $data->lydo!!}">
                        @error('txt_lydo')
                             <span class="text-danger">{{$message}}</span>
                            @enderror       
                    </div>
                 
</div>




<div class="card-header text-white">
                    <button id="submit-button" type="submit" class="btn btn-primary" name="action" value="CONFIRM"><i class="icon-save"></i>&nbsp&nbspLưu Lại&nbsp&nbsp</button>
                    <a href="" class="btn btn-primary"><i class="icon-remove"></i>&nbsp&nbspVề Trang Chủ&nbsp&nbsp</a>
</div>


</div>

 
    @endsection