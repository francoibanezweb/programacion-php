<?php
/* Utilizando el while para contar números y sacar el cuadrado */


// Comenzamos desde 1
// Definimos la variable $numero , a la cual le asignamos el valor 1
$numero = 1;

while($numero <= 100)
{
  // Calculo el valor del cuadrado del número
  $cuadrado = $numero * $numero;

  // Imprimo el número y el cuadrado de dicho número
  echo "Para el número " . $numero ." el cuadrado es ". $cuadrado."<br>";

  // Le sumo 1 a numero
  $numero ++;
}


?>
