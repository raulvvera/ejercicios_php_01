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
            $figuras = [
                "bolita"   => "🔴",
                "ladrillo" => "🧱",
                "pinguino" => "🐧",
                "pina"     => "🍍",
                "sol"      => "☀️"
            ];

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $altura = intval($_POST["altura"]);
                $figura = $_POST["figura"];

                if ($altura > 0 && isset($figuras[$figura])) {
                    $simbolo = $figuras[$figura];
                    echo "<div class='piramide'>";

                    for ($i = 1; $i <= $altura; $i++) {
                        // espacios para centrar
                        echo str_repeat("&nbsp;", ($altura - $i) * 2);
                        // símbolos de la fila
                        echo str_repeat($simbolo . " ", $i);
                        echo "<br>";
                    }

                    echo "</div>";
                } else {
                    echo "<p style='color:red'>Datos inválidos</p>";
                }
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