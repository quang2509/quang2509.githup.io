<?php

        require('../database/conn.php');

        if (isset($_GET['id'])) {
          $id = $_GET['id'];
          $sql ="UPDATE donhang SET status = 1 Where id = '$id'";
          $query = mysqli_query($conn, $sql);
          header('location: donhang.php');
        }

?>