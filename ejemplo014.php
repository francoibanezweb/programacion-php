<?php
/* Asigno valores a las variables */
$precio = 12.5;

if(settype($precio, "integer"))
{
  echo "Hemos convertido el precio exitosamente<br>";
}
else
{
  echo "Fallo la conversión del precio<br>";
}


?>
