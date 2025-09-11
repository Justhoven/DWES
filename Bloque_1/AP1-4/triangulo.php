<form method="POST" action="">
    <label for="triangulo"><b>Elige las medidas del Triángulo:</b></label><br><br>
    <label for="base">Base: </label>
    <input type="text" name="base" required><br>
    <label for="altura">Altura: </label>
    <input type="text" name="altura"required><br><br>
    <input type="submit" value="Enviar">
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $base = $_POST["base"];
    $altura = $_POST["altura"];

    if(is_numeric($base) && is_numeric($altura)){
        echo area_triangulo($base, $altura);
    } else {
        echo "Por favor, introduce números enteros";
    }
}

function area_triangulo($base, $altura){
    $areaT = ($base * $altura)/2;
    return "<b>Base:</b> " . $base . "cm.<br>
            <b>Altura:</b> " . $altura . "cm.<br><br>
            El área del <b>triángulo</b> es de: " . $areaT . "cm.<br>";
}

?>