<?php
	 require_once('form_signup.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Registation Form * Form Tutorial</title>
<meta charset="utf-8">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/md5.js"></script>
</head>
<body style="background-color: #f7d5f2;">
<div class="container">
<form method="post" id="signup" style="width: 500px; margin: 0px auto; padding-top: 20px;">
<div class="panel panel-primary">
<div class="panel-heading">
<h2 class="text-center" style="color: red;">Đăng kí tài khoản</h2>
</div>
<div class="panel-body">
<div class="form-group">
<label for="username">Tên đăng nhập:</label>
<input required="true" type="text" class="form-control" id="username" name="username" maxlength="16" value="<?php echo $username ;?>">
</div>
<div class="form-group">
<label for="fullname">Fullname:</label>
<input required="true" type="text" class="form-control" id="fullname" name="fullname" value="<?php echo $fullname ;?>">
</div>
<div class="form-group">
<label for="email">Email:</label>
<input required="true" type="email" class="form-control" id="email" name="email" value="<?php echo $email ;?>">
</div>
<div class="form-group">
<label for="phone">Số điện thoại:</label>
<input type="text" class="form-control" id="phone" name="phone" value="<?php echo $phone ;?>">
</div>
<div class="form-group">
<label for="password">Mật khẩu:</label>
<input required="true" type="password" class="form-control" id="password" name="password" >
</div>
<div class="form-group">
<label for="confirmation_pwd">Nhập lại mật khẩu:</label>
<input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_pwd">
</div>
<div class="form-group">
<label for="address">Địa chỉ:</label>
<input type="text" class="form-control" id="address" name="address" value="<?php echo $address ;?>">
<a href="login.php">Bạn đã có tài khoản/đăng nhập</a>
</div>
<div style="padding-bottom: 50px;"><button class="btn btn-info" id="bn1">Đăng kí</button></div>
</div>
</div>
</form>
</div>
</body>

</html>
