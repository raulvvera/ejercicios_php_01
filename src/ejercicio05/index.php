<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Programa saludo por hora</title>
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
  <h3> 5. Escribe un programa que calcule el salario semanal de un trabajador teniendo en cuenta que
    las horas ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la
    hora 41, se pagan a 16 euros la hora.

  </h3>
  <br>
  <main>
  <div class="card">

    <h1>Programa calculo salario</h1>
    <p>Por favor, introduzca el número de horas trabajadas durante la semana:</p>

    <form action="salario.php" method="post">
      <input type="number" name="horas" min="0" require />
      <input type="submit" value="Aceptar" />
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