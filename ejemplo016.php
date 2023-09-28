<?php

echo "<br>&emsp;La función <b>is_array()</b> nos permite averiguar si una<br> 
variable es un array, devolviendo un valor <b>TRUE</b> si la<br> variable 
pasada como parámetro es un array o <b>FALSE</b><br> si no es un array.
<br><br>";

/* Asigno valores a las variables */
$precio = 12.5;
$nombres[0]="Marcela";
$nombre[1]="Daniel";
$nombre[2]="Gustavo";

if(is_array($precio))
{
  echo "La variable Precio es un array<br>";
}
else
{
  echo "La variable Precio no es un array<br>";
}
if(is_array($nombres))
{
  echo "La variable Nombres es un array<br>";
}
else
{
  echo "La variable Nombres no es un array<br>";
}

?>
