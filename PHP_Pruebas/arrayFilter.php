<?php

$lista = array("pepe","federico","juan","ana");
$filtro = array_filter($lista,
function($n) { return (strlen($n) == 4); });
$filtro=[];
// function filter($lista){
//     foreach($lista as $nombre){
//         if(strlen($nombre)==4){
//             $filtro[]=$nombre;
//         }
//     }
//     return $filtro;
// }

function array_filter($lista ,$function){
    $result=array();
    foreach($lista as $value){
        if($function($value)){
            $result[]=$value;
        }
    }
    return $result;
}

print_r( $filtro);
?>