<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cartas</title>
  <link rel="stylesheet" href="../css/styles.css">
  <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon">
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
  <br />
  <h3>
    14. Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos suman según el juego de la brisca. Emplea un array asociativa para obtener los puntos a partir del nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras cogido de una baraja de verdad.
  </h3>
  <br />
  <main>
    <div class="card">
     <h1>Cartas Robadas</h1>
     <?php
// brisca.php

// Array asociativo de valores -> puntos en brisca
$valores = [
    "As" => 11,
    "2" => 0,
    "3" => 10,
    "4" => 0,
    "5" => 0,
    "6" => 0,
    "7" => 0,
    "Sota" => 2,
    "Caballo" => 3,
    "Rey" => 4
];

// Palos de la baraja española
$palos = ["Oros", "Copas", "Espadas", "Bastos"];

// Construir baraja completa
$baraja = [];
foreach ($palos as $palo) {
    foreach ($valores as $carta => $puntos) {
        $baraja[] = ["carta" => $carta, "palo" => $palo, "puntos" => $puntos];
    }
}

// Barajar
shuffle($baraja);

// Robar 10 cartas
$mano = array_slice($baraja, 0, 10);

// Calcular puntos
$totalPuntos = 0;
foreach ($mano as $carta) {
    $totalPuntos += $carta["puntos"];
}

?>
    <ol>
        <?php foreach ($mano as $carta): ?>
            <li><?= $carta["carta"] ?> de <?= $carta["palo"] ?> (<?= $carta["puntos"] ?> puntos)</li>
        <?php endforeach; ?>
    </ol>

    <h2>Total de puntos: <?= $totalPuntos ?></h2> 
    </div>
  </main>
  <div class="botones">
    <a href="../"><button>Volver</button></a>
  </div>
  <footer>
    <h2>Diego Raúl Vázquez Vera</h2>
  </footer>
</body>

</html>