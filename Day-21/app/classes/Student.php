<?php 
namespace App\classes;

class Student 
{
	//query connection est. function
	private function dbConnection()
	{
		$hostName='localhost';
		$userName='root';
		$password='';
		$dbName='bitm';
		$link= mysqli_connect($hostName, $userName, $password, $dbName);
		return $link;
	}

	//students=database table name of bitm db
	public function saveStudentInfo($data)
	{
		
		$sql = "INSERT INTO students (name,email,mobile) VALUES('$data[name]','$data[email]','$data[mobile]')";
		
		if(mysqli_query(Student::dbConnection(), $sql))
		{
			$message="Student info inserted successfully.";
			return $message;
		}else
		{
			die('Query Problem'.mysqli_error(Student::dbConnection()));
		}
	}
	
	public function getAllStudentInfo()
	{
		
		$sql = "SELECT * FROM students";
		if(mysqli_query(Student::dbConnection(), $sql))
		{
			$result=mysqli_query(Student::dbConnection(), $sql);
			return $result;
		}else
		{
			die('Query Problem'.mysqli_error(Student::dbConnection()));
		}
	}

	public function getStudentInfoById($idFromEditClick)
	{
		
		$sql = "SELECT * FROM students WHERE id='$idFromEditClick'";
		//Query execution code
		if(mysqli_query(Student::dbConnection(), $sql))
		{
			$result=mysqli_query(Student::dbConnection(), $sql);
			return $result;
		}else
		{
			die('Query Problem'.mysqli_error(Student::dbConnection()));
		}
	}
	//updating after update button was clicked 
	public function updateStudentInfo($data)
	{
		$sql= "UPDATE students SET name='$data[name]', email='$data[email]', mobile='$data[mobile]' WHERE id='$data[id]' ";
		//query execution code
		if(mysqli_query(Student::dbConnection(), $sql))
		{
			header('Location: test-view.php');
		}else
		{
			die('Query Problem'.mysqli_error(Student::dbConnection()));
		}
	}

	public function deleteStudentInfo($idToDelete)
	{
		
		$sql = "DELETE FROM students WHERE id='$idToDelete'";
		if(mysqli_query(Student::dbConnection(),$sql))
		{
			$message='Student Information deleted successfully!';
			return $message;
		}else
		{
			die('Query Problem'.mysqli_error(Student::dbConnection()));
		}
	}	
}

?>