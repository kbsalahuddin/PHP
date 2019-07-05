<?php
namespace App\classes;

class wordCounterClass
{
  public function demo()
  {
  	
  	
  	if(isset($_POST['btn']))
  	{
  		//echo '<pre>';
  		//print_r($_POST);
  		$totalWords=str_word_count($_POST['given_string']);
  		$totalChars=strlen($_POST['given_string']);
  		//return $totalWords;
  		//return $totalChars;
  		$result=[
  			'totalWords'=>$totalWords,
  			'totalChars'=>$totalChars
  		];
  		return $result;  
  	}
	
  }

}

?>