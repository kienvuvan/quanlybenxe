<!DOCTYPE html>
<html>

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Trang web quản lý bến xe khách Hà Nội </title>

	<link rel="stylesheet" href="public/css/demo.css">
	<link rel="stylesheet" href="public/css/header-fixed.css">
  <link rel="stylesheet" href="public/css/mystyle.css">
  <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Cookie' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="public/css/layout/settings.css">
  <link rel="stylesheet" href="public/css/layout/colorbox.css">
  <link rel="stylesheet" href="public/css/layout/font-awesome.min.css">
  <link rel="stylesheet" title="style" href="public/css/layout/style.css">
  <link rel="stylesheet" href="public/css/layout/animate.css">
  <link rel="stylesheet" title="style" href="public/css/layout/huong-style.css">
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.11.4/themes/smoothness/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
  <link rel="stylesheet prefetch" href="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.css">
  <script src="http://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script>

  <script type="text/javascript">
    $( function() {
      var availableTags = [
        "Hà Nội",
        "Nam Định",
        "Thái Bình",
        "Hà Nam",
        "Hải Phỏng",
        "Huế",
        "Nghệ An",
        "Hà Tĩnh",
        "Lạng Sơn",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
      ];
      $( "#searchfirst" ).autocomplete({
        source: availableTags
      });
      $( "#searchsecond" ).autocomplete({
        source: availableTags
      });
    }
  );
  </script>
  <script type="text/javascript">
    $(function() {
      $('#datepicker').datepicker();
    });
  </script>
</head>
<body>
<header class="header-fixed">
	<div class="header-limiter">
		<h1><a href="home">Quanlybenxekhach<span>HaNoi</span></a></h1>
		<nav>
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
                <li><a href="buyticket">Đặt vé</a></li>
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
  <div class="search">
    <br>
    <br>
    <h1 style="color: blue;padding-left: 20px"><b>Mua vé xe trực tuyến tiện lợi, không cần chờ đợi</b></h1>
    <form method="get" action="searchcarowner">
      <table>
        <tr>
          <td style="vertical-align: middle; width: 150px;text-align: center; padding-left: 20px">Điểm khởi hành :</td>
          <td>
            <input type="text" name="firstpoint" placeholder="Nhập điểm khởi hành" id="searchfirst">
          </td>
          <td style="width: 60px; text-align: center; vertical-align: middle;"><img src="resources/image/quanlybenxe/convert.png"></td>
          <td style="vertical-align: middle; width: 70px;text-align: center;">Điểm đến :</td>
          <td style="vertical-align: middle; width: 180px;text-align: center; padding-left: 10px  "><input type="text" name="destinationpoint" placeholder="Nhập điểm đến" id="searchsecond"></td>
        </tr>
        <tr style="height: 20px"></tr>
        <tr>
          <td style="vertical-align: middle; width: 120px;text-align: center;">Chọn ngày đi :</td>
          <td id="datepicker" class="input-group date" data-date-format="dd/mm/yyyy">
            <input class="form-control" readonly="" type="text"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span> 
          </td>
        </tr>
        <tr style="height: 20px"></tr>
        <tr>
          <td style="width: 120px"></td>
          <td>
            <button><b>Tìm xe</b></button>
          </td>
        </tr>
      </table>
    </form>
  </div>
  <!-- <div class="table"></div> -->
  <div class="container">
      <div id="content" class="space-top-none">
      <div class="main-content">
        <div class="space60">&nbsp;</div>
        <div class="row">
          <div class="col-sm-12">
            <div class="beta-products-list">
              <h4>Hãng xe đi nhiều</h4>
              <div class="beta-products-details">
                <p class="pull-left">Tìm thấy {{count($nhaXe)}} nhà xe</p>
                <div class="clearfix"></div>
              </div>

              <div class="row">
                @foreach($nhaXe as $car)
                  <div class="col-sm-3">
                    <div class="single-item">
                      <div class="single-item-header">
                        <a href="product.html"><img src="resources/image/quanlybenxe/xe1.png" alt=""></a>
                      </div>
                      <div class="single-item-body">
                        <p class="single-item-title">{{$car->NhaXe}}</p>
                      </div>
                      <div class="single-item-caption">
                        <a class="beta-btn primary" href="product.html">Thông tin chi tiết </a>
                        <div class="clearfix"></div>
                      </div>
                    </div>
                  </div>
                @endforeach
              </div>
            </div>
          </div>
        </div>
      </div>
      </div>
  </div>
<div id="footer" class="color-div">
    <div class="container">
      <div class="row">
        <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Instagram Feed</h4>
            <div id="beta-instagram-feed"><div></div></div>
          </div>
        </div>
        <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Information</h4>
          </div>
        </div>
        <div class="col-sm-3">
         <div class="col-sm-10">
            <h4 class="widget-title">Instagram Feed1</h4>
          </div>
        </div>
        <div class="col-sm-3">
         <div class="col-sm-10">
            <h4 class="widget-title">Instagram Feed1</h4>
          </div>
        </div>
        <!-- <div class="col-sm-3">
          <div class="widget">
            <h4 class="widget-title">Newsletter Subscribe</h4>
          </div>
        </div> -->
      </div> 
    </div>
  </div>
<script>
 $(document).ready(function(){

    var showHeaderAt = 150;

    var win = $(window),
        body = $('body');

    // Show the fixed header only on larger screen devices

    if(win.width() > 600){

      // When we scroll more than 150px down, we set the
      // "fixed" class on the body element.

      win.on('scroll', function(e){

        if(win.scrollTop() > showHeaderAt) {
          body.addClass('fixed');
          bode.addClass('header-bottom');
        }
        else {
          body.removeClass('fixed');
          body.removeClass('header-bottom');
        }
      });

    }
  });
</script>
<script src="public/js/jquery.js"></script>
<script src="public/js/custom2.js"></script>
<script src="public/js/wow.min.js"></script>
<script src="public/js/Animo.js"></script>
<script src="public/js/jquery.themepunch.tools.min.js"></script>
<script src="public/js/jquery.themepunch.revolution.min.js"></script>
</body>
</html>
