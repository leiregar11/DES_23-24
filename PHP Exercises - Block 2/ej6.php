<?php
$cumpleaños=array("enero"=>array("Enero", "Ainara", "Xabi") , "febrero"=>array("febrero","Irati", "Ibai"), "marzo"=>array("marzo","Juan","María ","Alejandro"), "abril"=>array(    "Ana",
"abril","Carlos", "María"), "mayo"=>array(    "Marta" ,"Sergio" ,"Isabel" ) , "junio"=>array(    "Andrés" ,"Natalia" ,"Gabriel" ,"Susana" ,"Javier" ) , "julio"=>array(    "Carmen" ,"Rodrigo" ) , "agosto"=>array() , "septiembre"=>array() , "octubre"=>array() , "noviembre"=>array() , "diciembre"=>array());
function agregarCumple($cumpleaños, $mes, $nombre) {
    $cumpleaños[$mes][] = $nombre;
    
    echo count($cumpleaños[$mes]);
}


$nombre="paula";
$mes="marzo";
agregarCumple($cumpleaños, strtolower($mes), $nombre);







echo "<table style='border:black solid 1px'>";
echo "<tr>";
         foreach(array_keys($cumpleaños) as $mes){

            echo "<td style='border:black solid 1px; color: blue'>$mes</td>";
            foreach($mes as $nombre){
                echo "<tr>";
                echo "<td style='border:black solid 1px'>$nombre</td>";
                echo "</tr>";
            }
        }
        
// foreach($cumpleaños as $mes){
         
//         foreach($mes as $nombre){
//             echo "<tr>";
//             echo "<td style='border:black solid 1px'>$nombre</td>";
//             echo "</tr>";
//         }
        
//     }
    echo "</tr>";
    
  
   
  
   
   
 
    

echo "</table>";
?>
