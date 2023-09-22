<?php
$cumpleaños=array("enero"=>array( "Ainara", "Xabi") , "febrero"=>array("febrero","Irati", "Ibai"), "marzo"=>array("marzo","Juan","María ","Alejandro"), "abril"=>array(    "Ana",
"abril","Carlos", "María"), "mayo"=>array(    "Marta" ,"Sergio" ,"Isabel" ) , "junio"=>array(    "Andrés" ,"Natalia" ,"Gabriel" ,"Susana" ,"Javier" ) , "julio"=>array(    "Carmen" ,"Rodrigo" ) , "agosto"=>array() , "septiembre"=>array() , "octubre"=>array() , "noviembre"=>array() , "diciembre"=>array());
function agregarCumple($cumpleaños, $mes, $nombre) {
    $cumpleaños[$mes][] = $nombre;
    return $cumpleaños;
}
function contPersonas($cumpleaños){
    $contNombres=0;
    foreach ($cumpleaños as $mes => $nombre) {
        $contNombres+=count($nombre);
        
    }
    echo "<p>En esta lista hay $contNombres nombres inscritos</p>";
}

$nombre="Leire";
$mes="Diciembre";
$cumpleaños=agregarCumple($cumpleaños, strtolower($mes), $nombre);
contPersonas($cumpleaños);

        foreach ($cumpleaños as $mes => $nombre) {
            echo "<p style=' color: blue'>$mes</p>";
            echo "<p>" . implode("<br> ", $nombre) . "</p>";
            // echo "<p>" . count($nombre) . "</p>";
            ;
        }
?>
