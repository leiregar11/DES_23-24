<?php
$num1=6;
$num2=4;
$num3=5;


if($num1<$num2 && $num2<$num3){
    echo$num3;
}elseif($num1<$num2 && $num2>$num3){
    echo $num2;
}else{
    echo $num1;

}
?>