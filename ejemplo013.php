<?php
/* Asigno valores a las variables */
$precio=12.5;

/* Muestro el tipo de variable */
echo "<br>Precio $precio es una variable del Tipo: ".gettype($precio);

/* Lo cambio a Integer */
settype($precio, "integer");

/* Muestro el tipo de variable */
echo "<br>Precio $precio es una variable del Tipo: ".gettype($precio);


?>
