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
					session_start();
					$_SESSION['id']=$user['id'];
					$_SESSION['name']=$user['name'];

					header('Location: dashboard.php');
				}else{
					$message="Please enter the correct email or password";
					return $message;
				}
				
		}else{
				die('Query problem'.mysqli_error(Database::dbConnection()));
		}
	}
	
	//from dashboard.php
	public function adminLogout(){
		unset($_SESSION['id']);	
		unset($_SESSION['name']);
		
		header('Location: index.php');
	}
	

	public function addCategoryInfo($data){
		//$email=$data['email'];
		//$password= md5($data['password']);
		$sql="INSERT INTO categories (category_name,category_description,status) VALUES('$data[category_name]','$data[category_description]','$data[status]')";
		if(mysqli_query(Database::dbConnection(),$sql))
			{
					
					$message='Insertion was successful!';
					return $message;
					header('Location: add-category.php');
				
			}else
				
			{
					die('Query problem'.mysqli_error(Database::dbConnection()));
			}
	}
	

	//for getting all the records to show in a table on a page
	public function showCatInfo(){
		$sql="SELECT * FROM categories";
		if(mysqli_query(Database::dbConnection(), $sql)){
			$showCatInfo= mysqli_query(Database::dbConnection(), $sql);
			return $showCatInfo;
		}else{
			die('Query Failed'.mysqli_error(Database::dbConnection()));
		}
	}
	

	//query request after edit button click
	public function getCatInfoById($idFromEditBtn){
		$sql= "SELECT * FROM categories WHERE id='$idFromEditBtn'";
		
		if(mysqli_query(Database::dbConnection(), $sql)){
			$res= mysqli_query(Database::dbConnection(), $sql);
			return $res;
		}else{
			die('Query Failed'.mysqli_error(Database::dbConnection()));
		}
	}


	public function updateCatInfo($dat){
		$sql= "UPDATE categories SET category_name='$dat[category_name]', category_description='$dat[category_description]', status='$dat[status]' WHERE id='$dat[id]'";
		//query execution code
		if(mysqli_query(Database::dbConnection(), $sql))
		{
			header('Location: manage-category.php');
			
		}else
		{
			die('Query Problem'.mysqli_error(Database::dbConnection()));
		}
	}
	public function deleteCatInfo($idDelete)
	{
		
		$sql = "DELETE  FROM categories WHERE id='$idDelete'";
		if(mysqli_query(Database::dbConnection(),$sql))
		{
			$message='User Information deleted successfully!';
			return $message;
			//header('Location: add-category.php');

		}else
		{
			die('Query Problem'.mysqli_error(Database::dbConnection()));
		}
	}

	//add blog information
	public function addBlogInfo($data){
		//$email=$data['email'];
		//$password= md5($data['password']);
		$sql="INSERT INTO blogs (cat_name,blg_title,st_des, lg_des) VALUES('$data[cat_name]','$data[blg_title]','$data[st_des]','$data[lg_des]')";
		if(mysqli_query(Database::dbConnection(),$sql))
			{
					
					$message='Insertion was successful!';
					return $message;
					header('Location: add-blog.php');
				
			}else
				
			{
					die('Query problem'.mysqli_error(Database::dbConnection()));
			}
	}	
}
?>