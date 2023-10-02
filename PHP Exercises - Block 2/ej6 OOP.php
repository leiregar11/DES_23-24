<?php


class Cumple{
  private  $cumpleaños=array("enero"=>array( "Ainara", "Xabi") , "febrero"=>array("Pedro","Irati", "Ibai"), "marzo"=>array("Ander","Juan","María ","Alejandro"), "abril"=>array(    "Ana",
"Iker","Carlos", "María"), "mayo"=>array(    "Marta" ,"Sergio" ,"Isabel" ) , "junio"=>array(    "Andrés" ,"Natalia" ,"Gabriel" ,"Susana" ,"Javier" ) , "julio"=>array(    "Carmen" ,"Rodrigo" ) , "agosto"=>array() , "septiembre"=>array() , "octubre"=>array() , "noviembre"=>array() , "diciembre"=>array());

private $mes;
private $nombre;
function __construct(){
    

}

function agregarCumple($mes, $nombre) {
    $this->cumpleaños[$mes][] = $nombre;
}
function contPersonas(){
    $contNombres=0;
    foreach ($this->cumpleaños as $mes => $nombre) {
        $contNombres+=count($nombre);
        
    }
    echo "<p>En esta lista hay $contNombres nombres inscritos</p>";
}
function mostrarCumples(){
    foreach ($this->cumpleaños as $mes => $nombre) {
            echo "<p style=' color: blue'>$mes</p>";
            echo "<p>" . implode("<br> ", $nombre) . "</p>";
            // echo "<p>" . count($nombre) . "</p>";
            ;
        }
}
}




$p1= new Cumple();
$p1->agregarCumple( "enero", "Leire");
$p1->contPersonas();
$p1->mostrarCumples();

        
?>
