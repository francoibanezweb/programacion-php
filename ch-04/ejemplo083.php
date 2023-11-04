<?php

// Utilizando la función in_array()


$dias = array("Lunes","Martes","Miércoles","Jueves","Viernes","Sábado",
              "Domingo");

if (in_array("Lunes", $dias))
{
  echo "Encontramos el elemento<br>";
}
else
{
  echo "No encontramos el elemento<br>";
}

?>
