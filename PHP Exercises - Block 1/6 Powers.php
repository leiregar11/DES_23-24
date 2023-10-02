<?php

$power=3;
$quantity=100;

$i=1;
while($i**$power<=$quantity){
    echo "$i - ".($i**$power)."<br>";
    $i++;
}
?>