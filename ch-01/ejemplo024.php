<?php
/* Uso de los operadores lógicos */

/* Definimos las variables */

$a = 3;
$b = 4;

echo "Los números son a: $a y b: $b<br>";

/* AND - Si se cumplen las 2 condiciones */
echo "<br>(a == 3) && (b == 4)&nbsp;&nbsp;&nbsp;";

if ($a == 3 && $b == 4)
{
 echo "Se cumple la condición<br>"; 
}
else
{
  echo "No se cumple la condición<br>";
}

/* Otro ejemplo para el AND puede ser usando la palabra and */
echo "<br>(a == 3) and (b == 4)&nbsp;&nbsp;&nbsp;";
if($a == 3 and $b == 4)
{
  echo "Se cumple la condición<br>"; 
}
else 
{  
  echo "No se cumple la condición<br>";
}

/* OR - Si se cmplen alguna de las condiciones */
echo "<br>(a == 3) or (b == 4)&nbsp;&nbsp;&nbsp;";
if($a == 3 or $b == 4)
{
  echo "Se cumple la condición<br>";
}
else 
{
  echo "No se cumple la condición<br>";
}

/* Otro ejemplo para el OR puede ser utilizado || */
echo "<br>(a == 3) || (b == 4)&nbsp;&nbsp;&nbsp;";
if($a == 3 || $b == 4)
{
  echo "Se cumple la condición<br>";
}
else 
{
  echo "No se cumple la condición<br>";
}

/* XOR - Si se cumplen alguna de las condiciones pero no ambas */
echo "<br>(a == 3) xor (b == 4)&nbsp;&nbsp;&nbsp;";
if($a == 3 xor $b == 4)
{
  echo "Se cumple la condición<br>";
} 
else 
{  
  echo "No se cumple la condición<br>";
}

/* NOT - Si no se cumple la condición */
echo "<br>a != 3&nbsp;&nbsp;&nbsp;";
if($a != 3)
{
  echo "No se cumple la condición<br>";
}
else
{
  echo "Se cumple la condición<br>";
}

?>
