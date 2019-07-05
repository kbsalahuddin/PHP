<?php 
	//echo '<pre>';
	//print_r($_POST);
	//$firstName=$_POST['first_name'];
	//$lastName=$_POST['last_name'];
	//$fullName=$firstName.' '.$lastName;
	//echo $fullName;
	$result='';
	if(isset($_POST['btn'])){
		require_once 'makeFullName.php';
		$fullName=new FullName();
		$result= $fullName->makeFullName($_POST['first_name'], $_POST['last_name']);
	}
	




?>

