<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
<?php
$varl = true;
$num = 20;
$num2 = 10;
if ($varl) {
 echo "<h1> Soy verdadero </h1>";
}
else if ($num == 20) {
 echo "<h1> Soy 20 </h1>";
}
else {
	echo "<h1> Soy falso </h1>"
}
?>
<?php if ($varl): ?>
	<h2>Soy Verdadero nª</h2>
	<h2>Soy Verdadero nª</h2>
	<h2>Soy Verdadero nª</h2>
	<h2>Soy Verdadero nª</h2>
<?php else: ($varl): ?>
	<h2>Soy falso</h2>
<?php endif; ($varl): ?>

</body>
</html>