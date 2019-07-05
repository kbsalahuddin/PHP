<?php 
	require_once 'vendor/autoload.php';
	use App\classes\Student;//classfilename
	$idFromEditClick=$_GET['id'];
	$result= Student::getStudentInfoById($idFromEditClick);
	$studentInfo= mysqli_fetch_assoc($result);


	$message='';
	//when Update button down below will be clicked then this will start acting
	if(isset($_POST['btn'])){
		$message=Student::updateStudentInfo($_POST);//class name::function inside class
	}

?>
<hr/>
<a href="test.php">Add Student</a>
<a href="test-view.php">View Student</a>

<h1 style="color:red"><?php echo $message;?></h1></hr>
<form action="" method="POST">
	<table>
		<tr>
			<th>Name</th>
			<td>
				<input type="text" name="name" value="<?php echo $studentInfo['name'];?>">
				<input type="text" name="id" value="<?php echo $studentInfo['id'];?>">
			</td>
		</tr>
		<tr>
			<th>Email</th>
			<td>
				<input type="email" name="email" value="<?php echo $studentInfo['email'];?>">
			</td>
		</tr>
		<tr>
			<th>Mobile</th>
			<td>
				<input type="number" name="mobile" value="<?php echo $studentInfo['mobile'];?>">
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" name="btn" value="Update">
			</td>
		</tr>
	</table>
</form>