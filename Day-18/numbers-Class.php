<?php 
/**
* 
*/
class Demo
{
	public function demo()
	{
	if(isset($_POST['btn']))
		{
			$first=$_POST['first_number'];
			$last=$_POST['last_number'];
			$choice=$_POST['check'];
			$res='';
			
			for ($i=$first;$i<=$last;$i++)
			{
				if($i%2 !==0 && $choice=='Odd')
				{
					$res.=$i.' ';
				}
				if($i%2 ==0 && $choice=='Even')
				{ 
					$res.=$i.' ';
				}
				if($choice=='All')
				{
					for($i=$first;$i<=$last;$i++)
					{
						$res.=$i.' ';
					}
				}
			}
			return $res;
			
		}
	}
}


?>