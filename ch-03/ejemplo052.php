<?php

// Función para dibujar una tabla, pasandole como parametros la cantidad de
// filas y columnas

function tabla($filas, $columnas)
{
  $tabla = '<table border="1" width="100%">';

  while($cnt_filas < $filas)
  {
    $cnt_filas++;

    $tabla .="<tr>";

    while($cnt_columnas < $columnas)
    {
      $cnt_columnas++;
      $tabla .="<td>xxxxx</td>";
    }
    $tabla .="</tr>";
    $cnt_columnas=0;
  }
  $tabla .="</table>";
  return $tabla;
}

echo tabla(5,2);

?>
