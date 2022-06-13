<?php
        require('../database/conn.php');
 
  
        $account = $_SESSION['account'];

        $sql_up = "SELECT * FROM login Where account = '$account'";
        $query_up = mysqli_query($conn,$sql_up);
        $row_up = mysqli_fetch_assoc($query_up);
  
      
      if(isset($_POST['submit'])){
        $account = $_SESSION['account'];
         $hoten = $_POST['hoten'];
         $password = $_POST['password'];
         $sdt = $_POST['sdt'];
         $email = $_POST['email'];
         $diachi = $_POST['diachi'];
         
           $sql = "UPDATE login SET hoten = '$hoten', password = '$password',sdt='$sdt', email = '$email', diachi = '$diachi'  WHERE account ='$account'";
            $query = mysqli_query($conn,$sql);
            header('location: infor.php');
      }
?>





<html lang="vi">
    <head>
		<meta charset="utf-8">
		<link rel="icon" href="//theme.hstatic.net/1000030244/1000730923/14/favicon.ico?v=5185" type="image/x-icon">
		<link rel="shortcut icon" href="//theme.hstatic.net/1000030244/1000730923/14/favicon.ico?v=5185" type="image/x-icon">
		<link rel="icon" type="image/png" href="//theme.hstatic.net/1000030244/1000730923/14/favicon.png?v=5185">
    
        <link rel="stylesheet" href="bootstrap/css/bootstrap-grid.css">
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
				<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
       
    <link rel="preload" href="https://daohaisan.vn/account">
		<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&amp;display=swap" rel="preload stylesheet" as="style" type="text/css">
		<link href="//theme.hstatic.net/1000030244/1000730923/14/styles_dhs.scss.css?v=5185" rel="preload stylesheet" as="style" type="text/css">

		<title>Tài khoản</title>

 
<meta name="theme-color" content="#129fd8"><meta name="msapplication-TileColor" content="#129fd8">
		<link rel="preload" href="https://file.hstatic.net/1000030244/file/fontawesome_13430a505a75497398496a10b8705e96.woff2" as="font" type="font/woff2" crossorigin="">


<meta name="description" content="">

<meta name="google-site-verification" content="W_qfBm_9k95lAg63rBScG0NYdwCERmbOpH_UdKXXCjw">


</head>
	
    
    
    <body rel="customers[account]" style="">
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
            <section id="account">
	<!-- Breadcrumb -->
	<div id="breadcrumb">
		<div class="container">
			<div class="row">
<div class="col-12 " aria-label="breadcrumb">
	<ol class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item"><a href="/" target="_self" itemprop="item"><span itemprop="name">Trang chủ</span></a><meta itemprop="position" content="1"></li>
		<li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem" class="breadcrumb-item active"><span itemprop="name">Thông tin tài khoản</span><meta itemprop="position" content="2"></li>
	</ol>
</div>			</div>
		</div>
	</div>
	<!-- End Breadcrumb -->
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-12">
				<div id="layout-page" class="clearfix">
					<div class="row">
						<div class="col-12">
							<div class="Account__Style">
								<div class="AccountSidebar">
	<div class="AccountSidebar-avatar">
		<img src="https://file.hstatic.net/1000030244/file/user-mobile_7a2a01b1679d4a45b894f7da50c15bfc.png">
		<div class="info">
            <?php
            
        if (isset($_SESSION['account']) && $_SESSION['account']){
						
                    
                        echo '<span>Chào '.$_SESSION['account'].'</span>' 
                       ;
                
                    
                    }
                    else{
                        echo '<div class="header__bottom--user--text">
                        <span>Tài khoản</span></div>';
                     
                    }
                

                     ?>
        </div>
    
    </div>
	<div class="AccountSidebar-list">
		<ul class="list-unstyled">			
			<li class="active">
                <a href="infor.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg><span>Thông tin tài khoản</span></a></li>
			<li><a href="dsdonhang.php"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M13 12h7v1.5h-7zm0-2.5h7V11h-7zm0 5h7V16h-7zM21 4H3c-1.1 0-2 .9-2 2v13c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2V6c0-1.1-.9-2-2-2zm0 15h-9V6h9v13z"></path></svg><span>Quản lý đơn hàng</span></a></li>
			<!-- <li><a href="/pages/wishlist"><svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 24 24" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg"><path d="M12 21.35l-1.45-1.32C5.4 15.36 2 12.28 2 8.5 2 5.42 4.42 3 7.5 3c1.74 0 3.41.81 4.5 2.09C13.09 3.81 14.76 3 16.5 3 19.58 3 22 5.42 22 8.5c0 3.78-3.4 6.86-8.55 11.54L12 21.35z"></path></svg><span>Danh sách yêu thích</span></a></li> -->
		</ul>
	</div>
</div>
								<div class="Account__StyleInfo">
									<h1>
										Thông tin tài khoản
									</h1>
									<div class="info">
                                    <form method="POST" enctype="multipart/form-data">
										<div class="clearfix large_form">
											<label for="" class="label">Họ và tên</label>
											<input required="" type="text" value="<?php echo $row_up['hoten'];?>" name="hoten" placeholder="Họ tên"  class="text" size="30">
										</div>
										<div  class="clearfix large_form">
											<label for="birthday" class="label">Mật khẩu</label>
											<input required="" type="text" value="<?php echo $row_up['password'] ?>" name="password" placeholder="Mât khẩu"  class="text" size="30">
										</div>
										
                                        <div class="phone clearfix large_form">
											<label class="label phone">Email</label>
											<input  type="text" value="<?php echo $row_up['email'];?>" name="email" placeholder="email" class="text email" size="30">
										</div>

                                        <div  class="clearfix large_form">
											<label for="" class="label">Số điện thoại</label>
											<input  type="text" value="<?php echo $row_up['sdt'];?>" placeholder="Số điện thoại" name="sdt" class="text hasDatepicker" size="30">
										</div>

										<div  class="clearfix large_form">
											<label for="" class="label">Địa chỉ</label>
											<input  type="text" value="<?php echo $row_up['diachi'];?>" placeholder="Địa chỉ" name="diachi" class="text hasDatepicker" size="30">
										</div>


										<div class="action_bottom large_form">
											<label class="input-label">&nbsp;</label>
											<button type="submit" name ="submit" class="btn updateAccount">Cập nhật</button>
										</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

</main>
<footer class="footer ">
	<div class="footer__bottom">
    <div class="footer__copyright" style="font-size: 16px">
			<div class="container container-fluid-sm">
				<div class="row">
					<div class="col-xl-2 col-lg-2 col-md-6 col-sm-6 col-6">
						<h4 class="footer__menu--title">THÔNG TIN</h4>	
						<ul class="footer__menu--lists">					
									
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
									<li><a  href="pages/about-us.html">Về Sonata</a></li>			
								<li><a  href="pages/chinh-sach-quy-dinh-chung.html">Chính sách & Quy Định Chung</a></li>						<li><a  href="pages/chin-sach-bao-mat.html">Chính Sách Bảo Mật</a></li>						<li><a  href="pages/lien-he.html">Liên hệ</a></li>						<li><a  href="blogs/tuyen-dung-1.html">Tuyển Dụng</a></li>					</ul>
	</div>		
			</div>
	</div>
</footer>	


<div class="hotline-fixed">
    <a href="tel:19000098"><span class="hotline-fixed-icon"><i class="fa fa-phone"></i></span><span class="hotline-fixed-txt"><span class="number">1900 0098</span><span class="txt">(8h-21h từ T2-Chủ Nhật)</span></span></a></div><svg xmlns="http://www.w3.org/2000/svg" style="width:0;height:0;position:absolute" visibility="hidden">
	<symbol id="dhs_icon_user" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user" class="svg-inline--fa fa-user fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></symbol>
<symbol id="dhs_icon_search" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 14.77 14.77"><defs><style>.dhs-search-1{fill:#7c7c7c;}</style></defs><g id="Layer_2" data-name="Layer 2"><g id="Layer_1-2" data-name="Layer 1"><path class="dhs-search-1" d="M14.59,13.74,11.5,10.66a6.52,6.52,0,1,0-.84.84l3.08,3.09a.59.59,0,0,0,.85,0A.59.59,0,0,0,14.59,13.74ZM1.2,6.5a5.31,5.31,0,1,1,5.3,5.31A5.31,5.31,0,0,1,1.2,6.5Z"></path></g></g></symbol>
<symbol id="dhs_icon_menu" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bars" class="svg-inline--fa fa-bars fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M16 132h416c8.837 0 16-7.163 16-16V76c0-8.837-7.163-16-16-16H16C7.163 60 0 67.163 0 76v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16zm0 160h416c8.837 0 16-7.163 16-16v-40c0-8.837-7.163-16-16-16H16c-8.837 0-16 7.163-16 16v40c0 8.837 7.163 16 16 16z"></path></symbol>
</svg>





<style>
	/*! jQuery UI - v1.12.1 - 2016-09-14 */ 
.ui-helper-hidden{display:none}.ui-helper-hidden-accessible{border:0;clip:rect(0 0 0 0);height:1px;margin:-1px;overflow:hidden;padding:0;position:absolute;width:1px}.ui-helper-reset{margin:0;padding:0;border:0;outline:0;line-height:1.3;text-decoration:none;font-size:100%;list-style:none}.ui-helper-clearfix:before,.ui-helper-clearfix:after{content:"";display:table;border-collapse:collapse}.ui-helper-clearfix:after{clear:both}.ui-helper-zfix{width:100%;height:100%;top:0;left:0;position:absolute;opacity:0;filter:Alpha(Opacity=0)}.ui-front{z-index:100}.ui-state-disabled{cursor:default!important;pointer-events:none}.ui-icon{display:inline-block;vertical-align:middle;margin-top:-.25em;position:relative;text-indent:-99999px;overflow:hidden;background-repeat:no-repeat}.ui-widget-icon-block{left:50%;margin-left:-8px;display:block}.ui-widget-overlay{position:fixed;top:0;left:0;width:100%;height:100%}.ui-accordion .ui-accordion-header{display:block;cursor:pointer;position:relative;margin:2px 0 0 0;padding:.5em .5em .5em .7em;font-size:100%}.ui-accordion .ui-accordion-content{padding:1em 2.2em;border-top:0;overflow:auto}.ui-autocomplete{position:absolute;top:0;left:0;cursor:default}.ui-menu{list-style:none;padding:0;margin:0;display:block;outline:0}.ui-menu .ui-menu{position:absolute}.ui-menu .ui-menu-item{margin:0;cursor:pointer;list-style-image:url("data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///yH5BAEAAAAALAAAAAABAAEAAAIBRAA7")}.ui-menu .ui-menu-item-wrapper{position:relative;padding:3px 1em 3px .4em}.ui-menu .ui-menu-divider{margin:5px 0;height:0;font-size:0;line-height:0;border-width:1px 0 0 0}.ui-menu .ui-state-focus,.ui-menu .ui-state-active{margin:-1px}.ui-menu-icons{position:relative}.ui-menu-icons .ui-menu-item-wrapper{padding-left:2em}.ui-menu .ui-icon{position:absolute;top:0;bottom:0;left:.2em;margin:auto 0}.ui-menu .ui-menu-icon{left:auto;right:0}.ui-button{padding:.4em 1em;display:inline-block;position:relative;line-height:normal;margin-right:.1em;cursor:pointer;vertical-align:middle;text-align:center;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;overflow:visible}.ui-button,.ui-button:link,.ui-button:visited,.ui-button:hover,.ui-button:active{text-decoration:none}.ui-button-icon-only{width:2em;box-sizing:border-box;text-indent:-9999px;white-space:nowrap}input.ui-button.ui-button-icon-only{text-indent:0}.ui-button-icon-only .ui-icon{position:absolute;top:50%;left:50%;margin-top:-8px;margin-left:-8px}.ui-button.ui-icon-notext .ui-icon{padding:0;width:2.1em;height:2.1em;text-indent:-9999px;white-space:nowrap}input.ui-button.ui-icon-notext .ui-icon{width:auto;height:auto;text-indent:0;white-space:normal;padding:.4em 1em}input.ui-button::-moz-focus-inner,button.ui-button::-moz-focus-inner{border:0;padding:0}.ui-controlgroup{vertical-align:middle;display:inline-block}.ui-controlgroup > .ui-controlgroup-item{float:left;margin-left:0;margin-right:0}.ui-controlgroup > .ui-controlgroup-item:focus,.ui-controlgroup > .ui-controlgroup-item.ui-visual-focus{z-index:9999}.ui-controlgroup-vertical > .ui-controlgroup-item{display:block;float:none;width:100%;margin-top:0;margin-bottom:0;text-align:left}.ui-controlgroup-vertical .ui-controlgroup-item{box-sizing:border-box}.ui-controlgroup .ui-controlgroup-label{padding:.4em 1em}.ui-controlgroup .ui-controlgroup-label span{font-size:80%}.ui-controlgroup-horizontal .ui-controlgroup-label + .ui-controlgroup-item{border-left:none}.ui-controlgroup-vertical .ui-controlgroup-label + .ui-controlgroup-item{border-top:none}.ui-controlgroup-horizontal .ui-controlgroup-label.ui-widget-content{border-right:none}.ui-controlgroup-vertical .ui-controlgroup-label.ui-widget-content{border-bottom:none}.ui-controlgroup-vertical .ui-spinner-input{width:75%;width:calc( 100% - 2.4em )}.ui-controlgroup-vertical .ui-spinner .ui-spinner-up{border-top-style:solid}.ui-checkboxradio-label .ui-icon-background{box-shadow:inset 1px 1px 1px #ccc;border-radius:.12em;border:none}.ui-checkboxradio-radio-label .ui-icon-background{width:16px;height:16px;border-radius:1em;overflow:visible;border:none}.ui-checkboxradio-radio-label.ui-checkboxradio-checked .ui-icon,.ui-checkboxradio-radio-label.ui-checkboxradio-checked:hover .ui-icon{background-image:none;width:8px;height:8px;border-width:4px;border-style:solid}.ui-checkboxradio-disabled{pointer-events:none}.ui-datepicker{width:17em;padding:.2em .2em 0;display:none}.ui-datepicker .ui-datepicker-header{position:relative;padding:.2em 0}.ui-datepicker .ui-datepicker-prev,.ui-datepicker .ui-datepicker-next{position:absolute;top:2px;width:1.8em;height:1.8em}.ui-datepicker .ui-datepicker-prev-hover,.ui-datepicker .ui-datepicker-next-hover{top:1px}.ui-datepicker .ui-datepicker-prev{left:2px}.ui-datepicker .ui-datepicker-next{right:2px}.ui-datepicker .ui-datepicker-prev-hover{left:1px}.ui-datepicker .ui-datepicker-next-hover{right:1px}.ui-datepicker .ui-datepicker-prev span,.ui-datepicker .ui-datepicker-next span{display:block;position:absolute;left:50%;margin-left:-8px;top:50%;margin-top:-8px}.ui-datepicker .ui-datepicker-title{margin:0 2.3em;line-height:1.8em;text-align:center}.ui-datepicker .ui-datepicker-title select{font-size:1em;margin:1px 0}.ui-datepicker select.ui-datepicker-month,.ui-datepicker select.ui-datepicker-year{width:45%}.ui-datepicker table{width:100%;font-size:.9em;border-collapse:collapse;margin:0 0 .4em}.ui-datepicker th{padding:.7em .3em;text-align:center;font-weight:bold;border:0}.ui-datepicker td{border:0;padding:1px}.ui-datepicker td span,.ui-datepicker td a{display:block;padding:.2em;text-align:right;text-decoration:none}.ui-datepicker .ui-datepicker-buttonpane{background-image:none;margin:.7em 0 0 0;padding:0 .2em;border-left:0;border-right:0;border-bottom:0}.ui-datepicker .ui-datepicker-buttonpane button{float:right;margin:.5em .2em .4em;cursor:pointer;padding:.2em .6em .3em .6em;width:auto;overflow:visible}.ui-datepicker .ui-datepicker-buttonpane button.ui-datepicker-current{float:left}.ui-datepicker.ui-datepicker-multi{width:auto}.ui-datepicker-multi .ui-datepicker-group{float:left}.ui-datepicker-multi .ui-datepicker-group table{width:95%;margin:0 auto .4em}.ui-datepicker-multi-2 .ui-datepicker-group{width:50%}.ui-datepicker-multi-3 .ui-datepicker-group{width:33.3%}.ui-datepicker-multi-4 .ui-datepicker-group{width:25%}.ui-datepicker-multi .ui-datepicker-group-last .ui-datepicker-header,.ui-datepicker-multi .ui-datepicker-group-middle .ui-datepicker-header{border-left-width:0}.ui-datepicker-multi .ui-datepicker-buttonpane{clear:left}.ui-datepicker-row-break{clear:both;width:100%;font-size:0}.ui-datepicker-rtl{direction:rtl}.ui-datepicker-rtl .ui-datepicker-prev{right:2px;left:auto}.ui-datepicker-rtl .ui-datepicker-next{left:2px;right:auto}.ui-datepicker-rtl .ui-datepicker-prev:hover{right:1px;left:auto}.ui-datepicker-rtl .ui-datepicker-next:hover{left:1px;right:auto}.ui-datepicker-rtl .ui-datepicker-buttonpane{clear:right}.ui-datepicker-rtl .ui-datepicker-buttonpane button{float:left}.ui-datepicker-rtl .ui-datepicker-buttonpane button.ui-datepicker-current,.ui-datepicker-rtl .ui-datepicker-group{float:right}.ui-datepicker-rtl .ui-datepicker-group-last .ui-datepicker-header,.ui-datepicker-rtl .ui-datepicker-group-middle .ui-datepicker-header{border-right-width:0;border-left-width:1px}.ui-datepicker .ui-icon{display:block;text-indent:-99999px;overflow:hidden;background-repeat:no-repeat;left:.5em;top:.3em}.ui-dialog{position:absolute;top:0;left:0;padding:.2em;outline:0}.ui-dialog .ui-dialog-titlebar{padding:.4em 1em;position:relative}.ui-dialog .ui-dialog-title{float:left;margin:.1em 0;white-space:nowrap;width:90%;overflow:hidden;text-overflow:ellipsis}.ui-dialog .ui-dialog-titlebar-close{position:absolute;right:.3em;top:50%;width:20px;margin:-10px 0 0 0;padding:1px;height:20px}.ui-dialog .ui-dialog-content{position:relative;border:0;padding:.5em 1em;background:none;overflow:auto}.ui-dialog .ui-dialog-buttonpane{text-align:left;border-width:1px 0 0 0;background-image:none;margin-top:.5em;padding:.3em 1em .5em .4em}.ui-dialog .ui-dialog-buttonpane .ui-dialog-buttonset{float:right}.ui-dialog .ui-dialog-buttonpane button{margin:.5em .4em .5em 0;cursor:pointer}.ui-dialog .ui-resizable-n{height:2px;top:0}.ui-dialog .ui-resizable-e{width:2px;right:0}.ui-dialog .ui-resizable-s{height:2px;bottom:0}.ui-dialog .ui-resizable-w{width:2px;left:0}.ui-dialog .ui-resizable-se,.ui-dialog .ui-resizable-sw,.ui-dialog .ui-resizable-ne,.ui-dialog .ui-resizable-nw{width:7px;height:7px}.ui-dialog .ui-resizable-se{right:0;bottom:0}.ui-dialog .ui-resizable-sw{left:0;bottom:0}.ui-dialog .ui-resizable-ne{right:0;top:0}.ui-dialog .ui-resizable-nw{left:0;top:0}.ui-draggable .ui-dialog-titlebar{cursor:move}.ui-draggable-handle{-ms-touch-action:none;touch-action:none}.ui-resizable{position:relative}.ui-resizable-handle{position:absolute;font-size:0.1px;display:block;-ms-touch-action:none;touch-action:none}.ui-resizable-disabled .ui-resizable-handle,.ui-resizable-autohide .ui-resizable-handle{display:none}.ui-resizable-n{cursor:n-resize;height:7px;width:100%;top:-5px;left:0}.ui-resizable-s{cursor:s-resize;height:7px;width:100%;bottom:-5px;left:0}.ui-resizable-e{cursor:e-resize;width:7px;right:-5px;top:0;height:100%}.ui-resizable-w{cursor:w-resize;width:7px;left:-5px;top:0;height:100%}.ui-resizable-se{cursor:se-resize;width:12px;height:12px;right:1px;bottom:1px}.ui-resizable-sw{cursor:sw-resize;width:9px;height:9px;left:-5px;bottom:-5px}.ui-resizable-nw{cursor:nw-resize;width:9px;height:9px;left:-5px;top:-5px}.ui-resizable-ne{cursor:ne-resize;width:9px;height:9px;right:-5px;top:-5px}.ui-progressbar{height:2em;text-align:left;overflow:hidden}.ui-progressbar .ui-progressbar-value{margin:-1px;height:100%}.ui-progressbar .ui-progressbar-overlay{background:url("data:image/gif;base64,R0lGODlhKAAoAIABAAAAAP///yH/C05FVFNDQVBFMi4wAwEAAAAh+QQJAQABACwAAAAAKAAoAAACkYwNqXrdC52DS06a7MFZI+4FHBCKoDeWKXqymPqGqxvJrXZbMx7Ttc+w9XgU2FB3lOyQRWET2IFGiU9m1frDVpxZZc6bfHwv4c1YXP6k1Vdy292Fb6UkuvFtXpvWSzA+HycXJHUXiGYIiMg2R6W459gnWGfHNdjIqDWVqemH2ekpObkpOlppWUqZiqr6edqqWQAAIfkECQEAAQAsAAAAACgAKAAAApSMgZnGfaqcg1E2uuzDmmHUBR8Qil95hiPKqWn3aqtLsS18y7G1SzNeowWBENtQd+T1JktP05nzPTdJZlR6vUxNWWjV+vUWhWNkWFwxl9VpZRedYcflIOLafaa28XdsH/ynlcc1uPVDZxQIR0K25+cICCmoqCe5mGhZOfeYSUh5yJcJyrkZWWpaR8doJ2o4NYq62lAAACH5BAkBAAEALAAAAAAoACgAAAKVDI4Yy22ZnINRNqosw0Bv7i1gyHUkFj7oSaWlu3ovC8GxNso5fluz3qLVhBVeT/Lz7ZTHyxL5dDalQWPVOsQWtRnuwXaFTj9jVVh8pma9JjZ4zYSj5ZOyma7uuolffh+IR5aW97cHuBUXKGKXlKjn+DiHWMcYJah4N0lYCMlJOXipGRr5qdgoSTrqWSq6WFl2ypoaUAAAIfkECQEAAQAsAAAAACgAKAAAApaEb6HLgd/iO7FNWtcFWe+ufODGjRfoiJ2akShbueb0wtI50zm02pbvwfWEMWBQ1zKGlLIhskiEPm9R6vRXxV4ZzWT2yHOGpWMyorblKlNp8HmHEb/lCXjcW7bmtXP8Xt229OVWR1fod2eWqNfHuMjXCPkIGNileOiImVmCOEmoSfn3yXlJWmoHGhqp6ilYuWYpmTqKUgAAIfkECQEAAQAsAAAAACgAKAAAApiEH6kb58biQ3FNWtMFWW3eNVcojuFGfqnZqSebuS06w5V80/X02pKe8zFwP6EFWOT1lDFk8rGERh1TTNOocQ61Hm4Xm2VexUHpzjymViHrFbiELsefVrn6XKfnt2Q9G/+Xdie499XHd2g4h7ioOGhXGJboGAnXSBnoBwKYyfioubZJ2Hn0RuRZaflZOil56Zp6iioKSXpUAAAh+QQJAQABACwAAAAAKAAoAAACkoQRqRvnxuI7kU1a1UU5bd5tnSeOZXhmn5lWK3qNTWvRdQxP8qvaC+/yaYQzXO7BMvaUEmJRd3TsiMAgswmNYrSgZdYrTX6tSHGZO73ezuAw2uxuQ+BbeZfMxsexY35+/Qe4J1inV0g4x3WHuMhIl2jXOKT2Q+VU5fgoSUI52VfZyfkJGkha6jmY+aaYdirq+lQAACH5BAkBAAEALAAAAAAoACgAAAKWBIKpYe0L3YNKToqswUlvznigd4wiR4KhZrKt9Upqip61i9E3vMvxRdHlbEFiEXfk9YARYxOZZD6VQ2pUunBmtRXo1Lf8hMVVcNl8JafV38aM2/Fu5V16Bn63r6xt97j09+MXSFi4BniGFae3hzbH9+hYBzkpuUh5aZmHuanZOZgIuvbGiNeomCnaxxap2upaCZsq+1kAACH5BAkBAAEALAAAAAAoACgAAAKXjI8By5zf4kOxTVrXNVlv1X0d8IGZGKLnNpYtm8Lr9cqVeuOSvfOW79D9aDHizNhDJidFZhNydEahOaDH6nomtJjp1tutKoNWkvA6JqfRVLHU/QUfau9l2x7G54d1fl995xcIGAdXqMfBNadoYrhH+Mg2KBlpVpbluCiXmMnZ2Sh4GBqJ+ckIOqqJ6LmKSllZmsoq6wpQAAAh+QQJAQABACwAAAAAKAAoAAAClYx/oLvoxuJDkU1a1YUZbJ59nSd2ZXhWqbRa2/gF8Gu2DY3iqs7yrq+xBYEkYvFSM8aSSObE+ZgRl1BHFZNr7pRCavZ5BW2142hY3AN/zWtsmf12p9XxxFl2lpLn1rseztfXZjdIWIf2s5dItwjYKBgo9yg5pHgzJXTEeGlZuenpyPmpGQoKOWkYmSpaSnqKileI2FAAACH5BAkBAAEALAAAAAAoACgAAAKVjB+gu+jG4kORTVrVhRlsnn2dJ3ZleFaptFrb+CXmO9OozeL5VfP99HvAWhpiUdcwkpBH3825AwYdU8xTqlLGhtCosArKMpvfa1mMRae9VvWZfeB2XfPkeLmm18lUcBj+p5dnN8jXZ3YIGEhYuOUn45aoCDkp16hl5IjYJvjWKcnoGQpqyPlpOhr3aElaqrq56Bq7VAAAOw==");height:100%;filter:alpha(opacity=25);opacity:0.25}.ui-progressbar-indeterminate .ui-progressbar-value{background-image:none}.ui-selectable{-ms-touch-action:none;touch-action:none}.ui-selectable-helper{position:absolute;z-index:100;border:1px dotted black}.ui-selectmenu-menu{padding:0;margin:0;position:absolute;top:0;left:0;display:none}.ui-selectmenu-menu .ui-menu{overflow:auto;overflow-x:hidden;padding-bottom:1px}.ui-selectmenu-menu .ui-menu .ui-selectmenu-optgroup{font-size:1em;font-weight:bold;line-height:1.5;padding:2px 0.4em;margin:0.5em 0 0 0;height:auto;border:0}.ui-selectmenu-open{display:block}.ui-selectmenu-text{display:block;margin-right:20px;overflow:hidden;text-overflow:ellipsis}.ui-selectmenu-button.ui-button{text-align:left;white-space:nowrap;width:14em}.ui-selectmenu-icon.ui-icon{float:right;margin-top:0}.ui-slider{position:relative;text-align:left}.ui-slider .ui-slider-handle{position:absolute;z-index:2;width:1.2em;height:1.2em;cursor:default;-ms-touch-action:none;touch-action:none}.ui-slider .ui-slider-range{position:absolute;z-index:1;font-size:.7em;display:block;border:0;background-position:0 0}.ui-slider.ui-state-disabled .ui-slider-handle,.ui-slider.ui-state-disabled .ui-slider-range{filter:inherit}.ui-slider-horizontal{height:.8em}.ui-slider-horizontal .ui-slider-handle{top:-.3em;margin-left:-.6em}.ui-slider-horizontal .ui-slider-range{top:0;height:100%}.ui-slider-horizontal .ui-slider-range-min{left:0}.ui-slider-horizontal .ui-slider-range-max{right:0}.ui-slider-vertical{width:.8em;height:100px}.ui-slider-vertical .ui-slider-handle{left:-.3em;margin-left:0;margin-bottom:-.6em}.ui-slider-vertical .ui-slider-range{left:0;width:100%}.ui-slider-vertical .ui-slider-range-min{bottom:0}.ui-slider-vertical .ui-slider-range-max{top:0}.ui-sortable-handle{-ms-touch-action:none;touch-action:none}.ui-spinner{position:relative;display:inline-block;overflow:hidden;padding:0;vertical-align:middle}.ui-spinner-input{border:none;background:none;color:inherit;padding:.222em 0;margin:.2em 0;vertical-align:middle;margin-left:.4em;margin-right:2em}.ui-spinner-button{width:1.6em;height:50%;font-size:.5em;padding:0;margin:0;text-align:center;position:absolute;cursor:default;display:block;overflow:hidden;right:0}.ui-spinner a.ui-spinner-button{border-top-style:none;border-bottom-style:none;border-right-style:none}.ui-spinner-up{top:0}.ui-spinner-down{bottom:0}.ui-tabs{position:relative;padding:.2em}.ui-tabs .ui-tabs-nav{margin:0;padding:.2em .2em 0}.ui-tabs .ui-tabs-nav li{list-style:none;float:left;position:relative;top:0;margin:1px .2em 0 0;border-bottom-width:0;padding:0;white-space:nowrap}.ui-tabs .ui-tabs-nav .ui-tabs-anchor{float:left;padding:.5em 1em;text-decoration:none}.ui-tabs .ui-tabs-nav li.ui-tabs-active{margin-bottom:-1px;padding-bottom:1px}.ui-tabs .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor,.ui-tabs .ui-tabs-nav li.ui-state-disabled .ui-tabs-anchor,.ui-tabs .ui-tabs-nav li.ui-tabs-loading .ui-tabs-anchor{cursor:text}.ui-tabs-collapsible .ui-tabs-nav li.ui-tabs-active .ui-tabs-anchor{cursor:pointer}.ui-tabs .ui-tabs-panel{display:block;border-width:0;padding:1em 1.4em;background:none}.ui-tooltip{padding:8px;position:absolute;z-index:9999;max-width:300px}body .ui-tooltip{border-width:2px}.ui-widget{font-family:Arial,Helvetica,sans-serif;font-size:1em}.ui-widget .ui-widget{font-size:1em}.ui-widget input,.ui-widget select,.ui-widget textarea,.ui-widget button{font-family:Arial,Helvetica,sans-serif;font-size:1em}.ui-widget.ui-widget-content{border:1px solid #c5c5c5}.ui-widget-content{border:1px solid #ddd;background:#fff;color:#333}.ui-widget-content a{color:#333}.ui-widget-header{border:1px solid #ddd;background:#e9e9e9;color:#333;font-weight:bold}.ui-widget-header a{color:#333}.ui-state-default,.ui-widget-content .ui-state-default,.ui-widget-header .ui-state-default,.ui-button,html .ui-button.ui-state-disabled:hover,html .ui-button.ui-state-disabled:active{border:1px solid #c5c5c5;background:#f6f6f6;font-weight:normal;color:#454545}.ui-state-default a,.ui-state-default a:link,.ui-state-default a:visited,a.ui-button,a:link.ui-button,a:visited.ui-button,.ui-button{color:#454545;text-decoration:none}.ui-state-hover,.ui-widget-content .ui-state-hover,.ui-widget-header .ui-state-hover,.ui-state-focus,.ui-widget-content .ui-state-focus,.ui-widget-header .ui-state-focus,.ui-button:hover,.ui-button:focus{border:1px solid #ccc;background:#ededed;font-weight:normal;color:#2b2b2b}.ui-state-hover a,.ui-state-hover a:hover,.ui-state-hover a:link,.ui-state-hover a:visited,.ui-state-focus a,.ui-state-focus a:hover,.ui-state-focus a:link,.ui-state-focus a:visited,a.ui-button:hover,a.ui-button:focus{color:#2b2b2b;text-decoration:none}.ui-visual-focus{box-shadow:0 0 3px 1px rgb(94,158,214)}.ui-state-active,.ui-widget-content .ui-state-active,.ui-widget-header .ui-state-active,a.ui-button:active,.ui-button:active,.ui-button.ui-state-active:hover{border:1px solid #003eff;background:#007fff;font-weight:normal;color:#fff}.ui-icon-background,.ui-state-active .ui-icon-background{border:#003eff;background-color:#fff}.ui-state-active a,.ui-state-active a:link,.ui-state-active a:visited{color:#fff;text-decoration:none}.ui-state-highlight,.ui-widget-content .ui-state-highlight,.ui-widget-header .ui-state-highlight{border:1px solid #dad55e;background:#fffa90;color:#777620}.ui-state-checked{border:1px solid #dad55e;background:#fffa90}.ui-state-highlight a,.ui-widget-content .ui-state-highlight a,.ui-widget-header .ui-state-highlight a{color:#777620}.ui-state-error,.ui-widget-content .ui-state-error,.ui-widget-header .ui-state-error{border:1px solid #f1a899;background:#fddfdf;color:#5f3f3f}.ui-state-error a,.ui-widget-content .ui-state-error a,.ui-widget-header .ui-state-error a{color:#5f3f3f}.ui-state-error-text,.ui-widget-content .ui-state-error-text,.ui-widget-header .ui-state-error-text{color:#5f3f3f}.ui-priority-primary,.ui-widget-content .ui-priority-primary,.ui-widget-header .ui-priority-primary{font-weight:bold}.ui-priority-secondary,.ui-widget-content .ui-priority-secondary,.ui-widget-header .ui-priority-secondary{opacity:.7;filter:Alpha(Opacity=70);font-weight:normal}.ui-state-disabled,.ui-widget-content .ui-state-disabled,.ui-widget-header .ui-state-disabled{opacity:.35;filter:Alpha(Opacity=35);background-image:none}.ui-state-disabled .ui-icon{filter:Alpha(Opacity=35)}.ui-icon{width:16px;height:16px}.ui-icon,.ui-widget-content .ui-icon{background-image:url("//theme.hstatic.net/1000030244/1000730923/14/ui-icons_444444_256x240.png?v=5185")}.ui-widget-header .ui-icon{background-image:url("//theme.hstatic.net/1000030244/1000730923/14/ui-icons_444444_256x240.png?v=5185")}.ui-state-hover .ui-icon,.ui-state-focus .ui-icon,.ui-button:hover .ui-icon,.ui-button:focus .ui-icon{background-image:url("//theme.hstatic.net/1000030244/1000730923/14/ui-icons_555555_256x240.png?v=5185")}.ui-state-active .ui-icon,.ui-button:active .ui-icon{background-image:url("//theme.hstatic.net/1000030244/1000730923/14/ui-icons_ffffff_256x240.png?v=5185")}.ui-state-highlight .ui-icon,.ui-button .ui-state-highlight.ui-icon{background-image:url("//theme.hstatic.net/1000030244/1000730923/14/ui-icons_777620_256x240.png?v=5185")}.ui-state-error .ui-icon,.ui-state-error-text .ui-icon{background-image:url("//theme.hstatic.net/1000030244/1000730923/14/ui-icons_cc0000_256x240.png?v=5185")}.ui-button .ui-icon{background-image:url("//theme.hstatic.net/1000030244/1000730923/14/ui-icons_777777_256x240.png?v=5185")}.ui-icon-blank{background-position:16px 16px}.ui-icon-caret-1-n{background-position:0 0}.ui-icon-caret-1-ne{background-position:-16px 0}.ui-icon-caret-1-e{background-position:-32px 0}.ui-icon-caret-1-se{background-position:-48px 0}.ui-icon-caret-1-s{background-position:-65px 0}.ui-icon-caret-1-sw{background-position:-80px 0}.ui-icon-caret-1-w{background-position:-96px 0}.ui-icon-caret-1-nw{background-position:-112px 0}.ui-icon-caret-2-n-s{background-position:-128px 0}.ui-icon-caret-2-e-w{background-position:-144px 0}.ui-icon-triangle-1-n{background-position:0 -16px}.ui-icon-triangle-1-ne{background-position:-16px -16px}.ui-icon-triangle-1-e{background-position:-32px -16px}.ui-icon-triangle-1-se{background-position:-48px -16px}.ui-icon-triangle-1-s{background-position:-65px -16px}.ui-icon-triangle-1-sw{background-position:-80px -16px}.ui-icon-triangle-1-w{background-position:-96px -16px}.ui-icon-triangle-1-nw{background-position:-112px -16px}.ui-icon-triangle-2-n-s{background-position:-128px -16px}.ui-icon-triangle-2-e-w{background-position:-144px -16px}.ui-icon-arrow-1-n{background-position:0 -32px}.ui-icon-arrow-1-ne{background-position:-16px -32px}.ui-icon-arrow-1-e{background-position:-32px -32px}.ui-icon-arrow-1-se{background-position:-48px -32px}.ui-icon-arrow-1-s{background-position:-65px -32px}.ui-icon-arrow-1-sw{background-position:-80px -32px}.ui-icon-arrow-1-w{background-position:-96px -32px}.ui-icon-arrow-1-nw{background-position:-112px -32px}.ui-icon-arrow-2-n-s{background-position:-128px -32px}.ui-icon-arrow-2-ne-sw{background-position:-144px -32px}.ui-icon-arrow-2-e-w{background-position:-160px -32px}.ui-icon-arrow-2-se-nw{background-position:-176px -32px}.ui-icon-arrowstop-1-n{background-position:-192px -32px}.ui-icon-arrowstop-1-e{background-position:-208px -32px}.ui-icon-arrowstop-1-s{background-position:-224px -32px}.ui-icon-arrowstop-1-w{background-position:-240px -32px}.ui-icon-arrowthick-1-n{background-position:1px -48px}.ui-icon-arrowthick-1-ne{background-position:-16px -48px}.ui-icon-arrowthick-1-e{background-position:-32px -48px}.ui-icon-arrowthick-1-se{background-position:-48px -48px}.ui-icon-arrowthick-1-s{background-position:-64px -48px}.ui-icon-arrowthick-1-sw{background-position:-80px -48px}.ui-icon-arrowthick-1-w{background-position:-96px -48px}.ui-icon-arrowthick-1-nw{background-position:-112px -48px}.ui-icon-arrowthick-2-n-s{background-position:-128px -48px}.ui-icon-arrowthick-2-ne-sw{background-position:-144px -48px}.ui-icon-arrowthick-2-e-w{background-position:-160px -48px}.ui-icon-arrowthick-2-se-nw{background-position:-176px -48px}.ui-icon-arrowthickstop-1-n{background-position:-192px -48px}.ui-icon-arrowthickstop-1-e{background-position:-208px -48px}.ui-icon-arrowthickstop-1-s{background-position:-224px -48px}.ui-icon-arrowthickstop-1-w{background-position:-240px -48px}.ui-icon-arrowreturnthick-1-w{background-position:0 -64px}.ui-icon-arrowreturnthick-1-n{background-position:-16px -64px}.ui-icon-arrowreturnthick-1-e{background-position:-32px -64px}.ui-icon-arrowreturnthick-1-s{background-position:-48px -64px}.ui-icon-arrowreturn-1-w{background-position:-64px -64px}.ui-icon-arrowreturn-1-n{background-position:-80px -64px}.ui-icon-arrowreturn-1-e{background-position:-96px -64px}.ui-icon-arrowreturn-1-s{background-position:-112px -64px}.ui-icon-arrowrefresh-1-w{background-position:-128px -64px}.ui-icon-arrowrefresh-1-n{background-position:-144px -64px}.ui-icon-arrowrefresh-1-e{background-position:-160px -64px}.ui-icon-arrowrefresh-1-s{background-position:-176px -64px}.ui-icon-arrow-4{background-position:0 -80px}.ui-icon-arrow-4-diag{background-position:-16px -80px}.ui-icon-extlink{background-position:-32px -80px}.ui-icon-newwin{background-position:-48px -80px}.ui-icon-refresh{background-position:-64px -80px}.ui-icon-shuffle{background-position:-80px -80px}.ui-icon-transfer-e-w{background-position:-96px -80px}.ui-icon-transferthick-e-w{background-position:-112px -80px}.ui-icon-folder-collapsed{background-position:0 -96px}.ui-icon-folder-open{background-position:-16px -96px}.ui-icon-document{background-position:-32px -96px}.ui-icon-document-b{background-position:-48px -96px}.ui-icon-note{background-position:-64px -96px}.ui-icon-mail-closed{background-position:-80px -96px}.ui-icon-mail-open{background-position:-96px -96px}.ui-icon-suitcase{background-position:-112px -96px}.ui-icon-comment{background-position:-128px -96px}.ui-icon-person{background-position:-144px -96px}.ui-icon-print{background-position:-160px -96px}.ui-icon-trash{background-position:-176px -96px}.ui-icon-locked{background-position:-192px -96px}.ui-icon-unlocked{background-position:-208px -96px}.ui-icon-bookmark{background-position:-224px -96px}.ui-icon-tag{background-position:-240px -96px}.ui-icon-home{background-position:0 -112px}.ui-icon-flag{background-position:-16px -112px}.ui-icon-calendar{background-position:-32px -112px}.ui-icon-cart{background-position:-48px -112px}.ui-icon-pencil{background-position:-64px -112px}.ui-icon-clock{background-position:-80px -112px}.ui-icon-disk{background-position:-96px -112px}.ui-icon-calculator{background-position:-112px -112px}.ui-icon-zoomin{background-position:-128px -112px}.ui-icon-zoomout{background-position:-144px -112px}.ui-icon-search{background-position:-160px -112px}.ui-icon-wrench{background-position:-176px -112px}.ui-icon-gear{background-position:-192px -112px}.ui-icon-heart{background-position:-208px -112px}.ui-icon-star{background-position:-224px -112px}.ui-icon-link{background-position:-240px -112px}.ui-icon-cancel{background-position:0 -128px}.ui-icon-plus{background-position:-16px -128px}.ui-icon-plusthick{background-position:-32px -128px}.ui-icon-minus{background-position:-48px -128px}.ui-icon-minusthick{background-position:-64px -128px}.ui-icon-close{background-position:-80px -128px}.ui-icon-closethick{background-position:-96px -128px}.ui-icon-key{background-position:-112px -128px}.ui-icon-lightbulb{background-position:-128px -128px}.ui-icon-scissors{background-position:-144px -128px}.ui-icon-clipboard{background-position:-160px -128px}.ui-icon-copy{background-position:-176px -128px}.ui-icon-contact{background-position:-192px -128px}.ui-icon-image{background-position:-208px -128px}.ui-icon-video{background-position:-224px -128px}.ui-icon-script{background-position:-240px -128px}.ui-icon-alert{background-position:0 -144px}.ui-icon-info{background-position:-16px -144px}.ui-icon-notice{background-position:-32px -144px}.ui-icon-help{background-position:-48px -144px}.ui-icon-check{background-position:-64px -144px}.ui-icon-bullet{background-position:-80px -144px}.ui-icon-radio-on{background-position:-96px -144px}.ui-icon-radio-off{background-position:-112px -144px}.ui-icon-pin-w{background-position:-128px -144px}.ui-icon-pin-s{background-position:-144px -144px}.ui-icon-play{background-position:0 -160px}.ui-icon-pause{background-position:-16px -160px}.ui-icon-seek-next{background-position:-32px -160px}.ui-icon-seek-prev{background-position:-48px -160px}.ui-icon-seek-end{background-position:-64px -160px}.ui-icon-seek-start{background-position:-80px -160px}.ui-icon-seek-first{background-position:-80px -160px}.ui-icon-stop{background-position:-96px -160px}.ui-icon-eject{background-position:-112px -160px}.ui-icon-volume-off{background-position:-128px -160px}.ui-icon-volume-on{background-position:-144px -160px}.ui-icon-power{background-position:0 -176px}.ui-icon-signal-diag{background-position:-16px -176px}.ui-icon-signal{background-position:-32px -176px}.ui-icon-battery-0{background-position:-48px -176px}.ui-icon-battery-1{background-position:-64px -176px}.ui-icon-battery-2{background-position:-80px -176px}.ui-icon-battery-3{background-position:-96px -176px}.ui-icon-circle-plus{background-position:0 -192px}.ui-icon-circle-minus{background-position:-16px -192px}.ui-icon-circle-close{background-position:-32px -192px}.ui-icon-circle-triangle-e{background-position:-48px -192px}.ui-icon-circle-triangle-s{background-position:-64px -192px}.ui-icon-circle-triangle-w{background-position:-80px -192px}.ui-icon-circle-triangle-n{background-position:-96px -192px}.ui-icon-circle-arrow-e{background-position:-112px -192px}.ui-icon-circle-arrow-s{background-position:-128px -192px}.ui-icon-circle-arrow-w{background-position:-144px -192px}.ui-icon-circle-arrow-n{background-position:-160px -192px}.ui-icon-circle-zoomin{background-position:-176px -192px}.ui-icon-circle-zoomout{background-position:-192px -192px}.ui-icon-circle-check{background-position:-208px -192px}.ui-icon-circlesmall-plus{background-position:0 -208px}.ui-icon-circlesmall-minus{background-position:-16px -208px}.ui-icon-circlesmall-close{background-position:-32px -208px}.ui-icon-squaresmall-plus{background-position:-48px -208px}.ui-icon-squaresmall-minus{background-position:-64px -208px}.ui-icon-squaresmall-close{background-position:-80px -208px}.ui-icon-grip-dotted-vertical{background-position:0 -224px}.ui-icon-grip-dotted-horizontal{background-position:-16px -224px}.ui-icon-grip-solid-vertical{background-position:-32px -224px}.ui-icon-grip-solid-horizontal{background-position:-48px -224px}.ui-icon-gripsmall-diagonal-se{background-position:-64px -224px}.ui-icon-grip-diagonal-se{background-position:-80px -224px}.ui-corner-all,.ui-corner-top,.ui-corner-left,.ui-corner-tl{border-top-left-radius:3px}.ui-corner-all,.ui-corner-top,.ui-corner-right,.ui-corner-tr{border-top-right-radius:3px}.ui-corner-all,.ui-corner-bottom,.ui-corner-left,.ui-corner-bl{border-bottom-left-radius:3px}.ui-corner-all,.ui-corner-bottom,.ui-corner-right,.ui-corner-br{border-bottom-right-radius:3px}.ui-widget-overlay{background:#aaa;opacity:.003;filter:Alpha(Opacity=.3)}.ui-widget-shadow{-webkit-box-shadow:0 0 5px #666;box-shadow:0 0 5px #666}
</style>
	



	
<div id="fb-root" class=" fb_reset">
    <div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div>

    </div></div>
    <div class="fb-customerchat fb_invisible_flow fb_iframe_widget" page_id="177849075673219" greeting_dialog_display="hide" ref="__hrf_w_23901__hrf_rrs_b64_dWk6OjEwNTUyNDU0MTl8bHM6OmhhcmFzb2NpYWxfbGl2ZWNoYXR8bHU6Omh0dHBzOi8vZGFvaGFpc2FuLnZuL2FjY291bnQ=" fb-xfbml-state="rendered" fb-iframe-plugin-query="app_id=363772567412181&amp;container_width=0&amp;current_url=https%3A%2F%2Fdaohaisan.vn%2Faccount&amp;greeting_dialog_display=hide&amp;local_state=%7B%22v%22%3A1%2C%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%7D&amp;locale=vi_VN&amp;log_id=7b137187-8d10-4eb6-9964-fcbc4cb59639&amp;page_id=177849075673219&amp;ref=__hrf_w_23901__hrf_rrs_b64_dWk6OjEwNTUyNDU0MTl8bHM6OmhhcmFzb2NpYWxfbGl2ZWNoYXR8bHU6Omh0dHBzOi8vZGFvaGFpc2FuLnZuL2FjY291bnQ%3D&amp;request_time=1639361501554&amp;sdk=joey"><span style="vertical-align: bottom; width: 0px; height: 0px;"><iframe name="f30ddddc288c32c" width="1000px" height="1000px" data-testid="dialog_iframe" title="" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/customerchat.php?app_id=363772567412181&amp;channel=https%3A%2F%2Fstaticxx.facebook.com%2Fx%2Fconnect%2Fxd_arbiter%2F%3Fversion%3D46%23cb%3Df299042981e9c9%26domain%3Ddaohaisan.vn%26is_canvas%3Dfalse%26origin%3Dhttps%253A%252F%252Fdaohaisan.vn%252Ff30664423ad20f%26relation%3Dparent.parent&amp;container_width=0&amp;current_url=https%3A%2F%2Fdaohaisan.vn%2Faccount&amp;greeting_dialog_display=hide&amp;local_state=%7B%22v%22%3A1%2C%22path%22%3A2%2C%22chatState%22%3A1%2C%22visibility%22%3A%22hidden%22%2C%22showUpgradePrompt%22%3A%22not_shown%22%7D&amp;locale=vi_VN&amp;log_id=7b137187-8d10-4eb6-9964-fcbc4cb59639&amp;page_id=177849075673219&amp;ref=__hrf_w_23901__hrf_rrs_b64_dWk6OjEwNTUyNDU0MTl8bHM6OmhhcmFzb2NpYWxfbGl2ZWNoYXR8bHU6Omh0dHBzOi8vZGFvaGFpc2FuLnZuL2FjY291bnQ%3D&amp;request_time=1639361501553&amp;sdk=joey" style="padding: 0px; position: fixed; z-index: 2147483646; border-radius: 16px; top: auto; background: none; width: 399px; bottom: 84px; max-height: 0px; right: 4px; margin-right: 12px; visibility: visible;" class=""></iframe></span></div><div class="fb_dialog  fb_dialog_advanced" alignment="right" desktop_bottom_spacing="24"><div class="fb_dialog_content"><iframe name="blank_f30ddddc288c32c" width="60px" tabindex="-1" data-testid="bubble_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/customer_chat/bubble" style="animation: 3s ease-out 0s 1 normal none running slideInFromBottomDelay; background: none; border-radius: 30px; bottom: 24px; box-shadow: rgba(0, 0, 0, 0.15) 0px 4px 12px 0px; display: block; height: 60px; margin: 0px 12px; overflow: visible; padding: 0px; position: fixed; right: 12px; top: auto; width: 60px; z-index: 2147483644;"></iframe><iframe name="unread_f30ddddc288c32c" tabindex="-1" data-testid="unread_iframe" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" allow="encrypted-media" src="https://www.facebook.com/v5.0/plugins/customer_chat/bubble" style="background: none; border-radius: 4pt; bottom: 68px; height: 24px; position: fixed; right: 22px; width: 20px; z-index: 2147483645;"></iframe></div></div></div></body><template id="transover-popup-template">
  <style>
    .pos_translation {
      padding-bottom: 3px;
    }

    strong {
      font-weight: bold;
    }

    .rtl {
      direction: rtl;
    }

    main {
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 14px;
      font-weight: 300;
      letter-spacing: initial;

      background: #fcf7d9;
      text-align: left;
      border-style: solid;
      border-width: 1px;
      border-color: #ccc;
      box-shadow: rgba(0,0,0,0.2) 0px 2px 5px;
      border-radius: 5px;
      padding: 6px 8px 3px 8px;
      position: fixed;
      z-index: 2147483647;
      top: -1500px;
      left: 0;
      box-sizing: content-box;
      -webkit-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;

      /* To fix the following issue:
      1. Have translate on hover enabled (opposed to translate on click).
      2. Wisit a website that has a dropdown menu that opens on hover.
      3. Open the menu.
      4. Hover over a word within that menu.
      5. Incidentally move the cursor over the TransOver popup.
      The hover menu gets closed.
      */
      pointer-events: none;
    }

    .pos_translation {
      font-size: 1em;
      line-height: 1.2em;
    }

    .red {
      color: red;
    }

    .from_lang {
      color: grey;
      font-size: 0.8em;
      line-height: 1.2em;
      margin-top: 2px;
      margin-bottom: 3px;
    }
  </style>

</template>
<template id="transover-tat-popup-template">
  <style>
    #tat_input_container {
      display: flex;
      margin-bottom: 10px;
    }

    #tat_input_container label {
      line-height: 26px;
    }

    #tat_input {
      margin-left: 5px;
      flex-grow: 2;
      font-size: 14px;
      line-height: 20px;
      border-radius: 2px;
      border: 1px #ccc solid;
      padding-left: 5px;
    }

    #tat_submit_container {
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    #tat_submit_container select {
      margin-left: 5px;
    }

    #tat_submit {
      width: 45px;
      margin-left: 5px;
    }

    #tat_to_lang {
      width: 150px;
    }

    #swap_languages {
      margin-left: 5px;
      margin-right: 5px;
      width: 24px;
      height: 24px;
      background-repeat: no-repeat;
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAEKElEQVR4nL1Vb0xbVRQ/97Xre23pn9FSNmBQGEqGMJQPIyU6MkMczf6gbAyNk5lo9gkTdTPGLPswzRITjcYPftREiYQ/g5EVZZEwNt3ELBmiI/wLqB1rFdaWDaSjfe+e44cHpUAL0URPcnPuu/e887vn3PM7F+A/Fs1mBi+fbNBXPHNgv6ShCa/X+48BhI02T7522lbmrrtsTct8RRCETQ+TSLTJNhreOuvcXXG4y2C1F874vL25BcWP5hWWKgQEAABKNBJZmAvNzIaCi1d6vqVkfliixdfPnH+8eO9BzxaDKQuRgCMRR2KcYhoQgaKRh/PBO+O90yM/fhTy/faD51InrvW1LuzT5z6sLKo4/LVGZ3AoSMARQEEChYgpSKAgMa5qQKaRREvaLmteST0jlHIc5usjw8M8KUBN3Yu2soP1fYLOkLrkDJadxb5pWQMgESASIDHBsC3vSR4Ja3fYUq6OjY1SQoBUq3kxHPT/lJpdUAVaMYUjMQWJKbR8clA1qWniBAyJGKpgTHLklC3cHb469POANyHA1NQUDN66+atNxCuWjJ2VgmhUI+EICkfkiKQOIiRgSKDexxIAAtMQoikjRbg4Pj6OAEmq6KsvPhuok6P7H3n6+ZaUdGep/5fv+vyDfe8AQCy/Wslo3+567n3Rnl1CKgAhEOgceeU6UbQCQCApAABAS1PjZC2XD2S7qr9EpPCD+7MDPT09SrzNcYNFdpQfuUgEAhIBEQAJGpEBmDcFAABoa2mePopYK5pt+2RZXleCi0HftTueTx4jIi1jasUTESHiH8s2MR68cea9Ap1kLCHVCJAAwnOh6ZnfR79vb29f5fzZupcMzpLyd32D1862tTY/3OiQsQiMVvuhQlfVB5xWiPUgOO0LTE3sAQD/qr+4rE0v2vsm0xmdxwTh1dbmpvubAoT+nLotq45haZBoScsorjrRkbn7qTZgQjSWZ0JJQYKtO5+oYaIx7ZigeaG1qdGfCCCWopqjtcZ99W+P64yWDI5EnFTGokou4kgMCUite4L4eTjgG/Jfv1Db3Pj56FqAGA9Ghofl/DynvDV7l3ulJQAotBRRHKEwvvaJQCOZ0vQZ+dW5Nn3/0OCtuwkBAAC228yDW/TGfL0ts4gvMZivtIV49sJaMNLqTJGQb36bReqdnJxM3CrGRkd5ulFzWYkuSnr7jlICjSbOGSzPOREgrKwpclS+13/h47Bv7LzH41lVVQnbtdvt1phT7SXWnKLjkj1rj6DTpxKBQKS+BgRMEB25+UjElMW/Fu7daD0XCfk/7ejoCCe95ETicrmYyWQSRVHUQdzrJ6WYTVmHTnmj88HZwI2WU5G5QFNnZ2c0kY8NAZKJu/qI2Vl54nawv60hPDf7TVdXF09m+6/eWafTyWlm4tLcbOBmd3f3uhbyv8rfG8mfJ968lFgAAAAASUVORK5CYII=);
      cursor: pointer;
    }

    #swap_languages.disabled {
      background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAEIklEQVR4nL1VX0hbVxj/7k0w6TS3QVck+qC2/tfhiMyRUR8GlU4XNzJYsFBUluXBh/Uho0PBPWww6TbEpzGz+pKBC2OS2tkHRbQd3ZiIdkoVghptdO2MRmP+3Xtzb+759nBNFl0S8WH7weF+nO+7v985h/P7DsB/DMVZBTab7YLJZLouCMKG1+s9twCdLdnf31/Q09MzWVZWZqFp+szFpIMyU2JgYKC0s7Pzga6oqHZ9fX2msbGx0mAwxBN5juNi+/v7e36/n5+cnMRzqQ4NDb3q9/t3JEnCuCRhPB4noiiiIIgkJggYi8WQ53lycHgYnJmddfX29l41mUxZTyMJu91+LRKJBCSZGEVRREEUiSATE57nkeM4ZFmWRKNRjEQieHQUFO+OjAyYzWbVab4T59rd3V1gs9ke5ubm5iMAACJgckBKfHIAIF1TW3s1HAopc3JyHrndbkwrkJeXx29sbPyh1+vfuqBW5yEChYDUMVHql0LyT0wQAZFQlZVVry8sLDxaXFzwphXY3t6Gubm5zXA4PFtXV3eNYZh8RASJEJDiEiESQXlIeCxMISIQJICIFEVRCkmSNKIo3FtbWyMAGW6R3W5/wvP89Y9u3fqxprpG/2Bi4qHL5eoDAClRwzDMyxaL5U55RWUDIgEkiAQRqqqr31CpVFoA8GcUAABwOBweQRDetlgs30uEsIFA4Mn09HQ8tSY/v0C0Wq33CCItHx8BhUKhAgDmTAEAAKfT6ZMk6X2dTvemKIrkdP7Zs61f+vp66xBRSVEUAAAgIhJC/krUUIlgcHCwimGYBvlWyNjb2/MtLS09HhsbO0H+gcXyUktLy+c/37//qdPp5LItMrkDnU7X3tHR8fWxACIitbOz83xlZaUJAF6k/hTjeeU77e02RqMppWn6w9HR0aMzBTwez1OUAQmN4uLiotu3P3EZjcafaJoWjueBEKImBKG5ufk9jUZzSalU3nA4HC8yiQAAgNlszt3d3X0utwSByO0ghhzHI8txJMqyGIlESTgcwVAojMFgiBwdBfEwEMCFxcWnVqu1Oh1v0gerq6tiSUmJqG9sbEXZtgljATltNJKcpxAJXGQuXqqvf+VdmqZ/n5+f/zOtAACAWq1eYhim/HJZWT1mEiAJc8nuRSLHOSqVZmtrM6xUKmc8Hk/6VuF2uyVBECZZllWXV1ToFbRCkeJUOBZIkCdjnuPEkbvfDS0vL38xMTFx4lZRkAatra2KwsLChteamm5euXylSW5+CTMhUEDRVdVV5YQgFQoGo8P24c+2vd5vXC4Xe5orrUACBoOB0mg0KpVKlQMpr59Wq9Xc+fIrr8/nC9iHv/3Y5/P9MD4+LmTjOhfMZjPz+NffvF1dXe1GozHrU5p1B5nQ1tam1Gq1pQcHB5tTU1P/aiH/K/4G7RvFhRjTPe0AAAAASUVORK5CYII=);
      cursor: auto;
    }

    main {
      color: #333;
      font-family: Arial, sans-serif;
      font-size: 14px;
      font-weight: 300;
      line-height: 19px;
      letter-spacing: initial;

      background: #fcf7d9;
      text-align: left;
      border-style: solid;
      border-width: 1px;
      border-color: #ccc;
      box-shadow: rgba(0,0,0,0.2) 0px 2px 5px;
      border-radius: 5px;
      padding: 10px 12px 12px 12px;
      position: fixed;
      z-index: 2147483647;
      top: 15px;
      right: 15px;
      -webkit-font-smoothing: antialiased;
      font-smoothing: antialiased;
      text-rendering: optimizeLegibility;
    }

    #disable_on_this_page_container {
      margin-bottom: 8px;
      color: blue;
    }

    #disable_on_this_page {
      position: relative;
      vertical-align: middle;
      bottom: 1px;
      margin-right: 5px;
    }

    #top_row_container {
      display: flex;
      justify-content: space-between;
    }

    #tat_close{
      width: 12px;
      height: 12px;
      background: -webkit-linear-gradient(-45deg, transparent 0%, transparent 46%, darkgrey 46%, darkgrey 56%,transparent 56%, transparent 100%), -webkit-linear-gradient(45deg, transparent 0%, transparent 46%, darkgrey 46%,  darkgrey 56%,transparent 56%, transparent 100%);
    }
  </style>

</template></html>