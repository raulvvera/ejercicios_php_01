<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Tablero con Alfil</title>
  <link rel="stylesheet" href="../css/stilos.css">
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
    15. Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal. El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la "a" a la "h" y las filas se indican del 1 al 8.
  </h3>
  <br />
  <main>
    <div class="card">
      <h1>Movimiento de un alfil</h1>

      <?php
      // Definimos posición del alfil (ejemplo: "d4")
      $posicionAlfil = isset($_POST['posicion']) ? $_POST['posicion'] : "d4";

      // Convertimos coordenadas (columna y fila)
      $columnas = range("a", "h");
      $columna = array_search($posicionAlfil[0], $columnas);
      $fila = intval($posicionAlfil[1]) - 1;

      // Función para calcular las diagonales posibles
      function movimientosAlfil($fila, $columna)
      {
        $movimientos = [];

        // 4 direcciones diagonales
        $direcciones = [[1, 1], [1, -1], [-1, 1], [-1, -1]];

        foreach ($direcciones as $dir) {
          $f = $fila;
          $c = $columna;
          while (true) {
            $f += $dir[0];
            $c += $dir[1];
            if ($f >= 0 && $f < 8 && $c >= 0 && $c < 8) {
              $movimientos[] = [$f, $c];
            } else {
              break;
            }
          }
        }
        return $movimientos;
      }

      // Guardamos las posiciones alcanzables
      $movimientos = movimientosAlfil($fila, $columna);
      ?>
      <div class="tablero">
        <!-- Cabecera columnas -->
        <div></div>
        <?php foreach ($columnas as $col): ?>
          <div class="col"><?= $col ?></div>
        <?php endforeach; ?>
        <div></div>

        <?php for ($i = 7; $i >= 0; $i--): ?>
          <!-- Número de fila izquierda -->
          <div class="fila"><?= $i + 1 ?></div>

          <?php for ($j = 0; $j < 8; $j++):
            $color = (($i + $j) % 2 == 0) ? "blanca" : "negra";
            $claseExtra = "";

            if ($i == $fila && $j == $columna) {
              $claseExtra = "alfil";
              $contenido = "♗";
            } elseif (in_array([$i, $j], $movimientos)) {
              $claseExtra = "movimiento";
              $contenido = "";
            } else {
              $contenido = "";
            }
          ?>
            <div class="casilla <?= $color ?> <?= $claseExtra ?>"><?= $contenido ?></div>
          <?php endfor; ?>

          <!-- Número de fila derecha -->
          <div class="fila"><?= $i + 1 ?></div>
        <?php endfor; ?>

        <!-- Cabecera columnas abajo -->
        <div></div>
        <?php foreach ($columnas as $col): ?>
          <div class="col"><?= $col ?></div>
        <?php endforeach; ?>
        <div></div>
      </div>
      <br>
      Introduzca las coordenadas del alfil (p. ej. e4)
      <br>
      <form method="post">
        <input type="text" name="posicion" autofocus="" required=""><br>
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