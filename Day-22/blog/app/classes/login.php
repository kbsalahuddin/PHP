<?php 
namespace App\classes;
/**
* 
*/
ini_set('display_errors', '0');     # don't show any errors for static call...
error_reporting(E_ALL | E_STRICT);  # ...but do log them



use App\classes\Database;
class Login
{
	
	public function adminLoginCheck($data)//$data array carrying email and pass from admin login page
	{
		$email=$data['email'];
		$password= md5($data['password']);
		$sql="SELECT * FROM users WHERE email='$email' AND password='$password'";
		if(mysqli_query(Database::dbConnection(),$sql)){
				$queryResult= mysqli_query(Database::dbConnection(),$sql);
				$user=mysqli_fetch_assoc($queryResult);
				if($user){
					header('Location: dashboard.php');
				}else{
					$message="Please enter the correct email or password";
					return $message;
				}
				
		}else{
				die('Query problem'.mysqli_error(Database::dbConnection()));
		}
	}
}
?>