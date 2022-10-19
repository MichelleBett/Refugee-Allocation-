<?php 


include "includes/dbconnect1.php"; 

$username = "";
$email    = "";
$phone    =  "";
$errors   = array(); 

if (isset($_POST['register_btn'])) {
	register();
}
	

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['user']);
	header("location: login.php");
}

if (isset($_POST['login_btn'])) {
	login();
}




?>