<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programa saludo por hora</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
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
  <main>
    <div class="card">
        <?php
        
            $hora = $_POST["hora"];
    
            if ($hora >= 6 && $hora <=12){echo "¡Buenos días!";}
            elseif ($hora >= 13 && $hora <= 20){echo "¡Buenas tardes!";}
            else {echo "¡Buenas noches!";}
        ?>
  <h1><?= $hora ?></h1>
  </div>
  </main>
        <div class="botones">
            <a href="index.php"><button>Volver</button></a>
        </div>
    
    <footer>
      <h2>Diego Raúl Vázquez Vera</h2>
    </footer>
</body>
</html>