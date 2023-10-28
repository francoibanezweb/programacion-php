<?php
/* Utilizando switch con la opción default
 * Formulario que permite ingresar los datos mediante un cuadro de texto
 * Sintaxis alternativa de la sentencia switch, dos puntos y endswitch */


if (!isset($_POST['envio'])) {
?>

<form action="ejemplo035.php" method="post">
  <table border="0" width="100%">
    <tr>
      <td width="39%">
        <p align="right">Ingrese el Número del día de la semana</p>
      </td>
      <td width="61%">
        <input type="text" name="numero">
      </td>
    </tr>
    <tr>
      <td width="39%"></td>
      <td width="61%">
        <input type="submit" name="envio" value="Ver el resultado">
      </td>
    </tr>
  </table>
</form>

<?php
} else {
  // Handle form submission and switch case here
  if (isset($_POST['numero'])) {
    $dayNumber = $_POST['numero'];
    switch ($dayNumber):
      case 1:
        echo "Hoy es Lunes";
        break;
      case 2:
        echo "Hoy es Martes";
        break;
      case 3:
        echo "Hoy es Miércoles";
        break;
      case 4:
        echo "Hoy es Jueves";
        break;
      case 5:
        echo "Hoy es Viernes";
        break;
      case 6:
        echo "Hoy es Sábado";
        break;
      case 7:
        echo "Hoy es Domingo";
        break;
      default:
        echo "Número de día no válido.";
        break;
      endswitch;
  }
}
?>


