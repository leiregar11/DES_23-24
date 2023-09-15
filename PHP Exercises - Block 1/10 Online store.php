<?php
$total_compra=30.5;
$tipo_compra="pets";
// $tipo_compra="clothes";
$shipping=0;


function calcPrice($total_compra,$tipo_compra){

    if($tipo_compra=="pets"){
        return $total=$total_compra+($total_compra*0.10);
        }
        else{
            return $total=$total_compra+($total_compra*0.21);
        }
}

if($total_compra<19){
    if($tipo_compra=="pets"){
    echo "Unable to send";
    }
    else{
        echo "Shipping costs are 9 euros";
        $total=calcPrice($total_compra,$tipo_compra)+9;
    }
}elseif($total_compra<80){
    echo "The shipping costs are 9 euros";
    $shipping=9;
    
    if($tipo_compra=="pets"){
        $total=calcPrice($total_compra,$tipo_compra)+$shipping;
    }else{
        $total=calcPrice($total_compra,$tipo_compra)+$shipping;
    }
}else{
    echo "The shipping costs are free";
    if($tipo_compra=="pets"){
        $total=calcPrice($total_compra,$tipo_compra);
    }else{
        $total=calcPrice($total_compra,$tipo_compra);
    }
}
echo "Final priece = ".round($total,2);
?>