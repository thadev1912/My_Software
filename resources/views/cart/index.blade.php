<?php
session_start();
 header('Access-Control-Allow-Origin: *'); 
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
    <link rel="stylesheet" href="cart/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/themify-icons.css" type="text/css">
    <link rel="stylesheet" href="cart/css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="cart/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="cart/css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="cart/css/style.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
   
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <style>
        #list
        {
            background:whitesmoke;
            border-bottom-left-radius: 2px;
            border-bottom-right-radius: 2px;
            border-style: 1px solid ;    
            height:auto;
            margin-right: -4px;
            padding-right: -2px;
            position: relative;
            z-index:1;
        }
    </style>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="header-top">
            <div class="container">
                <div class="ht-left">
                    <div class="mail-service">
                        <i class=" fa fa-envelope"></i>
                        hello.colorlib@gmail.com
                    </div>
                    <div class="phone-service">
                        <i class=" fa fa-phone"></i>
                        +65 11.188.888
                    </div>
                </div>
                <div class="ht-right">
                    <a href="#" class="login-panel"><i class="fa fa-user"></i>Login</a>
                    <div class="lan-selector">
                        <select class="language_drop" name="countries" id="countries" style="width:300px;">
                            <option value='yt' data-image="img/flag-1.jpg" data-imagecss="flag yt"
                                data-title="English">English</option>
                            <option value='yu' data-image="img/flag-2.jpg" data-imagecss="flag yu"
                                data-title="Bangladesh">German </option>
                        </select>
                    </div>
                    <div class="top-social">
                        <a href="#"><i class="ti-facebook"></i></a>
                        <a href="#"><i class="ti-twitter-alt"></i></a>
                        <a href="#"><i class="ti-linkedin"></i></a>
                        <a href="#"><i class="ti-pinterest"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="inner-header">
                <div class="row">
                    <div class="col-lg-2 col-md-2">
                        <div class="logo">
                            <a href="#">
                                <img src="img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <!---TÌM KIẾM--->
                    <div class="col-lg-7 col-md-7">
                        <div class="advanced-search">
                            <button type="button" class="category-btn">All Categories</button>
                            <form action="#" id="timkiem_shop" class="input-group">
                              <input type="hidden" name="_token" value="{!! csrf_token() !!}" />
                                <input type="text" name="txt_search"  placeholder="What do you need?">                               
                                <button type="button"><i class="ti-search"></i></button>
                            </form>
                            <table class="list table table-bordered" id="list">                               
                            </table>
                        </div>
                    </div>
                    <div class="col-lg-3 text-right col-md-3">
                        <ul class="nav-right">
                            <li class="heart-icon"><a href="#">
                                    <i class="icon_heart_alt"></i>
                                    <span>1</span>
                                </a>
                            </li>
                            <li class="cart-icon"><a href="{{URL ::route('giohang')}}">
                                    <i class="icon_bag_alt"></i>
                                    <span>2</span>
                                </a>
                                <div class="cart-hover">
                                    <div class="select-items">
                                        <table>
                                            <tbody>
                                                <tr>
                                                    <td class="si-pic"><img src="cart/img/products/laptop_hp.jpg" style="width:80px; height:80px;" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                            <p>₫18.000.000 x 1</p>
                                                            <h6>Laptop HP</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td class="si-pic"><img src="cart/img/products/laptop_dell.jpg" style="width:80px; height:80px;" alt=""></td>
                                                    <td class="si-text">
                                                        <div class="product-selected">
                                                        <p>₫19.000.000 x 1</p>
                                                            <h6>Laptop Dell</h6>
                                                        </div>
                                                    </td>
                                                    <td class="si-close">
                                                        <i class="ti-close"></i>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="select-total">
                                        <span>total:</span>
                                        <h5>₫120.00</h5>
                                    </div>
                                    <div class="select-button">
                                        <a href="" class="primary-btn view-card">VIEW CARD</a>
                                        <a href="#" class="primary-btn checkout-btn">CHECK OUT</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="nav-item">
            <div class="container">
                <div class="nav-depart">
                    <div class="depart-btn">
                        <i class="ti-menu"></i>
                        <span>All departments</span>
                        <ul class="depart-hover">
                            <li class="active"><a href="#">Women’s Clothing</a></li>
                            <li><a href="#">Men’s Clothing</a></li>
                            <li><a href="#">Underwear</a></li>
                            <li><a href="#">Kid's Clothing</a></li>
                            <li><a href="#">Brand Fashion</a></li>
                            <li><a href="#">Accessories/Shoes</a></li>
                            <li><a href="#">Luxury Brands</a></li>
                            <li><a href="#">Brand Outdoor Apparel</a></li>
                        </ul>
                    </div>
                </div>
                <nav class="nav-menu mobile-menu">
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Collection</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                        <li><a href="#">Pages</a></li>
                    </ul>
                </nav>
                <div id="mobile-menu-wrap"></div>
            </div>
        </div>
    </header>
    <!--Header End -->

    <!-- Breadcrumb Section Begin -->
    <div class="breacrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <a href="#"><i class="fa fa-home"></i> Home</a>
                        <span>Shop</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section Begin -->
      <!-- /////////////////////////////////////////////////////////////////////////////////////////////////// -->
    <!-- Product Shop Section Begin -->

 
    <section class="product-shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 order-1 order-lg-2">
                    <div class="product-list">
     
<!--danh mục điện thoại-->
<div class="row slider">
                        @foreach($phones as $dt)
                            <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                                     <div class="pi-pic">
                                                                     <img src="cart/img/products/{{$dt->image}}" alt="">
                                                                     <div class="sale pp-sale">Sale</div>
                                                                            <div class="icon">
                                                                                 <i class="icon_heart_alt"></i>
                                                                            </div>
                                                                 <ul>
                                                                           <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                                           <li class="quick-view"><a href="{!! URL ::route('buy',$dt->id)!!}">+ Add Cart</a></li>
                                                                           <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                                 </ul>
                                                     </div>
                                                     <div class="pi-text">
                                                                       <div class="catagory-name">{{$dt->danhmuc}}</div>
                                                                                <a href="#">
                                                                                               <h5>{{$dt->name}}</h5>
                                                                                </a>
                                                                       <div class="product-price">
                                                                                    {{$dt->price}}
                                                                      </div>
                                                    </div>
                                         </div>
                            </div>

                            @endforeach
                            
            
</div>
<!-- kết thúc danh mục điện thoại-->  
<!--danh mục dong ho-->
<div class="row slider">
                        @foreach($watchs as $dh)
                            <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                                     <div class="pi-pic">
                                                                     <img src="cart/img/products/{{$dh->image}}" alt="">
                                                                     <div class="sale pp-sale">Sale</div>
                                                                            <div class="icon">
                                                                                 <i class="icon_heart_alt"></i>
                                                                            </div>
                                                                 <ul>
                                                                           <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                                           <li class="quick-view"><a href="{!! URL ::route('buy',$dh->id)!!}">+ Add Cart</a></li>
                                                                           <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                                 </ul>
                                                     </div>
                                                     <div class="pi-text">
                                                                       <div class="catagory-name">{{$dh->danhmuc}}</div>
                                                                                <a href="#">
                                                                                               <h5>{{$dh->name}}</h5>
                                                                                </a>
                                                                       <div class="product-price">
                                                                                    {{$dh->price}}
                                                                      </div>
                                                    </div>
                                         </div>
                            </div>

                            @endforeach
                            
            
</div>
<!-- kết thúc danh mục điện thoại-->  
  <!-- show san pham laptop-->                  
  <div class="row slider">
                        @foreach($laptops as $lt)
                            <div class="col-lg-4 col-sm-6">
                                        <div class="product-item">
                                                     <div class="pi-pic">
                                                                     <img src="cart/img/products/{{$lt->image}}" alt="">
                                                                     <div class="sale pp-sale">Sale</div>
                                                                            <div class="icon">
                                                                                 <i class="icon_heart_alt"></i>
                                                                            </div>
                                                                 <ul>
                                                                           <li class="w-icon active"><a href="#"><i class="icon_bag_alt"></i></a></li>
                                                                           <li class="quick-view"><a href="{!! URL ::route('buy',$lt->id)!!}">+ Add Cart</a></li>
                                                                           <li class="w-icon"><a href="#"><i class="fa fa-random"></i></a></li>
                                                                 </ul>
                                                     </div>
                                                     <div class="pi-text">
                                                                       <div class="catagory-name">{{$lt->danhmuc}}</div>
                                                                                <a href="#">
                                                                                               <h5>{{$lt->name}}</h5>
                                                                                </a>
                                                                       <div class="product-price">
                                                                                    {{$lt->price}}
                                                                      </div>
                                                    </div>
                                         </div>
                                        
                            </div>

                            @endforeach
                            
                            
</div>
              
 <!-- end show san pham laptop-->


<script type="text/javascript">
     $('#list').fadeOut();  
       
$('#timkiem_shop').keyup(function(){
    $('#list').html('');
    var search = $("input[name='txt_search']").val();//lấy gía trị ng dùng gõ
    //var _token = $('input[name="_token"]').val(); // token để mã hóa dữ liệu
    //console.log(search);
    if(search!='')
   
    {
       
    $.ajax({
        headers: { 'X-CSRF-TOKEN': "{{ csrf_token() }}" },
        url:'http://localhost/sieuga/Quanlynhansu/public/api/timkiem_shop',
       
        type:'GET',
        data:{search:search},
        dataType:'json', // cái này quan trọng
        success : function(res)
        {
            //console.table(res.data);
            let info= res.data.timkiem;
            console.table(info);            
            $('#list').fadeIn('slow');  
            $('#list').html('');
           
           //    $('#list').html(res.data); //nhận dữ liệu dạng html và gán vào cặp thẻ có id là countryList
            $.each(info,function(i,item)
            {
                $('#list').append('<tr>\
                <td><img src="cart/img/products/'+item.image+'"style="width:30px;height:30px"></td>\
                <td>'+item.name+'</td>\
                <td>'+item.price+'</td>\
                </tr>');  
                    $('#list').append('</hr>');         
            });
           
           
        }
       
    });
  //  $('#list').html('');
}
else{
    $('#list').fadeOut();  

}
});
</script> 
        <div class="copyright-reserved">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="copyright-text">
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://www.facebook.com/thuy.huynhvan" target="_blank">Huynh Van Thuy</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="payment-pic">
                            <img src="img/payment-method.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
                                    $(document).ready(function(){
                                        $('#list').removeClass('d-none');
  $('.slider').slick(
    {
     
      slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed: 2000,
      arrows:false,
    
});
});
</script>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="cart/js/jquery-3.3.1.min.js"></script>
    <script src="cart/js/bootstrap.min.js"></script>
    <script src="cart/js/jquery-ui.min.js"></script>
    <script src="cart/js/jquery.countdown.min.js"></script>
    <script src="cart/js/jquery.nice-select.min.js"></script>
    <script src="cart/js/jquery.zoom.min.js"></script>
    <script src="cart/js/jquery.dd.min.js"></script>
    <script src="cart/js/jquery.slicknav.js"></script>
    <script src="cart/js/owl.carousel.min.js"></script>
    <script src="cart/js/main.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
</body>

</html>