<?php
$str = "59.6 minutos";

$resultado = sprintf("%b<br>",$str);

$resultado .= sprintf("%c<br>",$str);

$resultado .= sprintf("%d<br>",$str);

$resultado .= sprintf("%f<br>",$str);

$resultado .= sprintf("%o<br>",$str);

$resultado .= sprintf("%s<br>",$str);

$resultado .= sprintf("%x<br>",$str);

$resultado .= sprintf("%X<br>",$str);

echo "<b>$resultado</b>";

?>
