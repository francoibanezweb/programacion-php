<?php

// Pasando parámetros por defecto

function mayusculas($nombre)
{
  $nombre = strtoupper($nombre);
  return $nombre;
}

// Pasando parámetros por referencia

function mayusculas2(&$nombre)
{
  $nombre = strtoupper($nombre)." este es un texto adicional";
}

$nombre = "Horacio Trebino";
echo "El nombre es : ". mayusculas($nombre) ."<br>";

mayusculas2($nombre);

echo "El nombre es: ". $nombre ."<br>";

echo "El nombre es: ". mayusculas($nombre) ."<br>";

?>

