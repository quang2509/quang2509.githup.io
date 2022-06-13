<?php
//Tất cả sp
    $sql="SELECT * FROM sanpham";
    $query = mysqli_query($conn,$sql);
        // ca hoi
    $sql_cahoi="SELECT * FROM sanpham WHERE ten_sp LIKE '%Hồi%'";
	$query_cahoi = mysqli_query($conn,$sql_cahoi);
    //piano-dien
    $sql_dien="SELECT * FROM sanpham WHERE ten_sp LIKE '%điện %'";
	$query_dien = mysqli_query($conn,$sql_dien);
    //piano-co
    $sql_co="SELECT * FROM sanpham WHERE ten_sp LIKE '%cơ%'Limit 10";
	$query_co = mysqli_query($conn,$sql_co);
    //ban chay 
    $sql_banchay="SELECT * FROM sanpham WHERE ten_sp LIKE '%điện%' OR ten_sp LIKE '%cơ%'";
	$query_banchay = mysqli_query($conn,$sql_banchay);
    //phukien
    $sql_phukien="SELECT * FROM sanpham WHERE ten_sp LIKE '%Ghế%' OR ten_sp LIKE '%khăn%' OR ten_sp LIKE '%metronome%' OR ten_sp LIKE '%jack%' ";
	$query_phukien = mysqli_query($conn,$sql_phukien);
    //piano grand
    $sql_grand="SELECT * FROM sanpham WHERE ten_sp LIKE '%grand %'";
	$query_grand = mysqli_query($conn,$sql_grand);
    //tom
    $sql_tom="SELECT * FROM sanpham WHERE ten_sp LIKE '%Tôm%'";
	$query_tom = mysqli_query($conn,$sql_tom);
    //piano brand new
    $sql_brandnew="SELECT * FROM sanpham WHERE ten_sp LIKE '%điện %' OR ten_sp LIKE '%cơ %' OR ten_sp LIKE '%grand %'";
	$query_brandnew = mysqli_query($conn,$sql_brandnew);

?>


