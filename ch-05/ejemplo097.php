<?php
$cadena = "Hernan Felipetta";

$busqueda = "nan";

echo "$cadena<br>";

echo "Busco: $busqueda<br>";

if (preg_match("/$busqueda/", $cadena))
{
  echo "En la cadena $cadena existe $busqueda<br>";
}
else
{
  echo "En la cadena $cadena NO existe $busqueda<br>";
}

?>
