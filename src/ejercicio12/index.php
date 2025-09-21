<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pirámide pintada</title>
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
    12. Realiza un programa que pinte una pirámide por pantalla. La altura se debe pedir por teclado mediante un formulario. La pirámide estará hecha de bolitas, ladrillos o cualquier otra imagen de las 5 que se deben dar a elegir mediante un formulario.
  </h3>
  <br />
  <main>
    <div class="card">
      <h1>Pirámide</h1>
      <h2>Este programa dibuja Pirámides.</h2>
      <form action="piramide.php" method="post">
        <label>Altura: <input type="number" name="altura" min="1" max="10" autofocus></label><br><br>
        <label>Figura base:</label>
        <select name="figura" required>
          <option value="bolita">Bolita</option>
          <option value="ladrillo">Ladrillo</option>
          <option value="pinguino">Pingüino</option>
          <option value="pina">Piña</option>
          <option value="sol">Sol</option>
          
        </select>
        <br><br>
        <input type="submit" value="Dibujar">
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