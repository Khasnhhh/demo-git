<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        h1.page-header {
            margin-top: -5px;
        }

        .sidebar {
            padding-left: 0;
        }

        .main-container {
            background: #FFF;
            padding-top: 15px;
            margin-top: -20px;
        }

        .footer {
            width: 100%;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">
                    ADMIN
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <!-- <form class="navbar-form navbar-left" method="GET" role="search">
                    <div class="form-group">
                        <input type="text" name="q" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><i class="glyphicon glyphicon-search"></i></button>
                </form> -->
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="../index.php" target="_blank">Trang web</a></li>
                    <li class="dropdown ">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                            Tùy chọn
                            <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header"></li>
                            <li class=""><a href="./DoiMatKhau.php">Đổi mật khẩu</a></li>
                            <!-- <li class=""><a href="#">Other Link</a></li>
                            <li class=""><a href="#">Other Link</a></li> -->
                            <li class="divider"></li>
                            <li><a href="./Login.php">Đăng xuất</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
    <div class="container-fluid main-container">
        <div class="col-md-2 sidebar">
            <ul class="nav nav-pills nav-stacked">
                <li class="active"><a href="#">Home</a></li>
                <li><a href="./Ql_KH.php">Quản lý tài khoản khách hàng</a></li>
                <li><a href="./LoaiSanPham.php">Loại sản phẩm</a></li>
                <li><a href="./XuatXu.php">Xuất xứ</a></li>
                <li><a href="./SanPham.php">Sản phẩm</a></li>
                <li><a href="./QuanLyHoaDon.php">Quản lý hóa đơn</a></li>
                <li><a href="./ThongKe.php">Thống kê</a></li>
            </ul>
        </div>
</body>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
</html>