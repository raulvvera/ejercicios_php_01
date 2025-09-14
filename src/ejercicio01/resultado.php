<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversor</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <div class="card">
        <?php
    $euros = $_POST["euros"];
    
    $pesetas = $euros * 166.386;
  ?>
  <h1><?= $pesetas ?></h1>
        <div class="botones">
            <a href="index.html"><button>Volver</button></a>
        </div>
    </div>
</body>

</html>
