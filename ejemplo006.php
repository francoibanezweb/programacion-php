<?php

// Declaro una variable de ámbito global
$numero = 12345;

function prueba()
{
		  $numero = 22222; // esta es una variable de ámbito local, y tiene 
								// una validez solo dentro de esta función
		  echo $numero;
}

prueba();

?>
