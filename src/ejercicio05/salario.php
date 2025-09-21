<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salario total</title>
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
    $horas = $_POST["horas"] ?? 0;
    $normales = min($horas, 40);
    $extras = max(0, $horas - 40);
    
    $salario = ($normales * 12) + ($extras * 16); 
?>
            <h1>Resultado del calculo</h1>
            <p>El sueldo semanal que le corresponde es de
            <h1><?= $horas . " " . "horas a total de ". $salario . "€"?></h1>
            </p>
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