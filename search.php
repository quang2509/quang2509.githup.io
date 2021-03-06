<?php
			require('database/conn.php');
				if(isset($_GET['ten_sp'])){
                $ten_sp = $_GET['ten_sp'];
                $sql = "SELECT * FROM sanpham where ten_sp LIKE '%$ten_sp%'";
			}
		$query = mysqli_query($conn,$sql);
	?>
<!DOCTYPE HTML>
<html lang="vi">
	
<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
		<meta charset="utf-8" />
		<link rel="icon" href="icon/icon.png" type="image/x-icon"/>
		<link rel="shortcut icon" href="icon/icon.png" type="image/x-icon"/>
		<link rel="preload" href="index.html">
			
				<!-- Latest compiled and minified CSS -->
				<!-- <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.3.0/css/bootstrap.min.css"> -->
				<link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
				<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>



				<!-- Font Fa icon -->
				<link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
				<link rel="preload" href="index.html">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="preload stylesheet" as="style" type="text/css"/>
		<link href="css/style.css" rel="preload stylesheet" as="style" type="text/css" />
		<title>Piano Sonata</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>

<meta name="theme-color" content="#129fd8"><meta name="msapplication-TileColor" content="#129fd8">
	</head>
	<body rel="index">
		<div id="opacity"></div>
	<header class="header">	
	<div class="header__bottom">
		<div class="container container-fluid-sm">
			<div class="row align-items-center">
				<div class="header__bottom--logo col-xxl-20th col-xl-20th col-lg-3 col-md-12 col-sm-12 col-12">
					<div class="logo"><a href="index.php"><img class="heightwidth-auto" alt="Piano Sonata" width="200" height="100" src="icon/logo1.png" /></a></div>
				</div>
				<div class="visible-md visible-lg visible-sm header__bottom--search col-xxl-3266th col-xl-30th col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="wpo-wrapper-search">
						<form class="ultimate-search" action="search.php">
							<input type="text" name="ten_sp" required class="input__search form-control"
							 id="inputSearchAuto" placeholder="T??m ki???m">
							<button class="btn__search" type="submit">
							</button>
						</form>
						<div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
							<div class="resultsContent"></div>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-flex col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12 header__bottom--hotline no-padding-xl">
					<div class="hotline_number"><a class="hotline-link" >Hotline h??? tr??? 24/24</a><p>083.83.555.55 - Mr.Tu???n</p></div>
					<p class="hotline_shipping"><img class="width-100" width="100" height="50" src="icon/giaohang2h_.png" alt="2h delivery"></p>
				</div>
			<div class="d-none d-lg-flex header__bottom--cart--user col-xxl-14th col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3">
				<div class="header__bottom--user" >
				
						<?php 
						   
						
						if (isset($_SESSION['account']) && $_SESSION['account']){
						
						
           				 echo  '
							<a  class="fas fa-user-alt" style="font-size:20px; padding:7px ; height:40px"></a>';
						
							echo '<div class="header__bottom--user--text"><span>Ch??o '.$_SESSION['account'].'</span> 
							</div>';
						
						echo '<div class="header__bottom--user--wrap">
							<ul>
							<li><a  href="account/infor.php">Th??ng tin t??i kho???n</a></li>
							<li><a  href="account/logout.php">????ng Xu???t</a></li>
						</ul>
								</div>';
						
						
						}
						else{
							echo '<div class="header__bottom--user--text">
							<span>????ng nh???p</span><span>T??i kho???n</span></div>';
							echo '<div class="header__bottom--user--wrap">
							<ul><li><a  href="account/login.php">????ng nh???p</a></li>
								<li><a href="account/register.php">????ng k??</a></li>
							</ul>
						</div>	';
						}
					

						 ?>
					</div>			
					<div class="header__bottom--cart">
						<a href="cart.php">					
						<img class=" width-100" width="30" height="30" src="icon/cart.png" alt="gio hang"/>
							<!-- Hi???n th??? s??? l?????ng h??ng trong gi??? -->
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
							</svg><span>Danh M???c</span></div>					</div>
				</div>
				<div class="col-xl-80th col-lg-9 col-md-8 d-none d-md-block">
					<div class="nav__services d-flex flex-wrap justify-content-between">
						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/chinh-sach-doi-tra-hang.html">
								<img class="width-100" width="30" height="30" src="icon/xegiaohang.jpg" alt="doi tra mien phi tai nha br nhanh chong" />
								<span>Mi???n ph?? v???n chuy???n <br> ??p d???ng m???i ????n h??ng</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/giao-nhan-hang.html">
								<img class="width-100" width="30" height="30" src="icon/icondaotao.png" alt="daotao" />
								<span>????o t???o</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/cua-hang.html">
								<img class="width-100" width="30" height="30" src="icon/service3.png" alt="he thong cua hang" />
								<span>H??? TH???NG C???A H??NG</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/khach-hang-than-thiet.html">
								<img class="width-100" width="30" height="30" src="icon/service4.png" alt="chuong trinh br kh than thiet" />
								<span>CH????NG TR??NH<br>KH TH??N THI???T</span>
							</a>
						</div>					</div>
				</div>
			</div>
		</div>
	</nav>
</header>
		<main>
		<div id="collection" class="m-b-30">
	<!-- Breadcrumb -->
	<div id="breadcrumb" class="m-b-20">
		<div class="container">
			<div class="row">
<div class="col-12 "  aria-label="breadcrumb">
	<ol class="breadcrumb" itemscope itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="../index.html" target="_self" itemprop="item"><span itemprop="name">Trang ch???</span></a><meta itemprop="position" content="1" /></li>
		<li itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem" class="breadcrumb-item active"><span itemprop="name">
			<?php
				echo "B???n ??ang t??m ki???m t??? kh??a: ".$ten_sp

				?>
		</span><meta itemprop="position" content="3" /></li>
	</ol>
</div>			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	<div class="container">
		<div class="row">		
				<div class="col-12">
				<div class="collection__title">
					<h1 >T??m ki???m s???n ph???m: <?php
				echo $ten_sp

				?>  </h1>
				</div>
			</div>
		</div>

		<div class="product__grid item__grid row">

		<?php
			while ($row = mysqli_fetch_assoc($query)){
				?>	
	<div class=" col-xl-20th col-lg-20th">
	<div class="product__item"> 
		<div class="product__item--image">
		<a class="productUrl">
			<img class="lazyload heightwidth-auto" width="30" height="30" src="image/<?php echo $row['image'];?>"/>
		</a>
		<div class="product__item--variant--size"><?php echo $row['trang_thai'];?></div>
		</div>		
		
		<div class="product__item--info">
			<h3 class="product__item--title"><a class="productUrl" ><?php echo $row['ten_sp'];?></a></h3>
			
		<div class="product__item--price">
			<span class="product__item--price--normal"><?php echo number_format( $row['price']);?>??<span class="product__item--variant">/1kg</span></span>		
		</div>		
		<div class="product__item--action">	
				<button type="button" class="btn product__item--quickview" >TH??M V??O GI???</button>
			</div>		
		</div>
	</div>
	</div>
		<?php
	}
	?>
	</div>
</div>

</main>
<footer class="footer">	
	<div class="footer__copyright" style="font-size: 16px">
		<div class="container container-fluid-sm">
			<div class="row">
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
					<h4 class="footer__menu--title">TH??NG TIN</h4>	
					<ul class="footer__menu--lists">					
						<li><a  href="pages/cua-hang.html">H??? Th???ng C???a H??ng</a></li>				
							<li><a  href="pages/khach-hang-than-thiet.html">Ch????ng Tr??nh KHTT</a></li>	
								<li><a  href="blogs/chinh-sach.html">Ch??nh S??ch / ??u ????i</a></li>		
				</ul>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
					<h4 class="footer__menu--title">CH??NH S??CH</h4>	
					<ul class="footer__menu--lists">			
							<li><a  href="pages/giao-nhan-hang.html">Giao nh???n h??ng</a></li>		
							<li><a  href="pages/cach-thuc-dat-hang.html">H?????ng d???n ?????t h??ng</a></li>				
							<li><a  href="pages/chinh-sach-doi-tra-hang.html">Ch??nh s??ch ?????i tr??? h??ng</a></li>		
							<li><a  href="pages/cam-ket-chat-luong.html">Cam k???t ch???t l?????ng</a></li>					</ul>
				</div>
				<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
					<h4 class="footer__menu--title">GI???I THI???U</h4>	
					<ul class="footer__menu--lists">				
								<li><a  href="pages/about-us.html">V??? Piano Sonata</a></li>			
							<li><a  href="pages/chinh-sach-quy-dinh-chung.html">Ch??nh s??ch & Quy ?????nh Chung</a></li>						<li><a  href="pages/chin-sach-bao-mat.html">Ch??nh S??ch B???o M???t</a></li>						<li><a  href="pages/lien-he.html">Li??n h???</a></li>						<li><a  href="blogs/tuyen-dung-1.html">Tuy???n D???ng</a></li>					</ul>
</div>		
		</div>
</div>
</footer>
	</body>
</html>