<?php
    $nombre = "Napoleón Bonaparte";
    $comida = "Pizza";
    $email = "fake123@gmail.com";

    $edad = 21;
    $users = 2;
    $quantity = 3;
    
    $gpa = 2.5;
    $price = 4.99;
    $tax_rate = 5.1;

    $employed = true;
    $online = false;
    $for_sale = true;
    
    $total = null;

    echo"<br>You have order {$quantity} x {$comida}<br>";
    $total = $quantity * $price;
    echo"Your total is \${$total}<br>";

    echo"<br>Hola {$nombre}<br>";
    echo"A ti te gusta la {$comida}<br>";
    echo"Your email is {$email}<br><br>";

    echo"You are {$edad} years old<br>";
    echo"There are {$users} users online<br>";
    echo"You would like to buy {$quantity} items<br><br>";

    echo"Your gpa is: {$gpa}<br>";
    echo"Your pizza is \${$price}<br>";
    echo"The sales tax rate is: {$tax_rate}%<br><br>";

    echo"Online status: {$online}";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <br>
    <button>order pizza</button>
</body>
</html>