<?php
/* La función unset() destruye la variable que le pasamos como parámetro. */

/* Asigno valores a las variables */
$precio = 12.5;

/* Destruyo la variable precio */ 
unset($precio);

/* Veo si precio está definida */

if(isset($precio))
{
  echo "La variable Precio esta definida<br>";
}
else
{
  echo "La variable Precio no esta definida<br>";
}


?>
