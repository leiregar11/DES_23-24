<?php

$lista = array("pepe","federico","juan","ana");
// $filtro = array_filter($lista,
// function($n) { return (strlen($n) == 4); });
$filtro=[];
function filter($lista){
    foreach($lista as $nombre){
        if(strlen($nombre)==4){
            $filtro[]=$nombre;
        }
    }
    return $filtro;
}
$filtro=filter($lista);
print_r( $filtro);
?>