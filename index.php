<?php
require('database/conn.php');
require('add-to-card.php');	
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
					<p class="hotline_shipping"><img class="width-100" width="100" height="50" src="icon/giaohang2h_.png" alt="2h delivery"></p>
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
							<li><a  href="account/infor.php">Thông tin tài khoản</a></li>
							<li><a  href="account/logout.php">Đăng Xuất</a></li>
						</ul>
								</div>';
						
						
						}
						else{
							echo '<div class="header__bottom--user--text">
							<span>Đăng nhập</span><span>Tài khoản</span></div>';
							echo '<div class="header__bottom--user--wrap">
							<ul><li><a  href="account/login.php">Đăng nhập</a></li>
								<li><a href="account/register.php">Đăng ký</a></li>
							</ul>
						</div>	';
						}
					

						 ?>
					</div>			
					<div class="header__bottom--cart">
						<a href="cart.php">					
						<img class=" width-100" width="30" height="30" src="icon/cart.png" alt="gio hang"/>
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
							</svg><span>Danh Mục</span></div>					</div>
				</div>
				<div class="col-xl-80th col-lg-9 col-md-8 d-none d-md-block">
					<div class="nav__services d-flex flex-wrap justify-content-between">
						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/chinh-sach-doi-tra-hang.html">
								<img class="width-100" width="30" height="30" src="icon/xegiaohang.jpg" alt="doi tra mien phi tai nha br nhanh chong" />
								<span>Miễn phí vận chuyển <br> Áp dụng mọi đơn hàng</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/giao-nhan-hang.html">
								<img class="width-100" width="30" height="30" src="icon/icondaotao.png" alt="daotao" />
								<span>Đào tạo</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/cua-hang.html">
								<img class="width-100" width="30" height="30" src="icon/service3.png" alt="he thong cua hang" />
								<span>HỆ THỐNG CỬA HÀNG</span>
							</a>
						</div>						<div class="item">
							<a class="d-flex flex-wrap align-items-center justify-content-center" href="pages/khach-hang-than-thiet.html">
								<img class="width-100" width="30" height="30" src="icon/service4.png" alt="chuong trinh br kh than thiet" />
								<span>CHƯƠNG TRÌNH<br>KH THÂN THIẾT</span>
							</a>
						</div>					</div>
				</div>
			</div>
		</div>
	</nav>
</header>

		<main>
<div class="home__slider">
	<div class="container container-fluid-sm">
		<div class="row">
			<div class="col-xl-20th col-lg-3 d-none d-lg-block p-r-0">
				<div class="DHS__sidebarMenu--wrap show_hover"> 
					<ul class="DHS__sidebarMenu--nav">
						<li><a href="collections/all.php"><span class="title_menu">TẤT CẢ SẢN PHẨM</span></a></li>
						<li><a href="collections/ban-chay.php"><span class="title_menu">BÁN CHẠY NHẤT</span></a></li>
						<li><a href="collections/piano-brand-new.php"><span class="title_menu">Piano brand new</span></a></li>
						<li><a href="collections/grandpiano.php"><span class="title_menu">Grand Piano</span></a></li>
						<li><a href="collections/pianoco.php"><span class="title_menu">Piano Cơ</span></a></li>
						<li><a href="collections/pianodien.php"><span class="title_menu">Piano Điện</span></a></li>
						<li><a href="collections/phukien.php"><span class="title_menu">Phụ kiện Piano</span></a></li>
					</ul>
				</div>
			</div>
			<div class="col-xl-80th col-lg-9 col-md-12 col-12">
				<div class="row">
					<div id="demo" class="carousel slide" data-ride="carousel" style="margin-left: 1px;">
					
						<ul class="carousel-indicators">
						  <li data-target="#demo" data-slide-to="0" class="active"></li>
						  <li data-target="#demo" data-slide-to="1"></li>
						  <li data-target="#demo" data-slide-to="2"></li>
						</ul>
					
						<div class="carousel-inner" style="width: 748px; height: 385px;">
						  <div class="carousel-item active">
							  <a href="collections/deal-soc.php">
							<img src="icon/9a3b7b56dd0812564b19.jpg" alt="slider 1">
							<a></a>
						  </div>
						  <div class="carousel-item">
							<a href="collections/pianodien.php">
							<img src="icon/Boston_PE_II_in_a_Room_fma.jpg" alt="slider 2">
							</a>
							
						  </div>
						  <div class="carousel-item">
							<a href="collections/ca-hoi.php">
							<img src="icon/clavinova_1601371242.jpg" alt="slider 3">
							</a>
						  </div>
						</div>
					  
						<!-- Left and right controls -->
						<a class="carousel-control-prev" href="#demo" data-slide="prev">
						  <span class="carousel-control-prev-icon"></span>
						</a>
						<a class="carousel-control-next" href="#demo" data-slide="next">
						  <span class="carousel-control-next-icon"></span>
						</a>
					  
					  </div>
					
					<div class="col-xl-30th col-lg-30th col-md-12 col-12 p-l-lg-10 no-padding-sm">
						<a class="banner-right d-none d-lg-block animation-link" href='collections/phukien.php'><img class="width-100 lazyload" width="200" height="150" src="icon/9a3b7b56dd0812564b19.jpg"  style="margin-top: 10px;" /></a>
						<a class="banner-right d-none d-lg-block animation-link" href='collections/ca-hoi.php'><img class="width-100 lazyload" width="200" height="300" src="icon/clavinova_1601371242.jpg" style="margin-top: 10px;"/></a>
					</div>
				</div>
				
			</div>
		</div>
	</div>
</div>
<div class="home__promotion home__collection">
	<div class="container container-fluid-sm">
		<div class="row">
			<div class="col-12">
				<div class="home__promotion--title ">
					<h2>BÁN CHẠY NHẤT
					</h2>
					<!-- <a class="view__more " href="collections/deal-soc.php">Xem thêm <svg class="shopee-svg-icon icon-arrow-right" enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"><path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path></svg></a> -->
				</div>

			
	<div class="home__collection--slider">

	<div class="slider--row" style="flex-wrap: wrap;">
		
	<?php 
	$sql="SELECT * FROM sanpham LIMIT 10";
	$query = mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_assoc($query)){
				?>	
	<div class=" col-xl-20th col-lg-20th">
	<form action="index.php" method="post">
	<div class="product__item"> 
		<div class="product__item--image">
		<a class="productUrl">
			<img id="<?php echo $row["id"]; ?>" class="lazyload heightwidth-auto" width="30" height="30" src="image/<?php echo $row['image'];?>"/>
		</a>
		<div class="product__item--variant--size">
		<?php if($row['trang_thai']==0){echo "Còn hàng";
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
	</div>
	</div>

<div class="home__collection">
	<div class="container container-fluid-sm">
		<div class="row">
			<div class="col-12">			
					<div class="home__collection--banner">
					<a class="animation-link" href="collections/pianoco.php">
						<picture>
							<img src="icon/banner-trang-chu-2.jpg" class="lazyload width-100" height="100" width="320" alt="Piano Điện" />
						</picture>
					</a>
				</div>				
				<h2 class="home__collection--title" style="color:red"><span>PIANO ĐIỆN</span>
				<a class="view__more" href="collections/cua-ghe.html">Xem thêm <svg class="shopee-svg-icon icon-arrow-right" enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"><path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path></svg></a></h2>
		<div class="home__collection--slider">
<div class="slider--row">

<?php 
	$sql="SELECT * FROM sanpham WHERE ten_sp LIKE '%Điện%' Limit 10";
	$query = mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_assoc($query)){
				?>	
	<div class=" col-xl-20th col-lg-20th">
	<form action="index.php" method="post">	
	<div class="product__item" > 
		<div class="product__item--image">
		<a class="productUrl">
			<img id="<?php echo $row["id"]; ?>" class="lazyload heightwidth-auto" width="30" height="30" src="image/<?php echo $row['image'];?>"/>
		</a>
		<div class="product__item--variant--size"><?php if($row['trang_thai']==0){echo "Còn hàng";
		}else
		{echo "Hết hàng";}?></div>
	
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
	</div>
	</div>


	<div class="home__collection">
	<div class="container container-fluid-sm">
		<div class="row">
			<div class="col-12">			
					<div class="home__collection--banner">
					<a class="animation-link" href="collections/pianoco.php">
						<picture>
							<img  id="<?php echo $row["id"]; ?>" src="icon/banner-trang-chu-1.jpg" class="lazyload width-100" height="100" width="320" alt="CÁ TƯƠI" />
						</picture>
					</a>
				</div>				
				<h2 class="home__collection--title" style="color:red"><span>PIANO CƠ</span>
				<a class="view__more" href="collections/ca.html">Xem thêm <svg class="shopee-svg-icon icon-arrow-right" enable-background="new 0 0 11 11" viewBox="0 0 11 11" x="0" y="0"><path d="m2.5 11c .1 0 .2 0 .3-.1l6-5c .1-.1.2-.3.2-.4s-.1-.3-.2-.4l-6-5c-.2-.2-.5-.1-.7.1s-.1.5.1.7l5.5 4.6-5.5 4.6c-.2.2-.2.5-.1.7.1.1.3.2.4.2z"></path></svg></a></h2>
		<div class="home__collection--slider">
<div class="slider--row">

<?php 
	$sql="SELECT * FROM sanpham WHERE ten_sp LIKE '%cơ%'Limit 10";
	$query = mysqli_query($conn,$sql);
			while ($row = mysqli_fetch_assoc($query)){
				?>	
	<div class=" col-xl-20th col-lg-20th">
	<form action="index.php" method="post">	
	<div class="product__item" > 
		<div class="product__item--image">
		<a class="productUrl">
			<img  id="<?php echo $row["id"]; ?>" class="lazyload heightwidth-auto" width="30" height="30" src="image/<?php echo $row['image'];?>"/>
		</a>
		<div class="product__item--variant--size"><?php if($row['trang_thai']==0){echo "Còn hàng";
		}else
		{echo "Hết hàng";}?></div>
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
									<li><a  href="pages/about-us.html">Về Piano Sonata</a></li>			
								<li><a  href="pages/chinh-sach-quy-dinh-chung.html">Chính sách & Quy Định Chung</a></li>						<li><a  href="pages/chin-sach-bao-mat.html">Chính Sách Bảo Mật</a></li>						<li><a  href="pages/lien-he.html">Liên hệ</a></li>								</ul>
	</div>		
			</div>
	</div>
</footer>

<?php


?>


</div>





	</body>
</html>

	<div id="quick-view-modal" class="modal fade show" role="dialog" style="padding-right: 5px; display: none">  
      <div class="modal-dialog">  
           <div class="modal-content">  
		   <div class="jsQuickview">
                <div class="modal-header">  
                     <button type="button" class="close" data-dismiss="modal">&times;</button>  
                </div> 

                <div class="row" id="employee_detail">  
			
                </div>  
                <div class="modal-footer">  
                     <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>  
                </div>  
           </div>
		   </div>  
      </div>  
 </div> 



  <script>  
 $(document).ready(function(){  
      $('#add').click(function(){  
           $('#insert').val("Insert");  
           $('#insert_form')[0].reset();  
      });  
     
      $(document).on('click', '.lazyload', function(){  
           var employee_id = $(this).attr("id");  
           if(employee_id != '')  
           {  
                $.ajax({  
                     url:"select.php",  
                     method:"POST",  
                     data:{employee_id:employee_id},  
                     success:function(data){  
                          $('#employee_detail').html(data);  
                          $('#quick-view-modal').modal('show');  
                     }  
                });  
           }            
      });  
 });  
 </script>

