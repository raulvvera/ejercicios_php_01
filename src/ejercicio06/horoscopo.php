<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoscopo</title>
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

        function horoscopo($dia, $mes) {
    if (($dia >= 21 && $mes == 3) || ($dia <= 19 && $mes == 4)) {
        return "Aries";
    } elseif (($dia >= 20 && $mes == 4) || ($dia <= 20 && $mes == 5)) {
        return "Tauro";
    } elseif (($dia >= 21 && $mes == 5) || ($dia <= 20 && $mes == 6)) {
        return "Géminis";
    } elseif (($dia >= 21 && $mes == 6) || ($dia <= 22 && $mes == 7)) {
        return "Cáncer";
    } elseif (($dia >= 23 && $mes == 7) || ($dia <= 22 && $mes == 8)) {
        return "Leo";
    } elseif (($dia >= 23 && $mes == 8) || ($dia <= 22 && $mes == 9)) {
        return "Virgo";
    } elseif (($dia >= 23 && $mes == 9) || ($dia <= 22 && $mes == 10)) {
        return "Libra";
    } elseif (($dia >= 23 && $mes == 10) || ($dia <= 21 && $mes == 11)) {
        return "Escorpio";
    } elseif (($dia >= 22 && $mes == 11) || ($dia <= 21 && $mes == 12)) {
        return "Sagitario";
    } elseif (($dia >= 22 && $mes == 12) || ($dia <= 19 && $mes == 1)) {
        return "Capricornio";
    } elseif (($dia >= 20 && $mes == 1) || ($dia <= 18 && $mes == 2)) {
        return "Acuario";
    } elseif (($dia >= 19 && $mes == 2) || ($dia <= 20 && $mes == 3)) {
        return "Piscis";
    } else {
        return "Fecha no válida";
    }
}
 if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $dia = (int) $_POST["dia"];
        $mes = (int) $_POST["mes"];
echo "Tu fecha de nacimiento es $dia/$mes<br>";
echo "Tu horóscopo es: ";

 }
    ?>
    <h1><?= horoscopo($dia, $mes) ?></h1>
    </main>
    </div>
    <div class="botones">
        <a href="index.php"><button>Volver</button></a>
    </div>

    <footer>
        <h2>Diego Raúl Vázquez Vera</h2>
    </footer>
</body>

</html>