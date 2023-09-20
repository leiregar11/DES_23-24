<?php
$meses=array("enero"=>31 , "febrero"=>28, "marzo"=>31, "abril"=>30, "mayo"=>31 , "junio"=>30 , "julio"=>31 , "agosto"=>31 , "septiembre"=>30 , "octubre"=>31 , "noviembre"=>30 , "diciembre"=>31);
// print_r($meses);

echo "<table style='border:black solid 1px'>";
echo "<tr>";
         echo "<td style='border:black solid 1px'>Indice</td>";
         foreach(array_keys($meses) as $mes){
            echo "<td style='border:black solid 1px'>$mes</td>";
        }
    echo "</tr>";
    
   echo "<tr>";
   
    echo "<td style='border:black solid 1px'>Valor</td>";
   
   
    foreach($meses as $dias){
        echo "<td style='border:black solid 1px'>$dias</td>";
    }
    echo "</tr>";

echo "</table>";
?>