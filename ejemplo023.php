<?php
/* Uso de los operadores de incremento y decremento */
/* Tengamos en cuenta que cuando el operador precede a la variable, primero
 * se realiza la operación de incremento o decremento y luego se asigna el 
 * resultado a la variable. */

$a = 3;

echo "El número es: $a<br>";

/* Incrementa en uno $a */
echo "$a más 1 es igual a: ";
$a++;
echo $a."<br>";

/* Incrementa en uno $a */
echo "$a mas 1 es igual a: ";
++$a;
echo $a."<br>";

/* Decrementa $a en uno */
echo "$a menos 1 es igual a: ";
$a--;
echo $a."<br>";

/* Decrementa $a en uno */
echo "$a menos 1 es igual a: ";
--$a;
echo $a."<br>";


?>
