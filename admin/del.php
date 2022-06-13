<?php
        require('../database/conn.php');
        if(isset($_GET['id'])){

            $id = $_GET['id'];
            $sql= "DELETE FROM sanpham WHERE id = '$id'";
            $query = mysqli_query($conn,$sql);

            header('location:admin.php');
        }
       
?>