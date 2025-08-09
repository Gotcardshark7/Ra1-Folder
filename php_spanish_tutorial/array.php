<?php
$moustaches = array("first", "second", "third", "fourth"); 
	echo "<br>";

	echo $moustaches[1];
	$array = [10, 13, 15, 20];
	echo "<br>";

	echo "$array[2]";
	echo "<br>";

	$array[3] = 17;
	var_dump($array);
	echo "<br>";

	$array2[]=1;
	$array2[]=10;
	$array2[]=100;
	$array2[]=1000;
	$array2[]=10000;
	var_dump($array2);

	echo "<br>";


	$array3 = [10, 'victor', 15, false];
	echo $array3[1];
	var_dump($array3);

	$personas = array (
		"nombre" => "user",
		"apellido" => "lastname",
		"edad" => 14
	);
	echo $personas["apellido"];
	echo "<br>";

	$datos = [
		'nombre' => 'firstname',
		'apellido' => 'lastname',
		'email' => 'user@gmail.com'
	];
	echo "<br>"
	echo $datos["apellido"];
?>