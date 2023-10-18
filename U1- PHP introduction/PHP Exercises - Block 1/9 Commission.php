<?php
$sales=123456;
$commission;

if($sales<10000){

}

switch($sales){
    case $sales<10000:
        $commission=$sales*1.05;
        break;
    case $sales<20000:
        $commission=$sales*1.08;
        break;
    case $sales<40000:
        $commission=$sales*1.10;
        break;
    case $sales>=40000:
        $commission=$sales*1.13;
        break;
    
}
echo $commission;
?>