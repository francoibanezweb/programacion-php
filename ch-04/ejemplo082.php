<?php

// Utilizando la función array_fill()


$prueba = array_fill(10,5,"Hallo Leute!");

foreach ($prueba as $key => $value)
{
  echo "El elemento $key, tiene el valor: $value<br>";
}

?>
