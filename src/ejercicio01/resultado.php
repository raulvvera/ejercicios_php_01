<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado Conversor</title>
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
    $euros = $_POST["euros"];
    
    $pesetas = $euros * 166.386;
  ?>
        <h1><?= $pesetas . " " . "Pesetas"?></h1>
    </div>
    </main>
        <div class="botones">
            <a href="index.html"><button>Volver</button></a>
        </div>
    
    <br>
    <footer>
        <h2>Diego Raúl Vázquez Vera</h2>
    </footer>
</body>

</html>