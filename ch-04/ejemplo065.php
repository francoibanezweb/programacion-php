<?php

$names[10]="Marcelo";
$names[30]="Juan";
$names[44]="Brenda";
$names[8]="Mariana";

for (reset($names); $key = key($names); next($names))
{
  $value=current($names);

  echo "En el índice $key esta el elemento: $value<br>";
}

?>
