<?php

$posicion = [
    1 => "primero",
    3 => "segundo",
    5 => "tercero",
    7 => "cuarto",
    9 => "quinto",
    11 => "sexto",
];

$cont = 1;
$suma = 0;


foreach($posicion as $key=>$value){
    if($cont%2 == 1){
        echo "Estás en una posición impar <br>";

    }else{
        echo "Estás en una posición par <br>";

    }

    //No entiendo lo de asignar a las variables impar y par el valor falso o verdadero...

    $suma += $key;

    if($suma < 5){
        echo "La suma de claves es $suma <br><br>";
    }else{
        echo "La suma de claves es $suma <br>";
    }


    if($suma > 5 && $suma < 10){
        echo "El valor de la suma es mayor que 5 <br><br>";
    }elseif ($suma > 10 && $suma < 20){
        echo "El valor de la suma es mayor que 10 <br><br>";
    }elseif($suma > 20){
        echo "El valor de la suma es mayor que 20 <br><br>";
    }
    $cont++;
}

?>