<?php

// Utilizando la función ksort

$destinos = array("bue" => "Buenos Aires",
                  "par" => "Paris",
                  "mex" => "México",
                  "bra" => "Brasil",
                  "chi" => "Chile");

ksort($destinos);

foreach ($destinos as $key => $value)
{
  echo "El elemento $key, tiene el valor: $value<br>";
}


?>
