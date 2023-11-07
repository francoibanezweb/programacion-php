<?php
  $file = "archivo111.txt";

  @(fopen($file,"r")) or
    die("No es posible abrir el archivo $file");

?>
