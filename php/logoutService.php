<?php 
session_start();
if($_SESSION['user']){
	session_destroy();
	header("location:../Html/login.php");
}
else{
	header("location:../Html/login.php");
}
?>