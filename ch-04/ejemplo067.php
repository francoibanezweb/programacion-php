<?php

$numbers = array(1 => 15,2,8,0,34,11,15);

for (reset($numbers); $pos=key($numbers); next($numbers))
{
  $value=current($numbers);

  echo "En el índice $pos esta el elemento: $value<br>";
}

?>
