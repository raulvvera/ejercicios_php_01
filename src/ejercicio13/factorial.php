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
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $n = intval($_POST["numero"]);

        function factorial($n) {
            if ($n === 0) return 1; // Caso base
            $resultado = 1;
            for ($i = 1; $i <= $n; $i++) {
                $resultado *= $i;
            }
            return $resultado;
        }

        echo "<p>El factorial de <strong>$n</strong> es: <strong>" . factorial($n) . "</strong></p>";
    }
            ?>

        </div>
    </main>
    <br>
    <div class="botones">
        <a href="index.php"><button>Volver</button></a>
    </div>

    <footer>
        <h2>Diego Raúl Vázquez Vera</h2>
    </footer>
</body>

</html>