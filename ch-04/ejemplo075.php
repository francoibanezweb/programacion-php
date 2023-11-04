<?php

// Utilizando la función arsort

$destinos = array("bue" => "Buenos Aires",
                  "par" => "Paris",
                  "mex" => "México",
                  "bra" => "Brasil",
                  "chi" => "Chile");

arsort($destinos);

foreach ($destinos as $key => $value)
{
  echo "El elemento $key, tiene el valor: $value<br>";
}


?>
