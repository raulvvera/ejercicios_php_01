<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ordenar numeros</title>
    <link rel="stylesheet" href="../css/styles.css">
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
    $entrada = $_POST["numeros"] ?? "";
    $valores = array_map("trim", explode(",", $entrada));

    $suma = 0;
    $contador = 0;

    foreach ($valores as $valor) {
        if (!is_numeric($valor)) {
            continue; // ignorar lo que no sea número
        }
        $num = (float)$valor;
        if ($num < 0) {
            break; // número negativo -> fin
        }
        $suma += $num;
        $contador++;
    }

    if ($contador > 0) {
        $media = $suma / $contador;
        echo "<h2>Resultado</h2>";
        echo "<p>Se introdujeron $contador número(s).</p>";
        echo "<p>La media es: $media</p>";
    } else {
        echo "<p>No se introdujeron números positivos válidos.</p>";
    }

    echo '<p><a href="index.php">Volver</a></p>';
} else {
    header("Location: index.php");
    exit;
}
?>

        </div>
    </main>
    <footer>
        <h2>Diego Raúl Vázquez Vera</h2>
    </footer>
</body>

</html>