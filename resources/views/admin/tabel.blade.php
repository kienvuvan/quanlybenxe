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
	<h3>Tabel</h3>
		<table class="data">
			<tr class="data">
				<th class="data" width="30px">STT</th>
				<th class="data">Email</th>
				<th class="data">Cmt</th>
				<th class="data">Loại</th>
				<th class="data" width="75px">Tính năng</th>
			</tr>
			@foreach($taikhoan as $key => $tk)
				<tr class="data">
					<td class="data" width="30px"><center>{{$key+1}}</center></td>
					<td class="data"><center>{{$tk->Email}}</center></td>
					<td class="data"><center>{{$tk->Cmt}}</center></td>
					<td class="data"><center>{{$tk->Loai}}</center></td>
					<td class="data" width="75px">
					<center>
					<a href=""><img src="resources/image/deletered.png"></a>&nbsp;&nbsp;&nbsp;
					<a href="#"><img src="public/css/mos-css/img/detail.png"></a>
					</center>
					</td>
				</tr>
			@endforeach
		</table>
	</div>

	<div class="clear">
	</div>
	<div id="footer">
		&copy; 2012 MOS css template | <a href="#">Nama Website Anda</a> | design <a href="http://arirusmanto.com" target="_blank">arirusmanto.com</a><br>
		redesign <a href="#">Tulis nama anda disini</a> | Silahkan baca <a href="lisensi.txt" target="_blank">Lisensi</a>
	</div>
</div>

<dialog id="dialog">
	Bạn có muốn xóa người dùng này không?
	<button id="oc">No</button>
</dialog>
<script type="text/javascript">
	var dialog = document.querySelector('dialog');
	document.querySelector('#delete').onclick = function(){
		dialog.show();
	}
	document.querySelector('#oc').onclick = function(){
		dialog.close();
	}
</script>
</body>
</html>