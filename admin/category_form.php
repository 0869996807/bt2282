<?php
require_once('../db/dbhelper.php');
require_once('../utils/utils.php');
	if(!empty($_POST)){
		$action=getPost('action');
		switch ($action) {
			case 'delete()':
				deleteCategory();
				break;
			
			default:
				$id=getGet('id');
				if($id>0){
					update();
				}else{
					add();
				}
				break;
		}

	}


 
 function add(){
 	$name='';
	if(!empty($_POST)){
		if(isset($_POST['name'])){
			$name=$_POST['name'];
		}
	}

	if(!empty($name)){
		$sql = " select * from category where name = '$name' ";
		$result = executeResult($sql);
		if($result != null && sizeof($result)>0){
			$message = "Danh mục đã tồn tại";
			echo "<script type='text/javascript'>alert('$message');</script>";		
		}else{
			$sql = " insert into category(name) values ('$name') ";
			execute($sql);
			$message = "Thêm danh mục thành công ";
			echo "<script type='text/javascript'>alert('$message');</script>";		
		}	
	}
 }

 function deleteCategory(){
	$id = getPost('id');
	$sql = "delete from product where id = $id";
	execute( $sql );
 }

 function update(){
	$name = $id ='';
	if(!empty($_POST)){
		$name=getPost('name');
		$id = getPost('id');
		$sql = "update category set name = '$name' where id = $id ";
		execute($sql);
		$message = "update thành công";
		echo "<script type='text/javascript'>alert('$message');</script>";		

 }
}