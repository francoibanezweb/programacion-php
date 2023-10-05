<?php
/* Si existe la variable enviar, el formulario ya fue completado */
/* evalúa la condición, si la variable mes es igual a '', esto quiere decir
 * que no recibe datos, entonces muestro el formulario para poder ingresar
 * el dato del mes */

$mes = isset($_POST['mes']) ? $_POST['mes'] : '';

if($mes == '')
{

?>

<form method="POST" action="ejemplo030.php">
  <p>Ingrese el número de mes sobre el cual desea conocer la estación</p>
  <p><input type="text" name="mes" size="20">
    <input type="submit" value="Enviar" name="enviar">
    <input type="reset" value="Restablecer" name="B2"></p>
</form>

<?php
}

/* Si ya complete el formulario ingresando el mes que deseamos averiguar 
 * ejecutamos el siguiente código */
else
{
  if($mes == 12 or $mes == 1 or $mes == 2)
  {
    echo "Estamos en Verano";
  }
  else
  {
    /* No estamos en verano, por lo tanto puede ser cualquiera de los 
     * otros meses del año */
    if($mes == 3 or $mes == 4 or $mes == 5)
    {
      echo "Estamos en Otoño";
    }
    else
    {
      /* No estamos en verano, ni en otoño */
      if($mes == 6 or $mes == 7 or $mes == 8)
      {
        echo "Estamos en Invierno";
      }
      else
      {
        /* No estamos en verano, ni en Otoño, ni Invierno por lo tanto 
          * estamos  en Primavera */
        echo "Estamos en Primavera";
      }
    }
  }
}

?>
