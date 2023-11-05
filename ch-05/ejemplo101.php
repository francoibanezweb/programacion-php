<?php
$str = "Esta es una cadena de caracteres generada en php";
$separador=" ";

$myarr = explode($separador, $str);

$cant_elem = count($myarr);

for ($i=0; $i < $cant_elem; $i++)
{
  echo "El elemento $i es: $myarr[$i]<br>";
}

?>
