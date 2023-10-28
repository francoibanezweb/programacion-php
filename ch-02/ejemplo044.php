<?php
$numero = 1;
 while($numero <= 100)
 {
  $cuadrado = $numero * $numero;
  echo "Para el número ". $numero . " el cuadrado es ". $cuadrado."<br>";
  if($numero == 50)
  {
    echo "<br>Llegamos a la mitad del proceso y comenzamos la cuenta regresiva
      <br><br>";
    while($numero >= 1)
    {
      echo "El número es $numero<br>";
      $numero--;
      if($numero == 10)
      {
        echo "Salimos por acción del break<br>";
        break 2;/* Escapa los dos while anidados y sigue con el
          código restante */
      }
    }
  }
  $numero ++;
 }
  echo "Podemos ejecutar el código restante a partir de aqui";
?>
