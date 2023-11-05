<?php
  $str = "Esta es una cadena de caracteres generada en php";
  $separador=" ";

  $myArr = explode($separador,$str,5);

  $cant_elem = count($myArr);

  for ($i=0; $i < $cant_elem; $i++)
  {
    echo "El elemento $i es: $myArr[$i]<br>";
  }

?>
