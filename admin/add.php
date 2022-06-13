<?php
        require('../database/conn.php');
      if(isset($_POST['submit'])){
           $ten_sp = $_POST['ten_sp'];
           $price = $_POST['price'];
           $trang_thai = $_POST['trang_thai'];
           $chitiet = $_POST['chitiet'];
           $image = $_FILES['image']['name'];
        //    $image_tmp= $_FILES['image']['tmp_name'];
           $sql = "INSERT INTO sanpham (ten_sp , image, price, trang_thai, chitiet) VALUES ('$ten_sp','$image' ,'$price', '$trang_thai','$chitiet')";
            $query = mysqli_query($conn,$sql);

            // move_uploaded_file($image_tmp,'image/'.$image);
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
    <title>Quản lý sản phẩm</title>
    
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
                  
					<div class="logo"><a href="admin.php"><img class="heightwidth-auto" alt="PianoSonata" width="200" height="100" src="../icon/logo1.png" /></a></div>
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
					<div class="hotline_number"><a class="hotline-link" href="tel:19000098">Hotline hỗ trợ 24/24</a><p>083.83.555.55 - Mr.Tuấn</p></div>
					<p class="hotline_shipping"><img class="width-100" width="100" height="50" src="../icon/giaohang2h_.png" alt="2h delivery"></p>
				</div>
			
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
                            <input type="text" name='ten_sp' class="form-control" placeholder="Nhập tên của sản phẩm" required>
                        </div>
                        <div class="form-group">
                            <label>Ảnh sản phẩm</label>
                            <input type="file" name='image' required>
                        </div>
                        <div class="form-group">
                            <label>Gía sản phẩm </label>
                            <input type="text" name='price' class="form-control" placeholder="Nhập giá" required>
                        </div>
                        <div class="form-group">
                            <label>Trạng thái </label>
                            <input type="text" name ='trang_thai' class="form-control" placeholder="Nhập trạng thái" required>
                        </div>
                        <div class="form-group">
                            <label>Chi tiết </label>
                
                            <textarea  rows="10" cols="50" type="text" name ='chitiet' class="form-control" placeholder="Chi tiết sản phẩm"></textarea>
                        </div>
                        <button class="btn btn-success" name="submit" type="submit">Thêm mới </button>
                        <a href="admin.php" class="btn btn-danger">Quay lại</a>
                    </form>
                </div>
            </div>

        </div>
    
     


</body>
</html>