<?php
// Usando fgetc()

$file = "file2.txt";

$fp = fopen($file, "r");

// Muestro el primer caracter
echo fgetc($fp);

fclose($fp);

?>
