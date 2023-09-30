<?php
/* Declaro e inicializo las variables */

/* El operador para concatener es el . (punto)*/

$nombre = "Esteban";
$apellido = "Trotta";

echo($nombre . " " . $apellido);

/* Asignando una cadena de caracteres a la variable nombre */

$nombre_dos = "Federico";
echo "<br>$nombre_dos<br>";

/* Agregando más caracteres a la cadena */
$nombre_dos = $nombre_dos . " Perez";
echo "$nombre_dos<br>";

/* También podemos concatenar de la siguiente forma, con el .= */
$nombre_tres = "Federico";
$nombre_tres .= " Perez";

echo "$nombre_tres<br>";

/* Mostrando en texto y un valor con formato */
$nombre_cuatro = "Larry Crozio";
$resultado = "<p>El Nombre es: $nombre_cuatro</p>";

echo "$resultado<br>";

/* Concatenando 2 variables */
$nombre_cinco = "Barbara";
$apellido_dos = "Perez";
$resultado_dos = $nombre_cinco ." ". $apellido_dos;

echo "$resultado_dos<br>";

/* Ver el primer valor de una string */
$nombre_seis = "Carlos";
$primer_caracter = $nombre_seis[0];
echo "<br>$primer_caracter<br>";

/* Ver el último valor de una cadena */
$nombre_siete = "Franco";
$ultimo_caracter = $nombre_siete[strlen($nombre_siete) -1];
echo "<br>$ultimo_caracter<br>";

?>
