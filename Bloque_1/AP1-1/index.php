<?php

// localhost:8001/Bloque_1/AP1-1?hola=mundo&clave=valor2&clave2=valor3

/*Este ejercicio no he sabido hacerlo y he tenido que usar ChatGPT.
Estaba planteando mal el GET en el array asociativo.
Yo estaba haciendo $array = [$_GET["hola"]=>["mundo"] o similares...*/

$array = [
    "hola" => $_GET["hola"],
    "clave" => $_GET["clave"],
    "clave2" => $_GET["clave2"]
];

foreach($array as $key => $value){
    echo "Se ha recibido " . $value . " para la clave " . $key . "<br>";
}

/*
    LO MÁS ÓPTIMO SEGUN CHATGPT (y toda la razón que tiene...):

    foreach($_GET as $key => $value){
        echo "Se ha recibido " . $value . " para la clave " . $key . "<br>";
    }

*/
?>


