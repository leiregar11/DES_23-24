<?php
$num=2;
$power=4;
function power($num,$power= 2){

    return ($num**$power."<br>");
    // return pow($num,$power);
}

echo power($num);
echo power($num,$power);


?>