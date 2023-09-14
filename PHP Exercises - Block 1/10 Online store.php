<?php
$total_compra=30;
// $tipo_compra="pets";
$tipo_compra="clothes";


if($total_compra<19){
    if($tipo_compra=="pets"){
    echo "Unable to send";
    }
    elseif( $tipo_compra=="clothes"){
        echo "Shipping costs are 9 euros";
    }
}elseif($total_compra>=19 && $total_compra<80){
    echo "The shipping costs are 9 euros";
}else{
    echo "The shipping costs are free";
}
?>