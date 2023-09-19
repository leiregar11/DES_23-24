<?php

$naturalNumbres=[];
$factorials=[];

for($i=0;$i<10;$i++){
    $factorial=1;
    $naturalNumbres[]=$i;
    for($j=1;$j<=$i;$j++){
        $factorial=$factorial*$j;
        
    }
    $factorials[]=$factorial;
}

print_r($naturalNumbres);
print_r($factorials);


?>