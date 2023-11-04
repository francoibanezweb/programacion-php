<?php

// Utilizando la función sort en un array de índice de texto

$destinos = array("bue" => "Buenos Aires",
                  "par" => "Paris",
                  "mex" => "México",
                  "bra" => "Brasil",
                  "chi" => "Chile");
sort($destinos);

foreach ($destinos as $key => $value)
{
  echo "El elemento $key, tiene el valor: $value<br>";
}

?>
