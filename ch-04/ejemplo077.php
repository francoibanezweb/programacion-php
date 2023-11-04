<?php

// Utilizando la función krsort

$destinos = array("bue" => "Buenos Aires",
                  "par" => "Paris",
                  "mex" => "México",
                  "bra" => "Brasil",
                  "chi" => "Chile");

krsort($destinos);

foreach ($destinos as $key => $value)
{
  echo "El elemento $key, tiene el valor: $value<br>";
}


?>
