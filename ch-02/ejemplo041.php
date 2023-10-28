<?php
$numero = 1;

do {
  $cuadrado = $numero * $numero;
  echo "Para el número ". $numero . " el cuadrado es ". $cuadrado."<br>";
  if($numero == 50)
  {
    echo "<br>LLegamos a la mitad del proceso<br><br>";
    break;
  }
  $numero ++;
} while ($numero <= 100)
?>

