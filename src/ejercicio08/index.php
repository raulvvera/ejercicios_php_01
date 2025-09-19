<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar numeros</title>
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
    8.	Escribe un programa que ordene, de menor a mayor, tres números enteros introducidos por teclado.
  </h3>
  <br />
  <main>
  <div class="card">
    <h1>Ordenar tres numeros </h1>
    <h2>Este programa ordena de menor a mayor los numeros enteros introducidos</h2>
    <form action="ordena.php" method="post">
        <label>Número 1: <input type="number" name="num1" required></label><br><br>
        <label>Número 2: <input type="number" name="num2" required></label><br><br>
        <label>Número 3: <input type="number" name="num3" required></label><br><br>
        <input type="submit" value="Ordenar">
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