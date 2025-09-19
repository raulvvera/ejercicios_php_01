<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>volumen_cono</title>
    <link rel="stylesheet" href="../css/styles.css" />

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
    
    <h3>
        3. Escribe un programa que calcule el volumen de un cono mediante la
        fórmula [V= 1/3π⋅r<sup>2</sup>h]
    </h3>
    <br />
    <main>
    <div class="card">
        <h2>Volumen de un Cono</h2>
        <form action="volumen.php" method="GET">
            <input type="number" name="radio" step="1" placeholder="Radio (r)" required /><br />
            <input type="number" name="altura" step="1" placeholder="Altura (h)" required /><br />

            <input type="submit" value="Calcular" />
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