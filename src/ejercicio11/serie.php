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
            if (isset($_POST['n'])) {
                $n = intval($_POST['n']);
                if ($n <= 0) {
                    echo "Por favor introduce un número mayor que cero.";
                } else {
                    $a = 0;
                    $b = 1;
                    echo "Los primeros $n términos de Fibonacci:<br>";
                    for ($i = 1; $i <= $n; $i++) {
                        echo $a;
                        if ($i < $n) {
                            echo ", ";
                        }
                        $siguiente = $a + $b;
                        $a = $b;
                        $b = $siguiente;
                    }
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