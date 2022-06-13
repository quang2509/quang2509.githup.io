<?php 
	session_start();
	if(isset($_SESSION['account'])&&$_SESSION['account']!=NULL){
		unset($_SESSION['account']);
		header('location:../index.php');
	}
?>