<?php

$names[10]="Marcelo";
$names[30]="Juan";
$names[44]="Brenda";
$names[8]="Mariana";

reset($names);

do {

$puntero=key($names);

$value=current($names);

echo "En el índice $puntero esta el elemento. $value<br>";

} while (next($names))

?>
