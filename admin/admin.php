<?php
            require('../database/conn.php');

            if(!isset($_SESSION['account'])){
                header('location:../account/login.php');
            }

            if(isset($_GET['ten_sp'])){
                $ten_sp = $_GET['ten_sp'];
                $sql = "SELECT * FROM sanpham where ten_sp LIKE '%$ten_sp%'";
            }else{
                $sql = 'SELECT * FROM sanpham ORDER BY ten_sp ASC';
            }
            $query = mysqli_query($conn,$sql); 

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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!-- Fa icon -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
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
						<form class="ultimate-search">
							<input type="text" name="ten_sp" autocomplete="off" 
                             class="input__search form-control" id="inputSearchAuto" placeholder="Tìm kiếm sản phẩm">
							<button class="btn__search" type="submit">
							</button>
						</form>
						<div id="ajaxSearchResults" class="smart-search-wrapper ajaxSearchResults" style="display: none">
							<div class="resultsContent"></div>
						</div>
					</div>
				</div>
				<div class="d-none d-lg-flex col-xl-4 col-lg-3 col-md-12 col-sm-12 col-12 header__bottom--hotline no-padding-xl">
					<div class="hotline_number"><a class="hotline-link">Hotline hỗ trợ 24/24</a><p>083.83.555.55 - Mr.Tuấn</p></div>
					<p class="hotline_shipping"><img class="width-100" width="100" height="50" src="../icon/giaohang2h_.png" alt="2h delivery"></p>
				</div>
				<div class="d-none d-lg-flex header__bottom--cart--user col-xxl-14th col-xl-2 col-lg-2 col-md-2 col-sm-3 col-3">
					<div class="header__bottom--user">
                    <?php 
						if (isset($_SESSION['account']) && $_SESSION['account']){
							
           				 echo  '
							<a  class="fas fa-user-alt" style="font-size:20px; padding:7px ; height:40px"></a>';
						
							echo '<div class="header__bottom--user--text"><span>Chào '.$_SESSION['account'].'</span> 
							</div>';

						echo '<div class="header__bottom--user--wrap">
						<ul>
							<li><a  href="../account/logout.php">Đăng Xuất</a></li>
						</ul>
					</div>';
						}	
                        ?>
								</div>
 </header>
 <div class="container" style="margin-bottom:10px; margin-top:10px;">
 <a href='add.php' class='btn btn-primary'>Thêm sản phẩm </a>
 <a class="btn btn-primary" href="donhang.php" >Quản lý đơn hàng </a>

 </div>
 
    <table class="table">
        <thead class="thead-light">
            <tr>
                <th>STT</th>
                <th>ID Sản phẩm</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh sản phẩm</th>
                <th>Gía tiên</th>
                <th>Trạng thái</th>
                <th style="text-align:center">Chi tiết</th>
                <th>Sửa</th>
                <th >Xóa</th>
            </tr>
        </thead>

        <?php 
         $i=1;
          while ($row = mysqli_fetch_assoc($query)){
           
            ?>
            <tbody>
            <td><?php echo $i++; ?></td>
            <td><?php echo $row ['id'];?></td>
            <td><?php echo $row['ten_sp'];?></td>
            <td><img style="width:auto; height: 100px" src="../image/<?php echo $row['image'];?>"></td>
            <td><?php echo number_format($row['price']);?> VNĐ</td>
            <td><?php echo $row['trang_thai'];?></td>
            <td> <textarea readonly rows="10" cols="50"><?php echo $row['chitiet'];?> </textarea></td>


            <td><a  style="font-size:30px;" class="fas fa-edit" href="edit.php?id=<?php echo $row['id'];?>">  </a> </td>

            <td><a  style="font-size:30px" class="far fa-trash-alt" href="del.php?id=<?php echo $row['id'];?>">  </a> </td>


         </tbody>

         <?php
          }
          ?>
     

    </table>
</body>
</html>
