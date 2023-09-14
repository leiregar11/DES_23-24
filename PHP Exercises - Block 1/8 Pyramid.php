<?php
$base=11;
if($base%2!=0){
    for($j=0;$j<$base;$j++){
        for($v=$base;$v>$j;$v--){
            echo "&nbsp";
        }
        for($i=0;$i<$j;$i++){
        echo"* ";

        }
        
echo"<br>";
    }
}

?>