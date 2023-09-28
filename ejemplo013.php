<?php
/* Asigno valores a las variables */
$precio=12.5;

echo "<br>&emsp;La función <b>settype()</b> nos permite asignarle el tipo de 
  variable a una variable.<br>Si se logró la conversión con éxito devuelve
<b>TRUE</b>, si no fue así <b>FALSE</b>.<br>";


/* Muestro el tipo de variable */
echo "<br>Precio $precio es una variable del Tipo: ".gettype($precio);

/* Lo cambio a Integer */
settype($precio, "integer");

/* Muestro el tipo de variable */
echo "<br>Precio $precio es una variable del Tipo: ".gettype($precio);


?>
