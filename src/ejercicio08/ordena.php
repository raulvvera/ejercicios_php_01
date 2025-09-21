<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar numeros</title>
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="shortcut icon" href="../img/favicon.ico" type="image/x-icon" />
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
  <br>
  <main>
    <div class="card">
    <?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $num1 = intval($_POST['num1']);
    $num2 = intval($_POST['num2']);
    $num3 = intval($_POST['num3']);

    $ordenados = match(true) {
        $num1 <= $num2 && $num2 <= $num3 => [$num1, $num2, $num3],
        $num1 <= $num3 && $num3 <= $num2 => [$num1, $num3, $num2],
        $num2 <= $num1 && $num1 <= $num3 => [$num2, $num1, $num3],
        $num2 <= $num3 && $num3 <= $num1 => [$num2, $num3, $num1],
        $num3 <= $num1 && $num1 <= $num2 => [$num3, $num1, $num2],
        default => [$num3, $num2, $num1],
    };

    $resultado = implode(", ", $ordenados);
}
?>
 <?php if (isset($resultado)): ?>
        <h3>Números ordenados: <?= htmlspecialchars($resultado) ?></h3>
    <?php endif; ?>
    
    </div>
    </main>
    <br>
    <div class="botones">
        <a href="../"><button>Volver</button></a>
      </div>
      
    <footer>
      <h2>Diego Raúl Vázquez Vera</h2>
    </footer>
</body>
</html>