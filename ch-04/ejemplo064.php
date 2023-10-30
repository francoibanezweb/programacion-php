<?php

$names[10]="Marcelo";
$names[30]="Juan";
$names[44]="Brenda";
$names[8]="Mariana";

end($names);

do
{

  $pointer=key($names);

  $value=current($names);

  echo "En el índice $pointer esta el elemento: $value<br>";

} while (prev($names))

?>
