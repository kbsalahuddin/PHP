<?php
	/**
	* 
	*/
	/*class Example 
	{
		
		public $name='KBS';
		public $city='dacca';
		public $country='bd';

		function addi()
		{
			echo 'in addi';
		}
		function subt(){
			echo 'in subt';
		}
		function divd(){
			echo 'in divd';
		}
	}*/
	class Example 
	{
		
		public $name='KBS';
		private $city='dacca';
		protected $country='bd';
		public $value;
		//constructor function printing $name Bangaldesh from view-Example.php page down here 
		public function __construct($data){
			echo $this->value=$data;
		}
		//encapsulation
		public function addi()
		{
			echo 'in addi';
			echo $this->name;
		}
		private function subt(){
			echo 'in subt';
		}
		protected function divd(){
			echo 'in divd';
		}
	}
?>