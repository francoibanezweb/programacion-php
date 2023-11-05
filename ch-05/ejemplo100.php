<?php
$str = "Mi nombre es #NOMBRE";

echo "Cadena Original: $str<br>";

echo preg_replace("/#nombre/", "Franco",$str)."<br>";

echo preg_replace("/#nombre/i", "Franco", $str)."<br>";

?>
