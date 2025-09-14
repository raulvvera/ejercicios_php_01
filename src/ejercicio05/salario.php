<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salario total</title>
</head>
<body>
<?php
    $hora = $_POST["hora"];
    $saludo = "El sueldo semanal que le corresponde es de " ;

    if ($hora <= 40){echo $saludo . $hora * 12;}
    else {echo $saludo . $hora * 16;}
    
?>
<h1><?= $hora . " horas"?></h1>
        <div class="botones">
            <a href="index.php"><button>Volver</button></a>
        </div>
</body>
</html>