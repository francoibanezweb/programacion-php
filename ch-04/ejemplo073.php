<?php

//Utilizando la función asort en un array de índice de texto

$destinos = array("bue" => "Buenos Aires",
                  "par" => "Paris",
                  "mex" => "México",
                  "bra" => "Brasil",
                  "chi" => "Chile");
asort($destinos);

foreach ($destinos as $clave => $pais)
{
  echo "El elemento $clave, tiene el valor: $pais<br>";
}

?>
