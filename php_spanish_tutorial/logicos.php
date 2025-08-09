<?php
	$a = true;
	$b = true;
	$c = false;
	$d = false;

	$var = ($a && $b);
	var_dump($var);
	echo "<br>";

	$var = ($a || $b);
	var_dump($var);
	echo "<br>";

	$var = (!$a);
	var_dump($var);
	echo "<br>";
?>

<!-- En PHP, los operadores lógicos se utilizan para combinar expresiones booleanas. Aquí tienes una lista de los operadores lógicos más comunes en PHP:

1. **AND** (`&&` o `and`): Devuelve verdadero si ambas expresiones son verdaderas.
   ```php
   $resultado = (true && true); // true
   ```

2. **OR** (`||` o `or`): Devuelve verdadero si al menos una de las expresiones es verdadera.
   ```php
   $resultado = (true || false); // true
   ```

3. **XOR**: Devuelve verdadero si exactamente una de las expresiones es verdadera.
   ```php
   $resultado = (true xor false); // true
   ```

4. **NOT** (`!`): Devuelve verdadero si la expresión es falsa, y viceversa.
   ```php
   $resultado = !true; // false
   ```

5. **AND lógico** (`&&`): Este operador tiene una mayor precedencia que `and`.
6. **OR lógico** (`||`): Este operador tiene una mayor precedencia que `or`.

### Ejemplo de uso:
```php
$a = true;
$b = false;

if ($a && $b) {
    echo "Ambos son verdaderos";
} elseif ($a || $b) {
    echo "Al menos uno es verdadero";
} else {
    echo "Ambos son falsos";
}
```

Recuerda que los operadores lógicos son útiles para controlar el flujo de ejecución en estructuras de control como `if`, `while`, y `for`, entre otros. -->