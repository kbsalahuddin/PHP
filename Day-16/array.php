<?php
//$data = [];
//$data = Array();

/*$data=[];
$data[0]=10;
$data[1]=20;
$data[2]=30;
$data['name']='Kjahha';
$data['city']='dhaka';
$data['country']='bd';
$data = [10,20,30, 'KBS', 'dacca', 'bd'];*/
/*$data=[
	'name'=> 'KBS',
	'city'=> 'dacca',
	'country'=> 'bd',
	'cell'=> '1111',
	'gender'=> 'M'
	];
*/
//echo $data['name'];
//foreach ($data as $value) {
//		echo $value. '<br/>';
//	}

//echo '<pre>';
//print_r($data);//detailed array print

//echo '<pre>';
//var_dump($data);//detailed array print with value string size		

/*$data=[];
$data[0][0]=10;
$data[0][1]=20;
$data[0][2]=30;
$data[0][3]=35;
$data[1][0]=40;
$data[1][1]=41;
$data[1][2]=42;
$data[1][3]=43;
$data[2][0]=50;
$data[2][1]=50;
$data[2][2]=50;
$data[2][3]=50;
$data[3][0]=60;
$data[3][1]=70;
$data[3][2]=80;
$data[3][3]=90;

foreach ($data as $value) {
	//echo $value.'<>br/';
	foreach ($value as $v) {
		echo $v.' ';
	}
	echo '<br>';
}//prints the above matrix
*/

/*function demo(){
	echo 'hello world'; 
}
demo();*/

/*function fish($firstName=null, $lastName=NULL){
	$fullName=$firstName.' '.$lastName;
	return $fullName;
}
echo fish('Shakib').'<br/>';
$result=fish('KBS','Bullet');
echo 'full name is: '.$result;
$puke=fish('Shakib','Khan').'<br/>';
echo '<h4>'.$puke.'</h4>';
*/

/**
* 
*/
class FishRui 
{
	public $name='KBS';
	public $city='Dacca';
	function add()
	{
		echo 'In Add';
	}
	function hello(){
		echo 'in hello';
	}
}
$f= new FishRui;
echo $f->name;
echo $f->add();

?>