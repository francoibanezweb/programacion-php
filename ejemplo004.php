<?php

$titulo="Este es el título de la página";
$nombre="Franco Ezequiel Ibañez";

$dia="Martes";
$vivo="Argentina";
$numero=27;

?>

<html>

<head>
	<title><?php echo $titulo ?></title>
</head>


<body>
	<table>
		<tr>
		  <td width="100%">Mi nombre es: <b> <?php echo $nombre; ?> </b>  </td>
	   </tr>
      <tr>
		  <td width="100%">Mi día preferido es el : <b><font color="#FF0000"><?php echo $dia; ?> </font> </b> </td>
      </tr>
		  <tr>
		     <td width="100%">Vivo en: <b><i><?php echo $vivo; ?></i></b></td>
		  </tr>
	   <tr>
		  <td width="100%">Mi número de la suerte es: <u><font size="5"><?php echo $numero; ?></font></u></td>
      </tr>

	</table>	
</body>

</html>
