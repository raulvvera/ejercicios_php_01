<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuantos Segundos</title>
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
    7. Escribe un programa que, dada una hora determinada (horas y minutos), calcule los
segundos que faltan para llegar a la medianoche.
  </h3>
  <br />
  <main>
  <div class="card">
    <h1>Cuantos Segundos</h1>
    <h2>calcule los segundos que faltan para llegar a la medianoche</h2>
    <form action="segundos.php" method="GET">
        Hora: <input type="number" name="hora" min="1" max="12" required>
        Minuto: <input type="number" name="minuto" min="0" max="59" required>
        <input type="submit" value="Ver segundos">
    </form>
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