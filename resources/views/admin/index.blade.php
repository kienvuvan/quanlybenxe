q<html>
<head>
<title>Admin-Trang quản lý bến xe</title>
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
	<h3>Dashboard</h3>
	<div class="quoteOfDay">
	<b>Quote of the day :</b><br>
	<i style="color: #5b5b5b;">"If you think you can, you really can"</i>
	</div>
		<div class="shortcutHome">
		<a href=""><img src="public/css/mos-css/img/posting.png"><br>Tambah Posting</a>
		</div>
		<div class="shortcutHome">
		<a href=""><img src="public/css/mos-css/img/photo.png"><br>Upload Foto</a>
		</div>
		<div class="shortcutHome">
		<a href=""><img src="public/css/mos-css/img/halaman.png"><br>Tambah Halaman</a>
		</div>
		<div class="shortcutHome">
		<a href=""><img src="public/css/mos-css/img/template.png"><br>Pengaturan Template</a>
		</div>
		<div class="shortcutHome">
		<a href=""><img src="public/css/mos-css/img/quote.png"><br>Tambah QOD</a>
		</div>
		<div class="shortcutHome">
		<a href=""><img src="public/css/mos-css/img/bukutamu.png"><br>Data Buku Tamu</a>
		</div>
		
		<div class="clear"></div>
		
		<div id="smallRight"><h3>Informasi web anda</h3>
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<tr><td style="border: none;padding: 4px;">Jumlah posting</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah kategori</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah komentar diterbitkan</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah komentar belum diterbitkan</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah foto dalam galeri</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Jumlah data buku tamu</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
		</table>
		</div>
		<div id="smallRight"><h3>Statistik pengunjung web</h3>
		
		<table style="border: none;font-size: 12px;color: #5b5b5b;width: 100%;margin: 10px 0 10px 0;">
			<tr><td style="border: none;padding: 4px;">Pengunjung online</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Pengunjung hari ini</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Total pengunjung</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Hit hari ini</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
			<tr><td style="border: none;padding: 4px;">Total hit</td><td style="border: none;padding: 4px;"><b>12</b></td></tr>
		</table>
		</div>
	</div>
<div class="clear"></div>
<div id="footer">
	&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" rel="nofollow" target="_blank">arirusmanto.com</a><br>
	redesign <a href="#">Tulis nama anda disini</a> 
</div>
</div>
</body>
</html>