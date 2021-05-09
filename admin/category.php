<?php 
	require_once('category_form.php');
	$categorylist=executeResult("select * from category");
	$id=getGet('id');
	$thiscategory = executeResult('select * from category where id='.$id, true);
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
<body>
	<div class="container">
		<table class="table table-bordered  bg-light" style="margin-top: 20px">
			<thead>
				<tr>
					<th>No</th>
					<th>name</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$count=0;
					foreach ($categorylist as $item) {
						echo '<tr>
								<td>'.(++$count).'</td>
								<td>'.$item['name'].'</td>
								<td><a href="add_category.php?id='.$item['id'].'"><button class="btn btn-warning">Edit</button></a></td>
								<td><button class="btn btn-danger" onclick="deleteCategory('.$item['id'].')">Delete</button></td>
							</tr>' ;
					}

				?>
			</tbody>

		</table>
	</div>

	<script type="text/javascript">
		function deleteCategory(id){
			option=confirm('Bạn chắc chắn muốn xóa mục này?');
			if(!option) return
			$.post('category_form' , {
				'action': 'delete',
				'id': id
			},function(date)
			{location.reload()} )	
		}
	</script>
</body>
</html>