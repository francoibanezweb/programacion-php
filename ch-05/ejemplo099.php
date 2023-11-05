<?php
$str = "Mi nombre es #NOMBRE";

echo "Cadena Original: $str<br>";

echo preg_replace("/#NOMBRE/","Martin", $str);

?>
