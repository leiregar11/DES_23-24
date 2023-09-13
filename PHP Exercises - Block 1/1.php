<?php
$floors=5;
$doors=5;

for($i=0;$i<$floors;$i++){
    for($j=0;$j<$doors;$j++){
        echo "[$]";
    }
    echo "<br>";
}
echo "<br> There are ".($floors*$doors)." houses in the community";
?>