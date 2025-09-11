<form method="POST" action="">
    <label for="rectangulo"><b>Elige las medidas del Rectángulo:</b></label><br><br>
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

    if(is_numeric($base) && $base == $altura){
        echo "<b>Base:</b> " . $base . "cm.<br>
        <b>Altura:</b> " . $altura . "cm.<br><br>
        Esas medidas son de un CUADRADO, <b>ignorante de la vida...</b>";
    }elseif(is_numeric($base) && is_numeric($altura)){
        echo area_rectangulo($base, $altura);
    }else{
        echo "Por favor, introduce números enteros.";
    }
}

function area_rectangulo($base, $altura){
    $areaR = $base * $altura;
    return "<b>Base:</b> " . $base . "cm.<br>
            <b>Altura:</b> " . $altura . "cm.<br><br>
            El área del <b>rectángulo</b> es de: " . $areaR . "cm.<br>";
}

?>