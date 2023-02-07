<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}"> <!--đăng ký token tại trang meta-->
    <title>HR-Software</title>

    <!-- Custom fonts for this template-->
    <!-- <link rel="stylesheet" href="{{asset('/css/bootstrap1.min.css') }}"> -->
    <script src="https://cdn.jsdelivr.net/npm/vue@2.5.16/dist/vue.js"></script>
    <link rel="stylesheet" href="{{ asset('/css/main.css') }}">
    <link href="{{asset('js/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"> -->
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
   

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-left" href="index.html">
                
                <div class="sidebar-brand-text mx-3 bg-text-info">HR SOFTWARE</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

           
            <!-- Divider -->
            <hr class="sidebar-divider">
              <!-- Nav Item - Utilities Collapse Menu -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('bangluong')!!}" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <i class="fas fa-address-card"></i>
                    <span>Quản Lý Nhân Viên</span>
                </a>
                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('ds_nhanvien')!!}">Danh Sách Nhân Viên</a>
                        <a class="collapse-item" href="{!!URL::route('nhanvien')!!}"> Điều Chỉnh Nhân Viên</a>
                        
                    </div>
                </div>
            </li>
             <!-- Nav Item - Quản Lý Hợp Đồng -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('bangluong')!!}" data-toggle="collapse" data-target="#collapseThree"
                    aria-expanded="false" aria-controls="collapseThree">
                    <i class="fas fa-file-signature"></i>
                    <span>Quản Lý Hợp Đồng</span>
                </a>
                <div id="collapseThree" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('hopdong')!!}">Thông Kê Hợp Đồng
                        </a>
                        
                    </div>
                </div>
            </li>
            
              <!-- Nav Item - Quản Lý Bảo Hiểm -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('bangluong')!!}" data-toggle="collapse" data-target="#collapseFour"
                    aria-expanded="false" aria-controls="collapseFour">
                    <i class="fas fa-book-medical"></i>
                    <span>Quản Lý Bảo Hiểm</span>
                </a>
                <div id="collapseFour" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('baohiem')!!}">Thông Kê Bảo Hiểm</a>
                       
                    </div>
                </div>
            </li>
            <!-- Nav Item - Quản Lý Phép Năm -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('bangluong')!!}" data-toggle="collapse" data-target="#collapseFive"
                    aria-expanded="false" aria-controls="collapseFive">
                    <i class="fas fa-user-edit"></i>
                    <span>Quản Lý Phép Năm</span>
                </a>
                <div id="collapseFive" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('phepnam')!!}">Thông Kê Phép Năm
                        </a>
                        
                    </div>
                </div>
            </li>
             <!-- Nav Item - Phép năm -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('getform')!!}" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-wifi"></i>
                    <span>Quản Lý Chấm Công</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('getform')!!}">Tải Chấm Công</a>
                        <a class="collapse-item" href="{!!URL::route('dulieu_chamcong')!!}">Dữ liệu Chấm Công</a>
                        <a class="collapse-item" href="{!!URL::route('bangluong')!!}">Thông Kê Bảng Lương</a>
                    </div>
                </div>
            </li>
             <!-- Nav Item - Phép năm -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('nhapkho')!!}" data-toggle="collapse" data-target="#collapseTwentyOne"
                    aria-expanded="true" aria-controls="collapseTwentyOne">
                    <i class="fas fa-wifi"></i>
                    <span>Quản Lý Kho Hàng</span>
                </a>
                <div id="collapseTwentyOne" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Components:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('nhapkho')!!}">Tạo Phiếu Nhập Kho</a>
                       
                    </div>
                </div>
            </li>

          

          

           

              <!-- Nav Item - Quản Lý Tổng Hợp -->
              <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('bangluong')!!}" data-toggle="collapse" data-target="#collapseSix"
                    aria-expanded="false" aria-controls="collapseSix">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Quản Lý Chung</span>
                </a>
                <div id="collapseSix" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('phongban')!!}">Danh Mục Phòng Ban</a>
                        <a class="collapse-item" href="{!!URL::route('chucvu')!!}">Danh Mục Chức Vụ</a>
                        <a class="collapse-item" href="{!!URL::route('khenthuong')!!}">Danh Mục Khen Thưởng</a>
                        <a class="collapse-item" href="{!!URL::route('kyluat')!!}">Danh Mục Kỷ Luật</a>
                    </div>
                </div>
            </li>
             <!-- Nav Item - Shop Mobile -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('bangluong')!!}" data-toggle="collapse" data-target="#collapseSeven"
                    aria-expanded="false" aria-controls="collapseSeven">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Shop Online</span>
                </a>
                <div id="collapseSeven" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('shop')!!}">Shop Online</a>
                        <a class="collapse-item" href="{!!URL::route('giohang')!!}">Giỏ Hàng</a>
                        <a class="collapse-item" href="{!!URL::route('donhang')!!}">Đơn Hàng</a>
                       
                        
                    </div>
                </div>
            </li>
            <!-- Nav Item - Phân Quyền -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="{!!URL::route('bangluong')!!}" data-toggle="collapse" data-target="#collapseEight"
                    aria-expanded="false" aria-controls="collapseEight">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Phân Quyền</span>
                </a>
                <div id="collapseEight" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('list_user')!!}">Danh Sách Phân Quyền</a>
                        <a class="collapse-item" href="{!!URL::route('role')!!}">Danh Sách Nhóm Quyền</a>
                        
                       
                        
                    </div>
                </div>
            </li>
             <!-- Nav Item - Phân Quyền -->
             <li class="nav-item">
                <a class="nav-link collapsed" href="" data-toggle="collapse" data-target="#collapseNine"
                    aria-expanded="false" aria-controls="collapseNine">
                    <i class="fas fa-fw fa-wrench"></i>
                    <span>Kết nối API</span>
                </a>
                <div id="collapseNine" class="collapse" aria-labelledby="headingUtilities"
                    data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <!-- <h6 class="collapse-header">Custom Utilities:</h6> -->
                        <a class="collapse-item" href="{!!URL::route('ketnoiapi')!!}">Quản Trị Api Cara_River</a>
                        <a class="collapse-item" href="{!!URL::route('mypost')!!}">Dữ Liệu Hệ Thống Api</a>
                        
                       
                        
                    </div>
                </div>
            </li>
            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>Hệ Thống</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="{{URL::route('dangnhap')}}">Đăng nhập</a>
                        <a class="collapse-item" href="{{URL::route('dangky')}}">Đăng Ký</a>
                        <a class="collapse-item" href="">Quên mật khẩu</a>
                        <div class="collapse-divider"></div>
                        
                    </div>
                </div>
            </li>

          
      
          

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                   

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Tin nhắn
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Ngày 24/12/2019</div>
                                        <span class="font-weight-bold">Báo cáo số lượng nhân sự tháng mới</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Ngày 20/7/2019</div>
                                        Báo cáo quản lý chấm công!!!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">Ngày 12/5/2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_1.svg"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_2.svg"
                                            alt="...">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="img/undraw_profile_3.svg"
                                            alt="...">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="...">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li>

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        @if(Auth::check())
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="{{URL::route('thoat')}}" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">
                                Chào <strong>{{Auth::user()->name}}</strong>
                                   
                                </span>
                                <img class="img-profile rounded-circle"
                                    src="images/{{Auth::user()->avatar}}"> 
                                  
                                    </a>
                                  
                                    
                            
                            @endif
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hồ sơ
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thiết lập
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Hoạt động đăng nhập
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="{{URL ::route('thoat')}}" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Thoát
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                   

                    <!-- Content Row -->
                    <div class="row">

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-primary text-uppercase mb-1">
                                                QUẢN LÝ NHÂN SỰ</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-success text-uppercase mb-1">
                                                QUẢN LÝ LƯƠNG</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Earnings (Monthly) Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-info text-uppercase mb-1">QUẢN LÝ BÁN HÀNG
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"></div>
                                                </div>
                                                <div class="col">
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-md font-weight-bold text-warning text-uppercase mb-1">
                                                PHÂN QUYỀN</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-comments fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                  
            <!-- End of Main Content -->

           

                <!-- SRART RENDER BODY-->
                @yield('main_body')
                @yield('javascript')

                 <!-- SRART RENDER BODY-->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Bạn có muốn thoát?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Lựa chọn "Thoát" nếu bạn muốn kết thúc phiên làm việc.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Hủy Bỏ</button>
                    <a class="btn btn-primary" href="{{URL::route('thoat')}}">Thoát</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="{{asset('/js/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('js/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('/css/main.js') }}"></script>

    

</body>

</html>