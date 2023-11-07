<?php
// Utilizando fopen

// Defino el archivo que voy a utilizar
$archivo = "archivo1.txt";

if (fopen($archivo,"r"))
{
  echo "Hemos podido abrir el archivo $archivo";
}
else
{
  echo "No es posible abrir el archivo $archivo";
}

?>
