<?php
        require('../database/conn.php');
        
        $id = $_GET['id'];
        $sql_up = "SELECT * FROM sanpham Where id = '$id'";
        $query_up = mysqli_query($conn,$sql_up);
        $row_up = mysqli_fetch_assoc($query_up);

      
      if(isset($_POST['submit'])){
           $ten_sp = $_POST['ten_sp'];
           $price = $_POST['price'];
           $trang_thai = $_POST['trang_thai'];
           $chitiet = $_POST['chitiet'];
           $image = $_FILES['image']['name'];
           $image_tmp= $_FILES['image']['tmp_name'];
           $sql = "UPDATE sanpham SET ten_sp = '$ten_sp',image = '$image', price='$price', trang_thai = '$trang_thai', chitiet = '$chitiet' WHERE id=$id";
            $query = mysqli_query($conn,$sql);
            header('location: admin.php');
      }
    

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" href="../icon/icon.png" type="image/x-icon"/>
	<link rel="shortcut icon" href="../icon/icon.png" type="image/x-icon"/>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý sản phẩm - Đảo Hải Sản</title>
    
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="../css/style.css" rel="preload stylesheet" as="style" type="text/css" />
</head>
<body>
<header class="header">	
	<div class="header__bottom">
		<div class="container container-fluid-sm">
			<div class="row align-items-center">
				<div class="header__bottom--logo col-xxl-20th col-xl-20th col-lg-3 col-md-12 col-sm-12 col-12">
                  
					<div class="logo"><a href="index.html"><img class="heightwidth-auto" alt="Đảo Hải Sản" width="200" height="100" src="../icon/logo.png" /></a></div>
				</div>
				<div class="visible-md visible-lg visible-sm header__bottom--search col-xxl-3266th col-xl-30th col-lg-4 col-md-12 col-sm-12 col-12">
					<div class="wpo-wrapper-search">
						<form class="ultimate-search" action="https://daohaisan.vn/search" autocomplete="off">
							<input type="hidden" name="type" value="product" />
							<input type="text" name="q" autocomplete="off" required class="input__search form-control" id="inputSearchAuto" placeholder="Tìm kiếm sản phẩm">
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
							<ul><li><a  href="account/login.html">Đăng nhập</a></li>
								<li><a href="account/register.html">Đăng ký</a></li>
							</ul>
						</div>					</div>
 </header>
        <div class="container-fluid">
            <div class="card">
                <div class="card-header">
                <H1>Thêm mới sản phẩm </H1>
                </div>
               
                <div class="card-body">
                <form method="POST" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Tên sản phẩm </label>
                            <input type="text" name='ten_sp' class="form-control" placeholder="Nhập tên của sản phẩm" value="<?php echo $row_up['ten_sp']; ?>" required>
                        </div>
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" name='image' required>
                        </div>
                        <div class="form-group">
                            <label>Gía sản phẩm </label>
                            <input type="text" name='price' class="form-control" placeholder="Nhập giá" value="<?php echo $row_up['price'];?>" required>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái </label>
                            <input type="text" name ='trang_thai' class="form-control" placeholder="Nhập trạng thái" value ="<?php echo $row_up['trang_thai'];?>"required>
                        </div>
                        <div class="form-group">
                            <label>Chi tiết </label>
                            <textarea  rows="10" cols="50" type="text" name ='chitiet' class="form-control" placeholder="Chi tiết sản phẩm" value ='<?php echo $row_up['chitiet']?>'></textarea>
                        </div>
                        <button class="btn btn-success" name="submit" type="submit">Sửa sản phẩm</button>
                        <a href="admin.php" class="btn btn-danger">Quay lại</a>
                    </form>
                </div>
            </div>

        </div>

     


</body>
</html>