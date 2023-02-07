<?php
session_start();
?>
<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Fashi Template">
    <meta name="keywords" content="Fashi, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fashi | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('cart/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/themify-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{ asset('cart/css/style.css')}}" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>


    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text product-more">
                        <a href="./home.html"><i class="fa fa-home"></i> Home</a>
                        <a href="{{URL ::route('shop')}}">Shop</a>
                        <span>Shopping Cart</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->

    <!-- Shopping Cart Section Begin -->
    <section class="shopping-cart spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                  
                <div class="panel panel-success">
                <div class="panel-heading bg-primary">
                <form method="post" action="{!! URL ::route('chotdeal')!!}">
                    <h3 class="panel-title">Thông tin khách hàng</h3>
                </div>
                <div class="panel-body"> <!--thông tin chi tiet khách hàng-->
                               <label>Họ và tên:</label>
                                         <input id="current-pass-control" name="txt_hoten" class="form-control" type="text" value="{{Auth::user()->hoten}}">
                                <label>Địa chỉ giao hàng:  </label>
                                         <input id="current-pass-control" name="txt_diachi" class="form-control" type="text" value="{{Auth::user()->diachi}}">
                                <label>Số điện thoại: </label>
                                         <input id="current-pass-control" name="txt_sdt" class="form-control" type="text" value="{{Auth::user()->sdt}}">
                                <label>Ghi chú:  </label>
                                         <input id="current-pass-control" name="txt_ghichu" class="form-control" type="text" value="">
                            </div>
                
            </div>
                </div>
                <div class="col-lg-6">
                <div class="cart-table">
                         <table>
                            <tr>
                              <th>Hình Ảnh</th>
                              <th>Sản Phẩm</th>
                              <th>Số Lượng</th>
                              <th>Thành Tiền</th>
                            </tr>
                          
                                   
                                     @csrf
                                       @php $total=0;$qty=0;                                       
                                       @endphp
                                       @foreach($cart as $item)
                                       @php  $total=$total+$item['product']->price*$item['quantity']; 
                                             $qty =$qty+$item['quantity'];
                                       @endphp 
                                       <tbody>
                                        <tr>
                                            <td class="cart-pic first-row"><img src="cart/img/products/{!!$item['product']->image!!}" style="width:80px; heigh: 80px;"alt=""></td>
                                            <td class="cart-pic first-row">{{$item['product']->name}}</td>                                
                                            <td class="cart-pic first-row">{{$item['quantity']}}</td>
                                            <td class="total-price first-row">{!!number_format($item['product']->price*$item['quantity']) !!}</td>
                                       
                                        </tr>
                                       </tbody>
                                       @endforeach
           
                                       </table> 
                                 </div>
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="cart-total">Tổng Số Tiền <span>{{$tt=number_format($total)}} VNĐ</span></li>                                    
                                    <li class="cart-total">Phí Vận Chuyển <span>{{number_format(40000)}} VNĐ</span></li>
                                    <li class="cart-total">Mã giảm giá <span>{{number_format(500000)}} VNĐ</span></li>
                                    <li class="cart-total text-danger">Số Tiền Còn lại <span>{{ number_format($total-(40000+500000))}} VNĐ</span></li>
                                </ul>
                                <p></p>
                                <div class="capnhat">
                                   <a href="{{URL ::route('giohang')}}" class="form-control btn btn-primary">Quay lại giỏ hàng</a>
                                </div>
                                <p></p>
                                <div class="check_box">                               
                                <input type="radio" name="thanhtoan" value="cash" id="cash">&nbsp;&nbsp;   Thanh Toán Tiền Mặt                               
                                <div class="check_box">                               
                                <input type="radio" name="thanhtoan" value="momo" id="">&nbsp;&nbsp;   Thanh Toán MoMo
                                </div>
                                <div class="check_box">                               
                               <input type="radio" name="thanhtoan" value="vnpay" id="">&nbsp;&nbsp;   Thanh Toán VN Pay
                               </div>
                                <p></p>
                                <div class="thanhtoan">
                                  <button type="submit" class="form-control btn btn-danger" value="checkout">Thanh Toán</button>
                               </div>
                                <!-- <button class="form-control bg-primary">CẬP NHẬT GIỎ HÀNG<button>
                                <button class="form-control bg-primary">THANH TOÁN<button> -->
                            </div>
                            
</form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping Cart Section End -->	

    <!-- Footer Section Begin -->
    <footer class="footer-section">
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ asset('cart/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('cart/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('cart/js/jquery-ui.min.js')}}"></script>
    <script src="{{ asset('cart/js/jquery.countdown.min.js')}}"></script>
    <script src="{{ asset('cart/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('cart/js/jquery.zoom.min.js')}}"></script>
    <script src="{{ asset('cart/js/jquery.dd.min.js')}}"></script>
    <script src="{{ asset('cart/js/jquery.slicknav.js')}}"></script>
    <script src="{{ asset('cart/js/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('cart/js/main.js')}}"></script>
</body>

</html>