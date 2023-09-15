<pre>
<?php
//en la teoria  a partir de la pg 52 de introduccion a php



// ● Para declarar un array:
// $a = array ( );
// $a = array (7,2,5);
$b = array ("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado",
"Domingo");
// $a = [];
$c = [1,2,3];
$d = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];


print_r($b);
 echo "<br><br>";

var_dump($c); //muestra de que tipo es el contenido del array
echo "<br><br>";



//ejemplo pag 59
$a[0] = 0;
$a[1] = "uno";
$a["tres"] = 3;
$a[] = "dos";

var_dump($a);

?>

</pre>
