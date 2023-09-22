<?php
    $str = "apple pear lemon watermelon melon";
    $associativeArray=[];
    $palabras = explode(" ", $str);
    foreach ($palabras as $palabra) {
        $longitud = strlen($palabra);
        $associativeArray[$palabra]=$longitud;
    }
    print_r($associativeArray);
?>