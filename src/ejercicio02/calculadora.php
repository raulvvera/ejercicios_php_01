<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de factura</title>
</head>
<body>
    <div class="contenedor">
        <?php
    $base = $_POST["base"];
    
    $iva = $base * 1.21;
  ?>
  <h1><?= $iva ?></h1>
        <div class="botones">
            <a href="index.html"><button>Volver</button></a>
        </div>
    </div>
</body>
</html>