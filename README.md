# laravel-die-and-dump-in-raw-php-project
Use Laravel's dd() and dump() function in your raw php project.

## Uses
* View well formatted output of php's Variable, Array, Object etc.

	#### dump()
	Just show the formatted output and keep execution of the script.

	#### dd()
	Show the formatted output and terminates execution of the script.

## Installation
  Just incude or require the 'vendor/autoload.php' file and then you can call dd() and dump() function.

### Examplecode
  
```php
<?php
	require __DIR__ . '/vendor/autoload.php'; // include or require this file so that you can use dd(), dump()

	class Example{
		public $country = "Bangladesh";
		public $city = "Dhaka";
		private $mobile = "+88123456";
	}

	$object = new Example;
	dump($object); // Calling dump()

	$array = [
		'name'=>'abc',
		'phone'=>'+12345',
		'address'=>[
			'city'=>'Dhaka',
			'country'=>'Bangladesh'
		]
	];
	dd($array); // Calling dd()
?>
```
### Output

![Image of Yaktocat](https://raw.githubusercontent.com/anisurrahmansagor/lravel-die-and-dump-in-raw-project/master/Output.jpg)

