<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Horoscopo</title>
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
    6. Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.

  </h3>
  <br />
  <div class="card">
    <h1>Horoscopo según tu fecha</h1>
    <h2>Descubre tu horóscopo</h2>
    <form action="horoscopo.php" method="post">
        Día: <input type="number" name="dia" min="1" max="31" required>
        Mes: <input type="number" name="mes" min="1" max="12" required>
        <button type="submit">Ver horóscopo</button>
    </form>
  </div>
  <div class="botones">
    <a href="../"><button>Volver</button></a>
  </div>
</body>
</html>