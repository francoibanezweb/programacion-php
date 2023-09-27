<?php
/* Declaro una variable de ambito global */
$a = 4;
$b = 2;

function promedio()
{
		  /* Calculo el promedio, accediendo a los valores de las variables 
			* globales a y b */
		  $promedio = ($GLOBALS["a"] + $GLOBALS["b"]) / 2;

		  /* la muestro */

		  echo "$promedio<br>";
}

/* Muestro el valor de la variable numero dentro de la funcion */
promedio();

?>
