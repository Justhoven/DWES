<form method="POST" action="">
    <label for="circulo"><b>Elige la medida del Círculo:</b></label><br><br>
    <label for="radio">Radio: </label>
    <input type="text" name="radio" required><br><br>
    <input type="submit" value="Enviar">
</form>


<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $radio = $_POST["radio"];

    if(is_numeric($radio)){
        echo area_circulo($radio);
    } else {
        echo "Por favor, introduce un número entero.";
    }
}

function area_circulo($radio){
    $areaC = pi() * pow($radio, 2);
    return "<b>Radio:</b> " . $radio . "cm.<br><br>
            El área del <b>círculo</b> es de: " . $areaC . "cm.<br>";
}

?>