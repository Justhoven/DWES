<!DOCTYPE html>
<html>
<head></head>
<nav></nav>
<body>

<h2>ELIGE UNA DE LAS SIGUIENTES FIGURAS:</h2><br>

<a href="AP1-4/triangulo.php">TRIÁNGULO</a><br><br>
<a href="AP1-4/rectangulo.php">RECTÁNGULO</a><br><br>
<a href="AP1-4/circulo.php">CÍRCULO</a><br><br>

</body>
</html>

<?php

/*$areaTriangulo = area_triangulo(5, 7);
$areaCirculo = area_circulo(4);
$areaRectangulo = area_rectangulo(7, 4);

/*echo "El área del <b>triángulo</b> es de: " . $areaTriangulo . "cm<br>";
echo "El área del <b>rectángulo</b> es de: " . $areaRectangulo . "cm<br>";
echo "El área del <b>circulo</b> es de: " . $areaCirculo . "cm<br>";*/

function area_triangulo($base, $altura){
    $areaT = ($base * $altura)/2;
    return "El área del <b>triángulo</b> es de: " . $areaT . "cm.<br>";
}

function area_circulo($radio){
    $areaC = pi() * pow($radio, 2);
    return $areaC;
}

function area_rectangulo($base, $altura){
    $areaR = $base * $altura;
    return $areaR;
}

?>