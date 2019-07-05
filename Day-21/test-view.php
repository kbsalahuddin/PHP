<?php 
	require_once 'vendor/autoload.php';
	use App\classes\Student;//classfilename
	$message='';
	//execute after delete button click
	if(isset($_GET['delete'])){
		$idToDelete= $_GET['id'];
		$message= Student::deleteStudentInfo($idToDelete);	
	}
	

	$result=Student::getAllStudentInfo();
	
?>
<hr/>
<a href="test.php">Add Student</a>
<a href="test-view.php">View Student</a>
<h1 style="color:red"><?php echo $message;?></h1></hr>

<table border="1" width="600">
	<tr>
		<th>Student ID</th>
		<th>Student Name</th>
		<th>Student Email</th>
		<th>Student Mobile</th>
		<th>Action</th>
	</tr>
	<?php while($student=mysqli_fetch_assoc($result)){ ?>
	<tr>
		<td><?php echo $student['id'];?></td>
		<td><?php echo $student['name'];?></td>
		<td><?php echo $student['email'];?></td>
		<td><?php echo $student['mobile'];?></td>
		<td>
			<a href="test-edit-student.php?id=<?php echo $student['id'];?>">Edit</a>
			<a href="?delete=true&id=<?php echo $student['id'];?>" onclick="return confirm('Are you sure you want to delete this row of records?');">Delete</a>
		</td>
	</tr>
	<?php } ?>
</table>
