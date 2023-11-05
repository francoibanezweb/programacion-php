<!DOCTYPE html>
<html>
<head>
    <title>Explicación de sql_regcase obsoleta</title>
</head>
<body>
    <h1>Obsolescencia de sql_regcase en PHP</h1>

    <?php
    $str = "marzo";
    echo "Texto original: $str<br>";

    // Explicación de sql_regcase obsoleta
    echo "<p>En PHP, la función <code>sql_regcase</code> se ha vuelto obsoleta
      y fue eliminada en versiones más recientes. Esta función se utilizaba para
 crear una cadena de búsqueda insensible a mayúsculas y minúsculas para
consultas SQL. En lugar de <code>sql_regcase</code>, puedes usar la función
<code>LOWER</code> o <code>UPPER</code> en tu consulta SQL para realizar
búsquedas insensibles a mayúsculas y minúsculas.</p>";
    ?>

</body>
</html>

