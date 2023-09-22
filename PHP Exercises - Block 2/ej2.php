<?php

$row=10;
$col=6;

echo "<table>";
for($i=0;$i<$row;$i++){
    echo "<tr>";
    for($j=0;$j<$col;$j++){
        echo "<td style='border:black solid 1px'>+</td>";
    }
    echo "</tr>";
}
echo "</table>";



?>