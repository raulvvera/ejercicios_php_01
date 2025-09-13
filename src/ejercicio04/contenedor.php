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
    
    $clacular = $hora * 166.386;
  ?>
  <h1><?= $calcular ?></h1>
        <div class="botones">
            <a href="index.html"><button>Volver</button></a>
        </div>
    </div>
</body>
</html>