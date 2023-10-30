<?php

# Arreglo multidimensional

$food = array(
      "Frutas" => array("Manzanas", "Banana", "Naranja"),
      "Verduras" => array("Tomate", "Zanahoria", "Lechuga")
);

foreach ($food as $category  => $items)
{
  echo "Dentro de las $category están:<br>";

  foreach ($items as $item)
  {
    echo " - $item<br>";
  }
}

?>
