<?php

// Capturo el valor del parámetro "mes" en la URL
$mes = isset($_GET['mes']) ? $_GET['mes'] : null;


if($mes == 12 or $mes == 1 or $mes == 2 or $mes == 3)
{
  echo "Estamos en verano";
}
else
{
  echo "NO estamos en los meses de verano";
}


?>
