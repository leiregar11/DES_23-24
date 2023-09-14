<?php
$sales=9000;
$commission;

if($sales<10000){

}

switch($sales){
    case $sales<10000:
        $commission=$sales*0.05;
        break;
    case $sales>=10000 && $sales<20000:
        $commission=$sales*0.08;
        break;
    case $sales>=20000 && $sales<40000:
        $commission=$sales*0.10;
        break;
    case $sales>=40000:
        $commission=$sales*0.13;
        break;
    
}
echo $commission;
?>