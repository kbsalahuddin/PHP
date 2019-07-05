<?php 
	require_once 'vendor/autoload.php';
	use App\classes\Student;//classfilename
	$message='';
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
	</tr>
	<?php 
	while($student=mysqli_fetch_assoc($result))
	{
	?>
	<tr>
		<td><?php echo $student['id'];?></td>
		<td><?php echo $student['name'];?></td>
		<td><?php echo $student['email'];?></td>
		<td><?php echo $student['mobile'];?></td>
	</tr>
	<?php
	}
	?>
</table>