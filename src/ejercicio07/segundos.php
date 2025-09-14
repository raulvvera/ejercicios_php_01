<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segundos</title>
</head>
<body>

        <?php
    
    $hora = $_GET["hora"];
    $minuto = $_GET["minuto"];
    function segundosParaMedianoche($hora, $minuto) {
    // Total de segundos en un día
    $segundosDia = 12 * 60 * 60;

    // Segundos que ya han pasado desde el inicio del día
    $segundosPasados = ($hora * 3600) + ($minuto * 60);

    // Segundos que faltan
    $segundosRestantes = $segundosDia - $segundosPasados;

    return $segundosRestantes;
}

echo "Hora actual: $hora:$minuto<br>";
echo "Segundos que faltan para medianoche: " . segundosParaMedianoche($hora, $minuto);
  ?>
        <div>
            <a href="index.php"><button>Volver</button></a>
        </div>

</body>
</html>