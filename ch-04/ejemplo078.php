<?php

// Utilizando la función shuffle

$destinos = array("bue" => "Buenos Aires",
                  "par" => "Paris",
                  "mex" => "México",
                  "bra" => "Brasil",
                  "chi" => "Chile");

shuffle($destinos);

foreach ($destinos as $key => $value)
{
  echo "El elemento $key, tiene el valor: $value<br>";
}


?>
