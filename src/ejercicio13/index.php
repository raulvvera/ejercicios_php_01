<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Factorial de un número</title>
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
    13. Escribe un programa que calcule el factorial de un número entero leído por teclado.
  </h3>
  <br />
  <main>
    <div class="card">
      <h1>Factorial de un número</h1>
      <h2>Introduzca un número entero positivo:</h2>
      <form action="factorial.php" method="post">
              <input type="number" name="numero" min="0" autofocus="" required=""><br>
              <input type="submit" value="Aceptar">
            </form>
                  <br><br>
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