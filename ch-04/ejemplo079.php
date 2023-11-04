<?php

// Utilizando la función range

$numeros = range(1,25);

ksort($numeros);

foreach ($numeros as $key => $value)
{
  echo "El elemento $key, tiene el valor: $value<br>";
}


?>
