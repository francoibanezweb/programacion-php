<?php
$cadena = "Hernan Felipetta";
$busqueda = "NAN";

echo "$cadena<br>";
echo "Busco: $busqueda<br>";

if (preg_match("/$busqueda/",$cadena))
{
  echo "En la cadena $cadena existe $busqueda buscando con preg_match(
    \"/busqueda/\")<br>";
}
else
{
  echo "En la cadena $cadena NO existe $busqueda buscando con preg_match(
    \"/busqueda/\")<br>";
}

if (preg_match("/$busqueda/i",$cadena))
{
  echo "En la cadena $cadena existe $busqueda buscando con preg_match(
    \"/busqueda/i\")<br>";
}
else
{
echo "En la cadena $cadena existe $busqueda buscando con preg_match(
    \"/busqueda/i\")<br>";
}

?>

