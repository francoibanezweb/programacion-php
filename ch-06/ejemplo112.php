<?php

// Viendo el contenido de un archivo usando fread().
//    - El 1er parámetro es el puntero al archivo abierto sobre el cual vamos a
//        operar.
//    - El 2do parámetro es la cantidad de caracteres que deseamos leer.

$file = "file2.txt";

$fp = fopen($file, "r");

echo fread($fp, 10);

fclose($fp);

?>
