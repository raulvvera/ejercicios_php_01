<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volumen_cono</title>
</head>
<body>
    <div class="contenedor">
        <?php
    $radio = $_GET["radio"];
    $altura = $_GET["altura"];
    
    $calcular = (pi() * ($radio ** 2) * $altura) / 3;
  ?>
  <h1><?= $calcular ?></h1>
        <div class="botones">
            <a href="./"><button>Volver</button></a>
        </div>
    </div>
</body>
</html>