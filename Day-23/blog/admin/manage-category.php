<?php
	session_start();
	if($_SESSION['id']==null){
		header('Location: index.php');
	}

	require_once '../vendor/autoload.php';
	$login=new App\classes\Login;
	$mg=new App\classes\Login;
	$showCategory=new App\classes\Login;
	
	
	
	//$result=Login::getAllStudentInfo(); write this instead of...
	
	$showCatInfo=$showCategory->showCatInfo();

	//after delete btn click
	if(isset($_GET['delete'])){
		$idDelete= $_GET['id'];
		$message= $mg->deleteCatInfo($idDelete);	
	}
	

	//active after clicking the logout btn
	if(isset($_GET['logout'])){
		$login->adminLogout();
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Dashboard-Manage Category</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<!--<link rel="stylesheet" href="">-->
</head>
<body>
	<?php include 'includes/menu.php';?>

	<div class="container" style="margin-top: 10px;">
		<?php echo $message;?></p>
		<div class="row">
			<div class="col-sm-12 mx-auto">
				<div class="card">
					<div class="card-body">
						<table class="table table-dark">
  							<thead>
    							<tr>
								    <th scope="col">SL NO.</th>
								    <th scope="col">Category Name</th>
								    <th scope="col">Publication Description</th>
								    <th scope="col">Publication Status</th>
								    <th scope="col">Action</th>
    							</tr>
  							</thead>
  							<tbody>
    							<?php while($manageCat=mysqli_fetch_assoc($showCatInfo)){ ?>
    							<tr>
									<td><?php echo $manageCat['id'];?></td>
									<td><?php echo $manageCat['category_name'];?></td>
									<td><?php echo $manageCat['category_description'];?></td>
									<td><?php echo $manageCat['status'];?></td>
									<td>
										<button type="button" class="btn btn-info btn-sm">
											<a style="color:white; text-decoration:none" href="manage-edit-category.php?id=<?php echo $manageCat['id'];?>">Edit</a>
										</button>
        								<button type="button" class="btn btn-warning btn-sm">
        									<a style="color:black; text-decoration:none" href="?delete=true&id=<?php echo $manageCat['id'];?>" onclick="return confirm('Are you sure you want to delete this row of records?');">Delete</a>
        								</button>
									</td>
								</tr>
								<?php } ?>
  							</tbody>
						</table>	
							

					</div>
				</div>
			</div>
		</div>
	</div>
	

	

	
	<script src="../assets/js/jquery-3.4.1.js"></script>
	<script src="../assets/js/bootstrap.bundle.js"></script>
	<script src="../assets/js/bootstrap.min.js"></script>


	
</body>
</html>