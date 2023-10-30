<?php

$numbers = array(15,2,8,0,34,11,15);

reset($numbers);

do
{
  $pos = key($numbers);

  $value = current($numbers);

  echo "En el índice $pos esta el elemento: $value<br>";

} while (next($numbers))

?>
