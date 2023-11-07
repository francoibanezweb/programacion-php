<?php

  $file = "file2.txt";

  if ($fp = fopen($file,"r"))
  {
    fpassthru($fp);
  }
  else
  {
    echo "Error al abrir el archivo $file";
  }

  fclose($fp);

?>
