<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa saludo por hora</title>
</head>
<body>
    <div class="contenedor">
        <?php
        
            $hora = $_POST["hora"];
    
            if ($hora >= 6 && $hora <=12){echo "¡Buenos días!";}
            elseif ($hora >= 13 && $hora <= 20){echo "¡Buenas tardes!";}
            else (){echo "¡Buenas noches!";}
        ?>
  <h1><?= $hora ?></h1>
        <div class="botones">
            <a href="index.html"><button>Volver</button></a>
        </div>
    </div>
</body>
</html>