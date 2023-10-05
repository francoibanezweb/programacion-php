<?php
/* Uso de los operadores de compración */

/* defineremos 2 numeros */
$a = 5;
$b = 3;
echo "Los numeros son a: $a y b: $b<br>";

/* Igualdad */
if ($a == $b)
{
  echo "Los números son iguales<br>";
}
else
{
  echo "Los números no son iguales<br>"; 
}

/* Distinto */
if($a != $B)
{
  echo "Los números son distintos<br>";
}
else
{
  echo "Los números son iguales";
}

/* Menor */
if($a < $b)
{
  echo "El número a es menor que el número b";
}
else
{
  echo "El número a no es menor que b<br>";
}

/* Mayor */
if($a > $b)
{
  echo "El número a es mayor que el número b<br>";
}
else
{
  echo "El número a no es mayor que b<br>";
}

/* Menor o igual */
if($a <= $b)
{
  echo "El número a es menor o igual que el número b<br>";
}
else
{
  echo "El número a no es menor o igual que b<br>";
}

/* Mayor o igual */
if($a >= $b)
{
  echo "El número a es mayor o igual que el número b<br>";
}
else
{
  echo "El número a no es mayor o igual que b<br>";
}

?>
