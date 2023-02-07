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
                        <a href="{URL ::route('nhanvien')}}"><i class="fa fa-home"></i> Home</a>
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
                <div class="col-lg-12">
                   
                    
                    <div class="cart-table">
                    <form method="post" action="{!! URL ::route('update')!!}">
                          @csrf
                        <table>
                            <thead>
                                <tr>
                                    
                                    <th>Đơn Hàng</th>
                                    <th>Người mua</th>
                                    <th>Ảnh SP</th>
                                    <th class="p-name">Sản Phẩm</th>
                                    <th>Giá</th>
                                    <th>S.Lượng</th>
                                    <th>Thành Tiền</th>                                   
									<th>Chi Tiết</th>
                                </tr>
                            </thead>
                            @php $total=0;$qty=0;
                                       
                            @endphp
                            @foreach($donhang as $dh)
      
                           

                            
                         
                           
                            
                            
                            <tbody>
                                <tr>
                               
                                <td class="cart-pic first-row">{!!$dh->ma_dh!!}</td>
                                <td class="cart-pic first-row">{!!$dh->hoten_user!!}</td>
                                    <td class="cart-pic first-row"><img src="cart/img/products/{!!$dh->anh_sp!!}" style="width:80px; heigh: 80px;"alt=""></td>
                                    <td class="cart-title first-row">
                                        <h5>{{$dh->ten_sp}}</h5>
                                    </td>
                                    <td class="p-price first-row">{!!number_format($dh->gia),''!!}</td>
                                    <td class="qua-col first-row">{!!$dh->sl!!}</td>                                
                                    <td class="total-price first-row">{!!$dh->sl*$dh->gia!!}</td>
                                    <td><a href="" class="btn btn-danger"><i class="ti-close"></i></a></td>
									<!-- <td class="close-td first-row"><i class="ti-close"></i></td> -->
                                </tr>
                                </tbody> 
                                @endforeach 
                                                
                        </table>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 offset-lg-8">
                            <div class="proceed-checkout">
                                <ul>
                                    <li class="subtotal">Tổng Số Tiền <span>{{number_format($total),}}</span></li>
                                    <li class="cart-total">Số lượng <span>{{number_format($qty),}}</span></li>
                                </ul>
                                <p></p>
                                <div class="capnhat">
                                   <button type="submit" class="form-control btn btn-primary">Cập nhật giỏ hàng</button>
                                </div>
                               
                                <p></p>
                                <div class="thanhtoan">
                                  <a href="{{URL ::route('payment')}}" class="form-control btn btn-danger" value="checkout">Đặt Hàng Ngay</a>
                               </div>
                                <!-- <button class="form-control bg-primary">CẬP NHẬT GIỎ HÀNG<button>
                                <button class="form-control bg-primary">THANH TOÁN<button> -->
                            </div>
</form>
                        </div>
                    </div>
                   
                    <!-- kết thuc  -->
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