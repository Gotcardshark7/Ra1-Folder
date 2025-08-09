<?php
 $a = 10;
 $b = 5;
 $c = 30;
 $var ($a == $b);
 var_dump($var);
 echo "<br>";

 $var ($a != $b);
 var_dump($var);
 echo "<br>"; 

 $var ($a !== $b);
 var_dump($var);
 echo "<br>"; 
 $var ($a > $b);
 var_dump($var);
 echo "<br>";
 $var ($a < $b);
 var_dump($var);
 echo "<br>";
 $var ($a <=> $b);
 var_dump($var);
 echo "<br>";
 $var ($a <= $b);
 var_dump($var);
 echo "<br>";
 $var ($a >= $b);
 var_dump($var);
 echo "<br>";
?>
<!-- 
En PHP, los operadores de comparación se utilizan para comparar dos valores. Aquí tienes una lista de los operadores de comparación disponibles:

1. **Igual a (`==`)**: Comprueba si dos valores son iguales, realizando una conversión de tipo si es necesario.
   ```php
   5 == '5' // true
   ```

2. **Identico (`===`)**: Comprueba si dos valores son iguales y tienen el mismo tipo.
   ```php
   5 === '5' // false
   ```

3. **No igual a (`!=`)**: Comprueba si dos valores no son iguales, realizando una conversión de tipo si es necesario.
   ```php
   5 != '5' // false
   ```

4. **No idéntico (`!==`)**: Comprueba si dos valores no son iguales o no tienen el mismo tipo.
   ```php
   5 !== '5' // true
   ```

5. **Mayor que (`>`)**: Comprueba si el valor de la izquierda es mayor que el de la derecha.
   ```php
   5 > 3 // true
   ```

6. **Menor que (`<`)**: Comprueba si el valor de la izquierda es menor que el de la derecha.
   ```php
   3 < 5 // true
   ```

7. **Mayor o igual que (`>=`)**: Comprueba si el valor de la izquierda es mayor o igual al de la derecha.
   ```php
   5 >= 5 // true
   ```

8. **Menor o igual que (`<=`)**: Comprueba si el valor de la izquierda es menor o igual al de la derecha.
   ```php
   3 <= 5 // true
   ```

9. **Nave espacial (`<=>`)**: Este operador devuelve -1 si el valor de la izquierda es menor, 0 si son iguales, y 1 si el valor de la izquierda es mayor. Es útil para ordenamientos.
   ```php
   5 <=> 3 // 1
   5 <=> 5 // 0
   3 <=> 5 // -1
   ```

Estos operadores te permiten realizar comparaciones en tus scripts de PHP de manera efectiva. -->