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
    <h3>4.	Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas tardes o buenas noches 
        según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5. respectivamente. Sólo se tienen en cuenta 
        las horas, los minutos no se deben introducir por teclado.
    </h3>
    <br>
    <div class="card">
        <form method="post" action="index.php">
            <div class="contenedor">

                <?php
                if (!isset($_POST["conversor"])) {
                ?>
                <table>
                    <thead>
                        <tr>
                            <th colspan="2">Conversor Euros → Pesetas</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td><b>Euros</b></td>
                            <td>
                                <input type="text" name="EUR" required>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <br>
                <div class="botones">
                    <button type="submit" name="conversor">Convertir</button><br>


                </div>


                <?php

              } else {
                $cambio = 166.386;
                $euro = $_POST["EUR"];


                $resultado = $euro * $cambio;
                echo "<h2>$euro € son $resultado pesetas</h2><br>"; ?>


                <div class="botones">
                    <a href="index.html"><button>Volver</button></a>
                </div>
                <?php

             }
                ?>


            </div>

        </form>
    </div>
    <div class="botones">
        <a href="../index.html"><button>Volver</button></a>
    </div>
</body>
</html>