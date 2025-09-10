<?php

// localhost:8001/Bloque_1/AP1-2?hola=mundo&clave=2&clave2=valor3&dato=null

/* Tras buscar en la IA el AP1-1, este sí supe hacerlo (tuve que buscar las funciones en google).
Pero me detectaba null (en la URL) como string...
Así que he tenido que ponerlo como antes del is_string para filtrarlo y ponerlo entre comillas
No se si es un parche o es la solución, pero funciona*/

$array = [
    "hola"=>$_GET["hola"],
    "clave"=>$_GET["clave"],
    "dato"=>$_GET["dato"]
];

foreach($array as $key=>$value){
    if(is_numeric($value)){
        echo "Se ha recibido un número <br>";
    }elseif($value == "null"){
        echo "No se ha recibido ningún dato o es valor nulo <br>";
    }elseif(is_string($value)) {
        echo "Se ha detectado una cadena de caracteres <br>";
    }
}
?>