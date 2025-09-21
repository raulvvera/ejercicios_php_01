<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculo media</title>
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
    11. Escribe un programa que calcule la media de un conjunto de números positivos introducidos por teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha terminado de introducir los datos cuando meta un número negativo. Ese último número que indica el final no se computa en la media.
  </h3>
  <br />
  <main>
  <div class="card">
    <h1>Cálculo de la media</h1>
    <h2>Este programa calcula la media de los números positivos introducidos.
Vaya introduciendo números (puede parar introduciendo un número negativo).</h2>
    <form action="numeros.php" method="post">
        <label>Por favor, introduzca números separados por comas: <input type="text" name="numeros" step="0" autofocus></label><br><br>
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