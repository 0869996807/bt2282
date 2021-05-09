<?php
require_once('../db/dbhelper.php');

$fullname = $username = $phone = $email = $password = $confirmation_pwd = $address = '';
$create_at = $updated_at = date('Y-m-d H:i:s');
if(!empty($_POST)) {
	if(isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
	}

	if(isset($_POST['username'])) {
		$username = $_POST['username'];
	}

	if(isset($_POST['phone'])) {
		$phone = $_POST['phone'];
	}

	if(isset($_POST['email'])) {
		$email = $_POST['email'];
	}

	if(isset($_POST['address'])) {
		$address = $_POST['address'];
	}

	if(isset($_POST['password'])) {
		$password = $_POST['password'];
	}

	if(isset($_POST['confirmation_pwd'])) {
		$confirmation_pwd = $_POST['confirmation_pwd'];
	}
	if($password == $confirmation_pwd) {
		//Kiem tra thanh cong mat khau da khop
		if(!empty($username) && !empty($email)) {
			//Kiem tra username & email <> null -> check bao mat phia server
			//Xem username va email da ton tai trong database
			$sql = "select * from users where username = '$username' or email = '$email'";
			$result = executeResult($sql);
			// var_dump($result);
			if($result != null && sizeof($result) > 0) {
				$message = "Tài khoản/email đã tồn tại";
				echo "<script type='text/javascript'>alert('$message');</script>";
			} else {
				//Kiem tra moi thong tin da ok -> insert database
				// echo $password.'<br/>';
				$password = md5(md5($password).MD5_PRIMARY_KEY);
				// echo $password;die();

				$sql = "insert into users(username, email, fullname, phone, password, create_at, updated_at, address) values ('$username', '$email', '$fullname', '$phone', '$password', '$create_at', '$updated_at', '$address')";
				execute($sql);
				$message = "Đăng kí thành công";
				echo "<script type='text/javascript'>alert('$message');</script>";
				header('Location: login.php');
				die();
			}
		}
	}
	// var_dump($_POST);
}