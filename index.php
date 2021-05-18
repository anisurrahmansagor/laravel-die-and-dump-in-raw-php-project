<?php 
	require 'vendor/autoload.php';

	class Example{
		public $country = "Bangladesh";
		public $city = "Dhaka";
		private $mobile = "+88123456";
		
		public function getLocation(){
			return $city . ", " . $country;
		}
	}

	$object = new Example;
	dump($object);

	$array = [1,2,3,4,5,"Hello php"];
	dd($array);

 ?>