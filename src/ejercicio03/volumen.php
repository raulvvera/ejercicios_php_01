<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>volumen_cono</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
      <div class="header-content">
        <h3>Ejercicios de PHP – Relación I</h3>
        <h4>Certificaciones de Profesionalidad</h4>
        <h5>Plantilla</h5>
      </div>
      <div class="header-profile">
        <img src="../img/perfil.jpg" alt="Foto de perfil" />
      </div>
    </header>
    <br>
    <main>
    <div class="card">
        <?php
    $radio = $_GET["radio"];
    $altura = $_GET["altura"];
    
    $calcular = (pi() * ($radio ** 2) * $altura) / 3;
  ?>
  <h1><?= $calcular . " " . "metros cubicos"?></h1>
  </div>
  </main>
        <div class="botones">
            <a href="./"><button>Volver</button></a>
        </div>
        <br>
    <footer>
        <h2>Diego Raúl Vázquez Vera</h2>
    </footer>
</body>
</html>