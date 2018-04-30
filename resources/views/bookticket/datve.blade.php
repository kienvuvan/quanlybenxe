<!DOCTYPE html>
<html>
<head>
	<title>Trang web quản lý bến xe khách Hà Nội </title>
	<link rel="stylesheet" type="text/css" href="public/css/mos-css/mos-style.css">
	<link rel="stylesheet" type="text/css" href="public/css/buyticket/form.css">
	<link rel="stylesheet" type="text/css" href="public/css/demo.css">
	<link rel="stylesheet" type="text/css" href="public/css/header-fixed.css">
	<link rel="stylesheet" type="text/css" href="public/css/mystyle.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/layout/settings.css">
  <link rel="stylesheet" type="text/css" href="public/css/layout/colorbox.css">
  <link rel="stylesheet" type="text/css" href="public/css/layout/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="public/css/layout/style.css">
  <link rel="stylesheet" type="text/css" href="public/css/layout/huong-style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
</head>

<body>
<header class="header-fixed">
	<div class="header-limiter">
		<h1><a href="home">Quanlybenxekhach<span>HaNoi</span></a></h1>
		<nav>
      <input type="text" name="search" placeholder="Tìm kiếm" style="width: 220px;color :black" >
      <a href="">Đăng ký</a>
			<a href="login">Đăng nhập</a>
		</nav>
	</div>
</header>
<head class="header-fixed">
  <div class="header-bottom" style="background-color: #0277b8;">
      <div class="container">
        <a class="visible-xs beta-menu-toggle pull-right" href="#"><span class='beta-menu-toggle-text'>Menu</span> <i class="fa fa-bars"></i></a>
        <div class="visible-xs clearfix"></div>
        <nav class="main-menu">
          <ul class="l-inline ov">
            <li><a href="home">Trang chủ</a></li>
            <li><a href="#">Tiện ích</a>
              <ul class="sub-menu">
                <li><a href="buyticket1">Đặt vé</a></li>
                <li><a href="product_type.html">Kiểm tra vé</a></li>
                <li><a href="product_type.html">Hủy vé</a></li>
              </ul>
            </li>
            <li><a href="#">Tìm kiếm</a>
              <ul class="sub-menu">
                <li><a href="searchcarowner">Tìm kiếm nhà xe</a></li>
                <li><a href="searchcar">Tìm kiếm xe</a></li>
              </ul>
            </li>
            <li><a href="about.html">Giới thiệu</a></li>
            <li><a href="#">Tin tức</a></li>
            <li><a href="contacts.html">Liên hệ</a></li>
          </ul>
        </nav>
      </div>
  </div>
</head>

<div id="wrapper">
	<div id="rightContent">
		<h3 style="color:orange">Đặt vé online</h3>	
		<form method="get" action="muave">
			<input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
			<table width="95%" style="float: center">
				<tr>
					<td width="125px" style="vertical-align: middle;padding-left: 20px"><b>Mã chuyến xe :</b>
					</td>
					<td style="padding-left: 30px;padding-right: 30px"><input type="text" name="idArriver" readonly="" value="{{$MaChuyenXe}}"></td>
				</tr>
				<td style="height: 20px"></td>
				<tr>
					<td style="vertical-align: middle;padding-left: 20px"><b>Mã hành khách :</b></td>
					<td style="padding-left: 30px;padding-right: 30px"><input type="text" name="idMaxGuest" readonly="" value="{{$idMaxGuest}}"></td>
				</tr>
				<tr style="height: 20px"></tr>
				<tr>
					<td style="vertical-align: middle;padding-left: 20px"><b>Họ tên :</b></td>
					<td style="padding-left: 30px;padding-right: 30px"><input type="text" name="name" width="200px" required="Vui lòng nhập họ tên"></td>
				</tr>
				<tr style="height: 20px"></tr>
				<tr>
					<td style="vertical-align: middle;padding-left: 20px"><b>Chứng minh thư :</b></td>
					<td style="padding-left: 30px;padding-right: 30px"><input type="text" name="id" width="200px" required=""></td>
				</tr>
				<tr style="height: 20px"></tr>
				<tr>
					<td style="vertical-align: middle;padding-left: 20px"><b>Mã hủy vé xe :</b></td>
					<td style="padding-left: 30px;padding-right: 30px"><input type="text" name ="idDestroy" readonly="" value="{{$destroy}}"></td>
				</tr>
				<tr style="height: 30px"></tr>
				<tr>
					<td></td>
					<td style="padding-left: 100px">
						<input type="submit" class="button" value="Đặt vé">
						<input type="reset" class="button" value="Xóa chữ">
					</td>
				</tr>
			</table>
		</form>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> | Silahkan baca <a href="lisensi.txt" target="_blank">Lisensi</a>
</div>
</div>
</body>
</html>