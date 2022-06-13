<?php
		require('../database/conn.php');

		if(isset($_POST['submit'])){
			$hoten= $_POST['hoten'];
			$account= $_POST['account'];
			$pass1 = $_POST['pass1'];
			$pass2 = $_POST['pass2'];
			$email = $_POST['email'];
				if($pass1 != $pass2){
				
					echo 'Đăng kí không thành công!';
					
				}
				else{
					$sql = "INSERT INTO login (hoten, account, password, email) VALUES ('$hoten','$account', '$pass1', '$email')";
					$query = mysqli_query($conn, $sql);
					header("Location: login.php");
				}

		}

?>


<!DOCTYPE HTML>
<html lang="vi">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
	<meta charset="utf-8" />
	<link rel="icon" href="../icon/icon.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="../icon/icon.png" type="image/x-icon"/>
	<link rel="stylesheet" href="../css/bootstrap-grid.css">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
	<link href="../bootstrap/js/bootstrap.min.js">
	<link rel="preload" href="login.html">
	<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="preload stylesheet" as="style" type="text/css"/>
	<link href="../css/style.css" rel="preload stylesheet" as="style" type="text/css" />
	<title>Tạo tài khoản - Đảo Hải Sản</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

	</head>
	<body rel="customers[register]">
		<div id="opacity"></div>
<header class="header">	<div class="header__bottom">
		<div class="container container-fluid-sm">
			<div class="row align-items-center">
				<div class="header__bottom--logo col-xxl-20th col-xl-20th col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="logo"><a href="../index.php"><img class="heightwidth-auto" alt="Đảo Hải Sản" width="200" height="100" src="../icon/logo.png" /></a></div>
				</div>
				<div class="visible-md visible-lg visible-sm header__bottom--search col-xxl-3266th col-xl-30th col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="wpo-wrapper-search">
						<form class="ultimate-search" action="https://daohaisan.vn/search" autocomplete="off">
							<input type="hidden" name="type" value="product" />
							<input type="text" name="q" autocomplete="off" required class="input__search form-control" id="inputSearchAuto" placeholder="Tìm kiếm trên DAOHAISAN">
							<button class="btn__search" type="submit"><svg aria-hidden="true" width="14" height="14" title=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#dhs_icon_search"></use></svg></button>
						</form>
						<div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
							<div class="resultsContent"></div>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-flex col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12 header__bottom--hotline no-padding-xl">
					<div class="hotline_number"><a class="hotline-link" href="tel:19000098">1900 0098</a><p>(8h-21h từ T2-Chủ Nhật)</p></div>
					<p class="hotline_shipping"><img class="width-100" width="100" height="50" src="../icon/giaohang2h_.png" alt="2h delivery"></p>
				</div>
				<div class="d-none d-lg-flex header__bottom--cart--user col-xxl-14th col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3">
					<div class="header__bottom--user">
						<svg class="header__bottom--user--icon" aria-hidden="true" width="22" height="22" title=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#dhs_icon_user"></use></svg>
						<div class="header__bottom--user--text"><span>Đăng nhập</span><span>Tài khoản</span></div>
						<div class="header__bottom--user--wrap">
							<ul><li><a  href="login.php">Đăng nhập</a></li>
								<li><a href="register.php">Đăng ký</a></li>
							</ul>
						</div>					</div>
					<div class="header__bottom--cart"><a href="../cart.html"><img class=" width-100" width="30" height="30" src="../icon/cart.png" alt="gio hang"/><span class="cart__count">0</span></a>						<div class="cart__item original"><div class="cart__item--image"></div><div class="cart__item--info"><p class="cart__item--title"></p><span class="cart__item--price"></span><span class="cart__item--qty"></span><span class="cart__item--remove"></span></div></div>
						<div class="cart__box"><div class="cart__empty">Giỏ hàng của bạn vẫn chưa có sản phẩm nào.</div>						</div>					</div>
				</div>
			</div>
		</div>
	</div>
	<nav class="nav__menu  d-none d-xl-block d-lg-block">
		<div class="container container-fluid-sm">
			<div class="row align-items-center">
				<div class="col-xl-20th col-lg-3 col-md-4 col-sm-12 col-xs-12 p-r-0">
					<div class="DHS__sidebarMenu">
						<div class="DHS__sidebarMenu--title d-flex align-items-center"><svg class="nav__dhsmenu--icon" aria-hidden="true" width="32" height="21" title="">
							<use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#dhs_icon_menu"></use>
							</svg><span>Danh Mục</span></div>						<div class="DHS__sidebarMenu--wrap DHS__sidebarMenu--hover">
							<ul class="DHS__sidebarMenu--nav">
								<li><a href="../collections/all.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/all.png" alt="collections deal soc" /><span class="title_menu">TẤT CẢ SẢN PHẨM</span></a></li>
								<li><a href="../collections/deal-soc.html"><img width="25" height="25" class=" heightwidth-auto lazyload"src="../icon/menu1.png" alt="collections deal soc" /><span class="title_menu">BÁN CHẠY NHẤT</span></a></li>
								<li><a href="../collections/tuoi-song-moi-ngay-1.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/menu2.png" alt="collections tuoi song moi ngay 1" /><span class="title_menu">100% Tươi Sống</span></a></li>
								<li><a href="../collections/ngao-so-oc.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/menu3.png" alt="collections ngao so oc" /><span class="title_menu">Ngao, Sò, Ốc</span></a></li>
								<li><a href="../collections/cua-ghe.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/menu4.png" alt="collections cua ghe" /><span class="title_menu">Cua - Ghẹ</span></a></li>
								<li><a href="../collections/ca.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/menu5.png" alt="collections ca" /><span class="title_menu">Cá</span></a></li>
								<li><a href="../collections/muc.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/menu6.png" alt="collections muc" /><span class="title_menu">Mực</span></a></li>
								<li><a href="../collections/tom.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/menu7.png" alt="collections hai san nhap khau" /><span class="title_menu">Tôm Các Loại</span></a></li>
								<li><a href="../collections/ca-hoi.html"><img width="25" height="25" class=" heightwidth-auto lazyload" src="../icon/menu8.png" alt="collections ca hoi" /><span class="title_menu">Cá Hồi</span></a></li>
						</div>					</div>
				</div>
				<div class="col-xl-80th col-lg-9 col-md-8 d-none d-md-block">
					<div class="nav__services d-flex flex-wrap justify-content-between">
						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/chinh-sach-doi-tra-hang.html">
								<img class="width-100" width="30" height="30" src="../icon/service1.png" alt="doi tra mien phi tai nha br nhanh chong" />
								<span>ĐỔI TRẢ MIỄN PHÍ TẠI NHÀ <br> NHANH CHÓNG</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/giao-nhan-hang.html">
								<img class="width-100" width="30" height="30" src="../icon/service2.png" alt="giao hang tu 150 000d" />
								<span>GIAO HÀNG TỪ 150.000Đ</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/cua-hang.html">
								<img class="width-100" width="30" height="30" src="../icon/service3.png" alt="he thong cua hang" />
								<span>HỆ THỐNG CỬA HÀNG</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/khach-hang-than-thiet.html">
								<img class="width-100" width="30" height="30" src="../icon/service4.png" alt="chuong trinh br kh than thiet" />
								<span>CHƯƠNG TRÌNH<br>KH THÂN THIẾT</span>
							</a>
						</div>					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
		<main>
<section id="register_page" class="m-b-30">
	<!-- Breadcrumb -->
	<div id="breadcrumb" class="m-b-20">
		<div class="container">
			<div class="row">
<div class="col-12 "  aria-label="breadcrumb">
	<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="../index.html" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a><meta itemprop="position" content="1" /></li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="login.html" target="_self" itemprop="item"><span itemprop="name">Tài khoản</span></a><meta itemprop="position" content="2" /></li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item active"><span itemprop="name">Đăng ký</span><meta itemprop="position" content="2" /></li>
	</ol>
</div>			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	<div class="container">
		<div class="row">
			<div id="layout-page"  class="col-lg-12 col-md-12 col-sm-12 col-12 custom-create" >
				<span class="header-contact header-page clearfix">
					<h1>Tạo tài khoản</h1>
				</span>
				<div class="userbox">
					<form  method='post' enctype='multipart/form-data'>
					
					<div id="Hoten" class="clearfix large_form">
						<label for="last_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
						<input required type="text" name="hoten" placeholder="Họ và tên" class="text" size="30" />
					</div>
					<div id="account" class="clearfix large_form">
						<label for="first_name" class="label icon-field"><i class="icon-login icon-user "></i></label>
						<input required type="text"  name="account" placeholder="Tên đăng nhập"  class="text" size="30" />
					</div>
					<div id="password" class="clearfix large_form">
						<label for="password" class="label icon-field"><i class="icon-login icon-envelope "></i></label>
						<input required type="password"placeholder="Mật khẩu đăng nhập" name="pass1"  class="password text" size="30" />
					</div>
					<div id="password" class="clearfix large_form">
						<label for="password" class="label icon-field"><i class="icon-login icon-shield "></i></label>
						<input required type="password" placeholder="Nhập lại mật khẩu" name="pass2"  class="password text" size="30" />
					</div>


					<div id="email" class="clearfix large_form">
					<label for="email" class="label icon-field"><i class="icon-login icon-shield "></i></label>
					<input required type="email" placeholder="Địa chỉ email " name="email" class="email" size="30">
					</div>
							

					<div class="action_bottom">
						<input class="btn btn-register" type="submit" name="submit" value="Đăng ký" />			
					</div>
					<div class="req_pass">
						<a class="come-back" href="../index.html"><i class="fas fa-long-arrow-alt-left"></i> Quay lại trang chủ</a>
					</div>

			</div>
		</div>
	</div>
</section>
</main>
<footer class="footer">	
	<div class="footer__copyright" style="font-size: 16px">
		<div class="container container-fluid-sm">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
					<h4 class="footer__menu--title">THÔNG TIN</h4>	
					<ul class="footer__menu--lists">					
						<li><a  href="pages/cua-hang.html">Hệ Thống Cửa Hàng</a></li>				
							<li><a  href="pages/khach-hang-than-thiet.html">Chương Trình KHTT</a></li>	
								<li><a  href="blogs/chinh-sach.html">Chính Sách / Ưu Đãi</a></li>		
									<li><a  href="blogs/mon-ngon.html">Góc Ẩm Thực</a></li>			
												<li><a  href="blogs/khach-hang-phan-hoi.html">FeedBacK</a></li>	
												<li><a  href="collections/tuoi-song-moi-ngay.html">Tươi Sống Mỗi Ngày</a></li>					</ul>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
					<h4 class="footer__menu--title">CHÍNH SÁCH</h4>	
					<ul class="footer__menu--lists">			
							<li><a  href="pages/giao-nhan-hang.html">Giao nhận hàng</a></li>		
							<li><a  href="pages/cach-thuc-dat-hang.html">Hướng dẫn đặt hàng</a></li>				
							<li><a  href="pages/chinh-sach-doi-tra-hang.html">Chính sách đổi trả hàng</a></li>		
							<li><a  href="pages/cam-ket-chat-luong.html">Cam kết chất lượng</a></li>					</ul>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
					<h4 class="footer__menu--title">GIỚI THIỆU</h4>	
					<ul class="footer__menu--lists">				
								<li><a  href="pages/about-us.html">Về Đảo Hải Sản</a></li>			
							<li><a  href="pages/chinh-sach-quy-dinh-chung.html">Chính sách & Quy Định Chung</a></li>						<li><a  href="pages/chin-sach-bao-mat.html">Chính Sách Bảo Mật</a></li>						<li><a  href="pages/lien-he.html">Liên hệ</a></li>						<li><a  href="blogs/tuyen-dung-1.html">Tuyển Dụng</a></li>					</ul>
</div>		
		</div>
</div>
</footer>		
	</body>

</html>