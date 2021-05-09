<?php
require_once('../db/dbhelper.php');

$username = $pass = '';
if(!empty($_POST)){
	if (isset($_POST['username'])) {
		$username= $_POST['username'];
	}
}
if(!empty($_POST)){
	if (isset($_POST['pass'])) {
		$pass= $_POST['pass'];
		$pass = md5(md5($pass).MD5_PRIMARY_KEY);
	}
}

if(!empty($username) && !empty($pass)){
	$sql = "select * from users where username = '$username' and password='$pass' ";
	$result = executeResult($sql);
	if($result != null && sizeof($result) == 1 ){
		$message = "đăng nhập thành công";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}else{
		$message = "Tài khoản/mật khẩu không đúng";
		echo "<script type='text/javascript'>alert('$message');</script>";
	}
}