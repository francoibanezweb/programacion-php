<?php
if(isset($_POST['envio'])){
    $numero = $_POST['numero'];
    switch($numero) {
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
            echo "Número de día no válido";
    }
} else {
?>
<form method="POST" action="ejemplo034.php">
    <table border="0" width="100%">
        <tr>
            <td width="39%">
                <p align="right">Ingrese el Número del día de la semana</p>
            </td>
            <td width="61%">
                <select size="1" name="numero">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                </select>
            </td>
        </tr>
        <tr>
            <td width="39%"></td>
            <td width="61%"><input type="submit" value="Ver el Resultado"
             name="envio"></td>
        </tr>
    </table>
</form>
<?php
}
?>
