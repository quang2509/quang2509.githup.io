<?php
		require('../database/conn.php');
		if(!empty($_POST['submit'])){
			if(isset($_POST['account']) && isset($_POST['password'])){
				$account = $_POST['account'];
				$password = $_POST['password'];
				$sql = "SELECT * FROM login WHERE account = '$account' AND password = '$password'";
				$query = mysqli_query($conn,$sql);
				
			
					$row = mysqli_fetch_assoc($query);;
				
			
					if(!$row){
						echo "Tài khoản hoặc mật khẩu sai !";
					} 
					else {
						if($row['quyen'] == '1') {
							$_SESSION['account'] = $account;
							header('Location:../admin/admin.php');
						}
						else
						{
							$_SESSION['account'] = $account;
							header('Location:../index.php');
						}
						
					

					}				
					
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

		<link rel="preload" href="login.php">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="preload stylesheet" as="style" type="text/css"/>
		<link href="../css/style.css" rel="preload stylesheet" as="style" type="text/css" />
		<title>Tài khoản</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
 
<meta name="theme-color" content="#129fd8"><meta name="msapplication-TileColor" content="#129fd8">

<meta name="description" content="" />
			
	</head>
	<body rel="customers[login]">
		<div id="opacity"></div>
		<header class="header ">
	<div class="header__bottom">
		<div class="container container-fluid-sm">
			<div class="row align-items-center">
				<div class="header__bottom--logo col-xxl-20th col-xl-20th col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="logo"><a href="../index.php"><img class="heightwidth-auto" alt="PianoSonata" width="200" height="100" src="http://pianosonata.vn/wp-content/uploads/logo.png"></a></div>
				</div>
				<div class="visible-md visible-lg visible-sm header__bottom--search col-xxl-3266th col-xl-30th col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="wpo-wrapper-search">
						<form class="ultimate-search" action="/search" autocomplete="off">
							<input type="hidden" name="type" value="product">
							<input type="text" name="q" autocomplete="off" required="" class="input__search form-control" id="inputSearchAuto" placeholder="Tìm kiếm">
							<button class="btn__search" type="submit"><svg aria-hidden="true" width="14" height="14" title=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#dhs_icon_search"></use></svg></button>
						</form>
						<div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
							<div class="resultsContent"></div>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-flex col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12 header__bottom--hotline no-padding-xl">
					<div class="hotline_number"><a class="hotline-link">Hotline hỗ trợ 24/24</a><p>083.83.555.55 - Mr.Tuấn</p></div>
					<p class="hotline_shipping"><img class="width-100" width="100" height="50" src="https://file.hstatic.net/1000030244/file/giaohang2h_6984c4a90861405ab3c35f77edb41578.png" alt="2h delivery"></p>
				</div>
				<div class="d-none d-lg-flex header__bottom--cart--user col-xxl-14th col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3">
				<div class="header__bottom--user" >
				
						<?php 
						   
						
						if (isset($_SESSION['account']) && $_SESSION['account']){
						
						
           				 echo  '
							<a  class="fas fa-user-alt" style="font-size:20px; padding:7px ; height:40px"></a>';
						
							echo '<div class="header__bottom--user--text"><span>Chào '.$_SESSION['account'].'</span> 
							</div>';
						
						echo '<div class="header__bottom--user--wrap">
							<ul>
							<li><a  href="infor.php">Thông tin tài khoản</a></li>
							<li><a  href="logout.php">Đăng Xuất</a></li>
						</ul>
								</div>';
						
						
						}
						else{
							echo '<div class="header__bottom--user--text">
							<span>Đăng nhập</span><span>Tài khoản</span></div>';
							echo '<div class="header__bottom--user--wrap">
							<ul><li><a  href="login.php">Đăng nhập</a></li>
								<li><a href="register.php">Đăng ký</a></li>
							</ul>
						</div>	';
						}
					

						 ?>
					</div>		
                    <div class="header__bottom--cart">
						<a href="cart.php">					
						<img class=" width-100" width="30" height="30" src="../icon/cart.png" alt="gio hang"/>
							<!-- Hiển thị số lượng hàng trong giỏ -->
							<?php
								if(isset($_SESSION['cart'])){
									$count = count($_SESSION['cart']);
									echo "<span class=\"cart__count\">
										$count
									</span>";
								}
								else{
									echo "<span class=\"cart__count\">
									0
									</span>";
								}

								

							?>
						
					</a>						
						<div class="cart__item original">
					</div>		
									
						</div>
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
								<li><a href="collections/all.php"><span class="title_menu">TẤT CẢ SẢN PHẨM</span></a></li>
								<li><a href="collections/ban-chay.php"><span class="title_menu">BÁN CHẠY NHẤT</span></a></li>
								<li><a href="collections/piano-brand-new.php"><span class="title_menu">Piano brand new</span></a></li>
								<li><a href="collections/grandpiano.php"><span class="title_menu">Grand Piano</span></a></li>
								<li><a href="collections/pianoco.php"><span class="title_menu">Piano Cơ</span></a></li>
								<li><a href="collections/pianodien.php"><span class="title_menu">Piano Điện</span></a></li>
								<li><a href="collections/phukien.php"><span class="title_menu">Phụ kiện Piano</span></a></li>
							</ul>
						</div>					</div>
				</div>
				<div class="col-xl-80th col-lg-9 col-md-8 d-none d-md-block">
					<div class="nav__services d-flex flex-wrap justify-content-between">
						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="https://daohaisan.vn/pages/chinh-sach-doi-tra-hang">
								<img class="width-100" width="30" height="30" src="https://png.pngtree.com/png-vector/20190219/ourlarge/pngtree-delivery-truck-icon-graphic-design-template-vector-png-image_561947.jpg" alt="doi tra mien phi tai nha br nhanh chong">
								<span>Miễn phí vận chuyển <br> Áp dụng mọi đơn hàng</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="https://daohaisan.vn/pages/giao-nhan-hang">
								<img class="width-100" width="30" height="30" src="https://banner2.cleanpng.com/20180330/ubw/kisspng-computer-icons-educational-technology-learning-tra-training-5abe329685ab86.8427883815224142305475.jpg" alt="giao hang tu 150 000d">
								<span>Đào tạo</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="https://daohaisan.vn/pages/cua-hang">
								<img class="width-100" width="30" height="30" src="//theme.hstatic.net/1000030244/1000730923/14/service_3.png?v=5185" alt="he thong cua hang">
								<span>HỆ THỐNG CỬA HÀNG</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="https://daohaisan.vn/pages/khach-hang-than-thiet">
								<img class="width-100" width="30" height="30" src="//theme.hstatic.net/1000030244/1000730923/14/service_4.png?v=5185" alt="chuong trinh br kh than thiet">
								<span>CHƯƠNG TRÌNH<br>KH THÂN THIẾT</span>
							</a>
						</div>					</div>
				</div>
			</div>
		</div>
	</nav>
</header>


<main>
<section id="login_page" class="m-b-30">
	<!-- Breadcrumb -->
	<div id="breadcrumb" class="m-b-20">
		<div class="container">
			<div class="row">
<div class="col-12 "  aria-label="breadcrumb">
	<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="../index.html" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a><meta itemprop="position" content="1" /></li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="login.html" target="_self" itemprop="item"><span itemprop="name">Tài khoản</span></a><meta itemprop="position" content="2" /></li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item active"><span id="customer-login-breadcrumb" itemprop="name">Đăng nhập</span><meta itemprop="position" content="2" /></li>
	</ol>
</div>			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	<div class="container">
		<div class="row">
			<div  class="col-lg-12 col-md-12 col-sm-12 col-12 custom-create" id="layout-page">
				<span class="header-contact header-page clearfix">
					<h1>Đăng nhập</h1>
				</span>
				<div id="customer-login">
					<div id="login" class="userbox">
						<div class="accounttype">
							<h2 class="title"></h2>
						</div>
						<form  method='post'>
	
					
						<div class="clearfix large_form">
							<label for="customer_email" class="icon-field"><i class="icon-login icon-envelope "></i></label>
							<input required type="text" value="" name="account"  placeholder="Tài khoản đăng nhập" class="text" required />
						</div>

						
						<div class="clearfix large_form">
							<label for="customer_password" class="icon-field"><i class="icon-login icon-shield"></i></label>
							<input required type="password" value="" name="password" placeholder="Mật khẩu" class="text" size="16"required />      
						</div>
						
					
						<div class="action_bottom">
							<a href="register.php" title="Đăng ký">Đăng ký tài khoản mới</a>
							<input class="btn btn-signin" type="submit" value="Đăng nhập" name="submit" />
						</div>
						</form>
					
						

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
					</ul>
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
								<li><a  href="pages/about-us.html">Về PianoSonata</a></li>			
							<li><a  href="pages/chinh-sach-quy-dinh-chung.html">Chính sách & Quy Định Chung</a></li>						<li><a  href="pages/chin-sach-bao-mat.html">Chính Sách Bảo Mật</a></li>						<li><a  href="pages/lien-he.html">Liên hệ</a></li>						<li><a  href="blogs/tuyen-dung-1.html">Tuyển Dụng</a></li>					</ul>
</div>		
		</div>
</div>
</footer>		

	</body>


</html>