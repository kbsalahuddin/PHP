<?php
require_once 'numbers-Class.php';
$a=new Demo;
$res=$a->demo();
?>

<form action="" method="post">
	<table border='1'>
		<tr>
			<th>First Number</th>
			<td><input type="text" name="first_number" value="<?php echo $_POST['first_number'];?>"></td>
		</tr>
		<tr>
			<th>Last Number</th>
			<td><input type="text" name="last_number" value="<?php echo $_POST['last_number'];?>"></td>
		</tr>
		
		<tr>
			<th></th>
			<td>
				<input type="radio" name="check" value="Odd">ODD
				<input type="radio" name="check" value="Even">EVEN
				<input type="radio" name="check" value="All">ALL
			</td>
		</tr>
		<tr>
			<th>Result</th>
			<td>
				<textarea rows="5" col="30">
					<?php echo $res; ?>
				</textarea>
			</td>
		</tr>
		<tr>
			<th></th>
			<td>
				<input type="submit" name="btn" value="Submit">
			</td>
		</tr>
	</table>

</form>