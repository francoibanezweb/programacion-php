<?php
/* Asigno valores a las variables */
$precio = 12.5;

echo "<br>&emsp;La función <b>settype()</b> nos permite asignarle el tipo de 
  variable a una variable.<br>Si se logró la conversión con éxito devuelve
<b>TRUE</b>, si no fue así <b>FALSE</b>.<br><br>";

if(settype($precio, "integer"))
{
  echo "Hemos convertido el precio exitosamente<br>";
}
else
{
  echo "Fallo la conversión del precio<br>";
}


?>
