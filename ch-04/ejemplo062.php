<?php

$names[10]="Marcelo";
$names[30]="Juan";
$names[44]="Brenda";
$names[8]="Mariana";

reset($names);

foreach ($names as $key => $value)
{
  echo "En el índice $key esta el elemento: $value<br>";
}

?>
