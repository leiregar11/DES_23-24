<?php
function suma ($a, $b) {
return $a + $b;
}
$var1=24;
$var2=7;
echo "$var1 + $var2 = ".suma ($var1,$var2);


function saludar ($nombre = 'user') {
    echo "Hola $nombre! <br>";
    }
    saludar ();
    saludar ("Maider");

    function hacer_yogur($tipo = "acidófilo", $sabor) {
        return "Hacer un tazón de yogur $tipo de $sabor.\n";
        }
        echo hacer_yogur("frambuesa");
?>