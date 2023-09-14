<?php
$total_compra=30.5;
$tipo_compra="pets";
// $tipo_compra="clothes";
$shipping=0;

if($total_compra<19){
    if($tipo_compra=="pets"){
    echo "Unable to send";
    }
    elseif( $tipo_compra=="clothes"){
        echo "Shipping costs are 9 euros";
        $shipping=9;
    }
}elseif($total_compra>=19 && $total_compra<80){
    echo "The shipping costs are 9 euros";
    $shipping=9;
    
    if($tipo_compra=="pets"){
        $total_compra=$total_compra+($total_compra*0.10)+$shipping;
    }else{
        $total_compra=$total_compra+($total_compra*0.21)+$shipping;
    }
}else{
    echo "The shipping costs are free";
    if($tipo_compra=="pets"){
        $total_compra=$total_compra+($total_compra*0.10);
    }else{
        $total_compra=$total_compra+($total_compra*0.21);
    }
}
echo "Final priece ="$total_compra;
?>