<html>
<head>
<title>Admin MOS Template</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Copyright" content="arirusmanto.com">
<meta name="description" content="Admin MOS Template">
<meta name="keywords" content="Admin Page">
<meta name="author" content="Ari Rusmanto">
<meta name="language" content="Bahasa Indonesia">

<link rel="shortcut icon" href="stylesheet/img/devil-icon.png"> <!--Pemanggilan gambar favicon-->
<link rel="stylesheet" type="text/css" href="public/css/mos-css/mos-style.css"> <!--pemanggilan file css-->
</head>

<body>
<div id="header">
	<div class="inHeader">
		<div class="mosAdmin">
		Xin chào, {{$name}}<br>
		<a href="home">Đăng xuất</a>
		</div>
	<div class="clear"></div>
	</div>
</div>

<div id="wrapper">
	<div id="leftBar">
	<ul>
		<li><a href="admin-{{$name}}">Điều khiển</a></li>
		<li><a href="tabel-{{$name}}">Tài khoản</a></li>
		<li><a href="form-{{$name}}">Thông báo</a></li>
	</ul>
	</div>
	<div id="rightContent">
	<h3>Form</h3>
	
		<div class="informasi">
		ini adalah notifikasi pertanda informasi
		</div>
		
		<div class="gagal">
		ini adalah notifikasi pertanda gagal
		</div>
		
		<div class="sukses">
		ini adalah notifikasi pertanda sukses
		</div>
	
		<table width="95%">
			<tr><td width="125px"><b>Nhập tiêu đề nội dung :</b></td><td><input type="text" class="pendek" width="300px"></td></tr>
			<tr><td><b>Nội dung tin tức :</b></td><td><textarea></textarea></td></tr>
			<tr><td></td><td>
			<input type="button" class="button" value="Button">
			<input type="submit" class="button" value="Submit">
			<input type="reset" class="button" value="Reset">
			</td></tr>
		</table>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> | Silahkan baca <a href="lisensi.txt" target="_blank">Lisensi</a>
</div>
</div>
</body>
</html>