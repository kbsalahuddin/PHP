<?php 
namespace App\classes;

class Student 
{
	
	public function saveStudentInfo($data)
	{
		//echo '<pre>';
		//print_r($data);
		$link= mysqli_connect('localhost','root','','bitm');
		$sql = "INSERT INTO students (name,email,mobile) VALUES('$data[name]','$data[email]','$data[mobile]')";
		
		if(mysqli_query($link,$sql))
		{
			$message="Student info inserted successfully.";
			return $message;
		}else
		{
			die('Query Problem'.mysqli_error($link));
		}
	}
	public function getAllStudentInfo(){
		$link= mysqli_connect('localhost','root','','bitm');
		$sql = "SELECT * FROM students";
		if(mysqli_query($link,$sql))
		{
			$result=mysqli_query($link,$sql);
			return $result;
		}else
		{
			die('Query Problem'.mysqli_error($link));
		}
	}	
}

?>