<!-- funciones a partir de la pg 70 -->


<?php
// function suma ($a, $b) {
// return $a + $b;
// }
// $var1=24;
// $var2=7;
// echo "$var1 + $var2 = ".suma ($var1,$var2);


// function saludar ($nombre = 'user') {
//     echo "Hola $nombre! <br>";
//     }
//     saludar ();
//     saludar ("Maider");

//     function hacer_yogur( $sabor,$tipo = "acidófilo") {
//         return "Hacer un tazón de yogur $tipo de $sabor.\n";
//         }
//         echo hacer_yogur("frambuesa");


//         function duplicar ($a) {
//             $a = $a * 2;
//             }
//             $var = 4;
//             duplicar ($var);
//             echo "$var<br>";

 function mate($num1,$num2,$ope){
    switch($ope){
        case "suma":
            echo ($num1+$num2)."<br>";
            break;
        case "resta":
            echo ($num1-$num2)."<br>";
            break;
        case "multi":
            echo ($num1*$num2)."<br>";
            break;
        case "div":
            echo ($num1/$num2)."<br>";
            break;
        default:
            echo "operacion no valida";
            break;
    }
 }
 $num1=4;
 $num2=2;
 $ope="suma";
 mate($num1,$num2,$ope);
 $ope="resta";
 mate($num1,$num2,$ope);
 $ope="multi";
 mate($num1,$num2,$ope);
 $ope="div";
 mate($num1,$num2,$ope);

?>