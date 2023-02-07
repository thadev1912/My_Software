 <?php
use Carbon\Carbon;
?> 
@extends('layout.main')
@section('main_body')

<div class="card-header ">
                    <div class="row">
                                  <div class="col-md-12" align="center">
                                       <h1 class="btn text-info">  THÔNG TIN NHÂN VIÊN</h1>
                                  </div>
                    
                     </div>
            
                     <div class="form-row"> <!--thuộc tính form-row nó giúp chia 2 cột trên 1 row của nó-->

                
<div class="col-lg-3">
                       
                    
                        <img class="mx-auto rounded" src="../images/{{$data->anhdaidien}}" style="width:150px;height:150px; margin-left:100px;" alt="..." />
                                <div>
                                    {!! $errors->first('txtpban') !!}
                                </div>
                    </div>                 
                    <div class="col">
                        <label>Mã Nhân Viên</label>
                        <input id="new-pass-control" name="txt_ma_nv" class="form-control" type="text" value="{!! $data->ma_nv !!} " readonly="readonly">
                                <div>
                                    {!! $errors->first('txtTen') !!}
                                </div>
                                <label>Chức vụ</label>
                        <input id="new-pass-control" name="txt_ten_cv" class="form-control" type="text" value="{!! $data->ten_cv !!}" readonly="readonly">
                                <div>
                                    {!! $errors->first('txtTen') !!}
                                </div>
                    </div>
                    <div class="col">
                        <label>Họ Tên Nhân Viên</label>
                        <input id="new-pass-control" name="txt_hoten_nv" class="form-control" type="text" value="{!! $data->hoten_nv !!}" readonly="readonly">
                                <div>
                                    {!! $errors->first('txtTen') !!}
                                </div>
                                <label>Phòng Ban</label>
                        <input id="new-pass-control" name="txt_ten_pb" class="form-control" type="text" value="{!! $data->ten_pb !!}" readonly="readonly">
                                <div>
                                    {!! $errors->first('txtTen') !!}
                                </div>
                    </div>

                 

</div>
<br>
            <div class="form-row"> <!--col max-->
                    <div class="col">
                        <label>Giới tính</label>
                        <input id="current-pass-control" name="txt_gioitinh_nv" class="form-control" type="text" value="{!!$data->gioitinh_nv !!}" readonly="readonly">
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                    </div>
                   <div class="col">
                        <label>Số điện thoại</label>
                        <input id="new-pass-control" name="txt_sdt_nv" class="form-control" type="text" value="{!! $data->sdt_nv !!}" readonly="readonly">
                                <div>
                                    {!! $errors->first('txtTen') !!}
                                </div>
                    </div>
           </div>
           <div class="form-row"> <!--col max-->
                    <div class="col">
                        <label>Địa chỉ</label>
                        <input id="current-pass-control" name="txt_diachi_nv" class="form-control" type="text" value="{!!$data->diachi_nv !!}" readonly="readonly">
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                    </div>
</div>
<div class="form-row"> <!--col max-->
                    <div class="col">
                        <label>Mã Hợp Đồng </label>
                        <a href="{!! URL::route('chitiet_hopdong',$data->ma_nv)!!}"><input id="current-pass-control" name="txt_ma_hd" class="form-control" type="text" value="{!!$data->ma_hd !!}" readonly="readonly"></a>
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                                <label>Tình Trạng Nhân Viên </label>
                                <input id="current-pass-control" name="txt_tinhtrang" class="form-control" type="text" value="{!!$data->tinhtrang!!}" readonly="readonly">
                              <label>Tổng Số Phép năm</label>
                            <input id="current-pass-control" name="txt_ma_bhxh" class="form-control" type="text" value="{!!floor(Carbon::parse($phepnam->ngay_ketthuc)->diffInDays(Carbon::parse($phepnam->ngay_batdau))/30)!!}" readonly="readonly">                                                 
                                <label>Mã Bảo Hiểm Xã Hội </label>
                                <a href="{!! URL::route('chitiet_bhxh',$data->ma_nv)!!}"><input id="current-pass-control" name="txt_ma_bhxh" class="form-control" type="text" value="{!!$data->ma_bhxh!!}" readonly="readonly"><a>
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                               
                               
                    </div>
                    <div class="col">
                        <label>Ngày Vào Làm</label>
                        <input id="current-pass-control" name="txt_ngayvaolam" class="form-control" type="text" value="{!!$data->ngayvao !!}" readonly="readonly">
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                                <label>Loại Hợp Đồng Lao Động </label>
                                <input id="current-pass-control" name="txt_loai_hd" class="form-control" type="text" value="{!!$data->loai_hd!!}" readonly="readonly">
                                <label>Phép năm còn lại </label>
                        <input id="current-pass-control" name="txt_loai_bhxh" class="form-control"  type="text" value="{!! floor(Carbon::parse($phepnam->ngay_ketthuc)->diffInDays(Carbon::parse($phepnam->ngay_batdau))/30)-$phepnam->phepnam_dadung !!}" readonly="readonly"></a> 
                                <div>
                                <label>Loại Bảo Hiểm Xã Hội </label>
                        <input id="current-pass-control" name="txt_loai_bhxh" class="form-control"  type="text" value="{!!$data->loai_bhxh !!}" readonly="readonly"></a>
                                <div>
                                    {!! $errors->first('txtMa') !!}
                                </div>
                    </div>
</div>

<!-- Xét duyệt khen thưởng  -->
@if(isset($result))
<br>
<br>
<div class="card-header bg-info">
                    <div class="row">
                                  <div class="col-md-5">
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Khen Thưởng: {!! $data->hoten_nv!!}</h1>
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Số tiền khen thưởng: {!! $result->sotien!!} VND</h1>
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Lý do khen thưởng: {!! $result->lydo!!}</h1>
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Ngày quyết định: {!! $result->ngay_khenthuong!!}</h1>
                                  </div>
                    
                     </div>
</div>
<br>

@endif
<!-- kết thúc xét duyệt khen thưởng  -->

<!-- xem xét kỷ luật  -->
@if(isset($info))
<div class="card-header bg-info">
                    <div class="row">
                                  <div class="col-md-5">
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Kỷ Luật: {!! $data->hoten_nv!!}</h1>
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Số tiền kỷ luật: {!! $info->sotien!!} VND</h1>
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Lý do khen thưởng: {!! $info->lydo!!}</h1>
                                       <h1 style="font-size:40px;" class="btn text-danger font-weight-bold"> Ngày quyết định: {!! $info->ngay_kyluat!!}</h1>
                                  </div>
                    
                     </div>
</div>
<br>


@endif
<!-- kết thúc xem xét kỷ luật  -->
<br>
<div> <a href="{!! URL::route('ds_nhanvien')!!}" class=" btn btn-primary"><i class="btn-icon-only icon-edit">Quay Lại</i></a> <br></div> 

   
    @endsection