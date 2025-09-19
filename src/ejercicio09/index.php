<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
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
    9.	Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar en una tabla (etiqueta "table" de HTML).
  </h3>
  <br />
  <main>
  <div class="card">
    <h1>Tabla de multiplicar</h1>
    <h2>Este programa te crea la tabla de multiplicar</h2>
    <form action="tabla.php" method="post">
        <label>Tabla del: <input type="number" name="number" step="0" required></label><br><br>
        <input type="submit" value="Calcular">
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