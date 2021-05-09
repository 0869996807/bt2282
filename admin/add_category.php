<?php 
	require_once('category_form.php');
	$id=getGet('id');
	$thiscategory = executeResult('select * from category where id ='.$id, true);
?>
<!DOCTYPE html>
<html>
<head>
<title>Category</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/md5.js"></script>
<style type="text/css">
		body {
			background-color: #aef5b7;
		}
		.container{
			margin-top: 20px;
			border: solid 1px;
			border-radius: 10px;
			width: 400px;
			height: 200px;
			background-color: white;
		}
		
		
	</style>
</head>
<div class="container">
<center><h1 class="h2 page-head-line">Category</h1></center>
<div id="loading"></div>
<form id="Category" action="" method="post">
<div class="form-group">
<label class="font-weight-semibold">Tên danh mục:</label>
<div class="input-affix">
<input required="true" type="text" class="form-control" value="<?=($thisCategory != null)?$thisCateory['name']:''?>" id="name" name="name">
</div>
<div class="d-flex align-items-center justify-content-between">
<button class="btn btn-primary" type="submit" id="submit" style="margin-top: 10px;">Save</button>
</div>
</div>
</form>
</div>

</body>
</html>