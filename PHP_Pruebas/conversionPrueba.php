<!-- Cuando se espera un tipo de dato y se recibe otro, se aplican unas
reglas de conversión. -->
<?php
$var1 = 5;
$var2 = 2.5;
echo "<p>El valor de var1 es $var1</p>";
echo "<p>El valor de var2 es ".$var2."</p>";
echo "La suma de las dos variables es ".($var1+$var2)."</p>";
echo "La suma de las dos variables es ".floor($var1+$var2)."</p>";
?>