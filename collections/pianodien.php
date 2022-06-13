<?php
require('../database/conn.php');
require('../add-to-card.php');

?>
<!DOCTYPE HTML>
<html lang="vi">
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8" />
		<link rel="icon" href="../icon/icon.png" type="image/x-icon"/>
		<link rel="shortcut icon" href="../icon/icon.png" type="image/x-icon"/>
		<!-- Link CSS -->
		<link rel="stylesheet" href="css/bootstrap-grid.css">
		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css">
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="preload stylesheet" as="style" type="text/css"/>
		<link href="../css/style.css" rel="preload stylesheet" as="style" type="text/css" />
		<title>Danh mục sản phẩm</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

<meta name="theme-color" content="#129fd8"><meta name="msapplication-TileColor" content="#129fd8">

<!-- END SEO PAGI -->		
		<meta name="google-site-verification" content="-aW24BG2Ls677q-xcxG4aXb7oMrioMEppCvTa5W8CZY" />
	</head>
	<body rel="collection">
		<div id="opacity"></div>
<header class="header">	<div class="header__bottom">
		<div class="container container-fluid-sm">
			<div class="row align-items-center">
				<div class="header__bottom--logo col-xxl-20th col-xl-20th col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="logo"><a href="../index.php"><img class="heightwidth-auto" alt="Piano Sonata" width="200" height="100" src="../icon/logo1.png" /></a></div>
				</div>
				<div class="visible-md visible-lg visible-sm header__bottom--search col-xxl-3266th col-xl-30th col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="wpo-wrapper-search">
					<form class="ultimate-search" action="../search.php">
							<input type="text" name="ten_sp" required class="input__search form-control"
							 id="inputSearchAuto" placeholder="Tìm kiếm">
							<button class="btn__search" type="submit">
							</button>
						</form>
						<div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
							<div class="resultsContent"></div>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-flex col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12 header__bottom--hotline no-padding-xl">
					<div class="hotline_number"><a class="hotline-link" >Hotline hỗ trợ 24/24</a><p>083.83.555.55 - Mr.Tuấn</p></div>
					<p class="hotline_shipping"><img class="width-100" width="100" height="50" src="../icon/giaohang2h_.png" alt="2h delivery"></p>
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
					<li><a  href="../account/infor.php">Thông tin tài khoản</a></li>
					<li><a  href="../account/logout.php">Đăng Xuất</a></li>
				</ul>
						</div>';
				
				
				}
				else{
					echo '<div class="header__bottom--user--text">
					<span>Đăng nhập</span><span>Tài khoản</span></div>';
					echo '<div class="header__bottom--user--wrap">
					<ul><li><a  href="../account/login.php">Đăng nhập</a></li>
						<li><a href="../account/register.php">Đăng ký</a></li>
					</ul>
				</div>	';
				}
			

				 ?>
			</div>		
						<div class="header__bottom--cart">
						<a href="../cart.php">					
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
									<li><a href="all.php"><span class="title_menu">TẤT CẢ SẢN PHẨM</span></a></li>
									<li><a href="ban-chay.php"><span class="title_menu">BÁN CHẠY NHẤT</span></a></li>
									<li><a href="tuoi-song-moi-ngay-1.php"><span class="title_menu">Piano brand new</span></a></li>
									<li><a href="ngao-so-oc.php"><span class="title_menu">Grand Piano</span></a></li>
									<li><a href="pianoco.php"><span class="title_menu">Piano Cơ</span></a></li>
									<li><a href="pianodien.php"><span class="title_menu">Piano Điện</span></a></li>
									<li><a href="phukien.php"><span class="title_menu">Phụ kiện Piano</span></a></li>
			
								</ul>
							</ul>
						</div>					</div>
				</div>
				<div class="col-xl-80th col-lg-9 col-md-8 d-none d-md-block">
					<div class="nav__services d-flex flex-wrap justify-content-between">
						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/chinh-sach-doi-tra-hang.html">
								<img class="width-100" width="30" height="30" src="../icon/xegiaohang.jpg" alt="doi tra mien phi tai nha br nhanh chong" />
								<span>Miễn phí vận chuyển <br> Áp dụng mọi đơn hàng</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/giao-nhan-hang.html">
								<img class="width-100" width="30" height="30" src="../icon/icondaotao.png" alt="daotao" />
								<span>Đào tạo</span>
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
						</div>			</div>
				</div>
			</div>
		</div>
	</nav>
</header>
		<main><div id="collection" class="m-b-30">
	<!-- Breadcrumb -->
	<div id="breadcrumb" class="m-b-20">
		<div class="container">
			<div class="row">
<div class="col-12 "  aria-label="breadcrumb">
	<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="../index.html" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a><meta itemprop="position" content="1" /></li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="all.html" target="_self" itemprop="item"><span itemprop="name">Danh mục</span></a><meta itemprop="position" content="2" /></li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item active">
			<span itemprop="name">Piano Điện</span><meta itemprop="position" content="3" /></li>
	</ol>
</div>			</div>
		</div>
	</div>


	<!-- End Breadcrumb -->
	<div class="container">
		<div class="row">		
				<div class="col-12">
				<div class="collection__title">
					<h1 >Piano Điện</h1>
				</div>
			</div>
		</div>
		<div class="product__grid item__grid row">
			
			<?php 
			require('collections.php');
			while ($row = mysqli_fetch_assoc($query_dien)){
				?>	

		<div class="col-xl-20th col-lg-20th col-md-4 col-sm-6 col-6">
		<form action="pianodien.php" method="post">	
	<div class="product__item"> 
		<div class="product__item--image">
		<a class="productUrl">
			<img class="lazyload heightwidth-auto" width="30" height="30" src="../image/<?php echo $row['image'];?>"/>
		</a>
		<div class="product__item--variant--size"><?php if($row['trang_thai']==0){echo "Còn hàng";
		}else
		{echo "Hết hàng";}?>
		</div>
		</div>		
		
		<div class="product__item--info">
			<h3 class="product__item--title"><a class="productUrl" ><?php echo $row['ten_sp'];?></a></h3>
			
		<div class="product__item--price">
			<span class="product__item--price--normal"><?php echo number_format( $row['price']);?>đ</span>		
			<label>Số lượng: <input style="width: 30px; border: 1px solid ; border-radius: 5px; text-align: center" type="number" name="quantity" value="1" min="1"></label>

		</div>	
		
		<div class="product__item--action">	
		<?php
				if($row['trang_thai']==0){
					?>
					<button type="submit" name="add" class="btn-view--card" >THÊM VÀO GIỎ</button>
					<input type="hidden" name="product_id" value="<?php echo $row['id'];?>">
					<?php
				}
				else {
					?>
					<button class="btn-view--card" disabled>THÊM VÀO GIỎ</button>
					<?php
				}
			?>
				<input type="hidden" name="product_id" value="<?php echo $row['id'];?>">
			</div>	
		</div>
		</div>
		</form>
	</div>
	
	
		<?php
	}
	?>
	
</div>	
</div>
	</div>
</div>

</main>
<footer class="footer">	
		<div class="footer__copyright" style="font-size: 16px">
			<div class="container container-fluid-sm">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
						<h4 class="footer__menu--title">THÔNG TIN</h4>	
						<ul class="footer__menu--lists">					
									
								<li><a  href="../pages/khach-hang-than-thiet.html">Chương Trình KHTT</a></li>	
									<li><a  href="../blogs/chinh-sach.html">Chính Sách / Ưu Đãi</a></li>		
				</ul>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
						<h4 class="footer__menu--title">CHÍNH SÁCH</h4>	
						<ul class="footer__menu--lists">			
								<li><a  href="../pages/giao-nhan-hang.html">Giao nhận hàng</a></li>		
								<li><a  href="../pages/cach-thuc-dat-hang.html">Hướng dẫn đặt hàng</a></li>				
								<li><a  href="../pages/chinh-sach-doi-tra-hang.html">Chính sách đổi trả hàng</a></li>		
								<li><a  href="../pages/cam-ket-chat-luong.html">Cam kết chất lượng</a></li>					</ul>
					</div>
					<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
						<h4 class="footer__menu--title">GIỚI THIỆU</h4>	
						<ul class="footer__menu--lists">				
									<li><a  href="../pages/about-us.html">Về Sonata</a></li>			
								<li><a  href="../pages/chinh-sach-quy-dinh-chung.html">Chính sách & Quy Định Chung</a></li>						<li><a  href="pages/chin-sach-bao-mat.html">Chính Sách Bảo Mật</a></li>						<li><a  href="pages/lien-he.html">Liên hệ</a></li>								</ul>
	</div>		
			</div>
	</div>
</footer>
	</body>
</html>