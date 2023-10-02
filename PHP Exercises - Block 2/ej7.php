<?php
$num=2;
$power=4;
function power($num,$power= 2){
    if ($exponent == 0) {
        return "1<br>";
    } elseif ($exponent > 0) {
        $result = 1;
        for ($i = 0; $i < $exponent; $i++) {
            $result *= $base;
        }
        return $result."<br>";
    } else {
        // Handle negative exponents by taking the reciprocal power
        $result = 1;
        for ($i = 0; $i < abs($exponent); $i++) {
            $result /= $base;
        }
        return $result."<br>";
    }

    // return ($num**$power);
    // return pow($num,$power);
}

echo power($num);
echo power($num,$power);


?>