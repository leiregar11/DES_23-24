
<pre>
<?php
//en la teoria  a partir de la pg 52 de introduccion a php

// ● Para declarar un array:
// $a = array ( );
// $a = array (7,2,5);
// $b = array ("Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado",
// "Domingo");
// // $a = [];
// $c = [1,2,3];
// $d = ["Lunes", "Martes", "Miércoles", "Jueves", "Viernes", "Sábado", "Domingo"];


// print_r($b);
//  echo "<br><br>";

// var_dump($c); //muestra de que tipo es el contenido del array
// echo "<br><br>";



// //ejemplo pag 59
// $a[0] = 0;
// $a[1] = "uno";
// $a["tres"] = 3;
// $a[] = "dos";

// var_dump($a);


// //ejemplo pag 63
// $a=array(0,1,2,3,4,5);
// $suma = 0;
// for ($i = 0; $i <= 5; $i++) {
//     $suma += $a[$i];
// }
// // foreach ($a as $valor) {
// // $suma += $valor;
// // }
// print_r($suma);

// ● Algunas de las más usadas relacionadas con las variables: 
//      pg: 67, 68, 69

// $var;
// if(is_null ($var)){
//     print(" null: true");
// }else{
//     print(" null: false");
// }

// if(isset ($var)){
//     print(" isset: true");
// }else{
//     print(" isset: false");
// }

// if(empty ($var)){
//     print(" empty: true");
// }else{
//     print(" empty: false");
// }
//      pg: 68

$str="Hola que tal";
$cad2="Hola que talp";
print_r(strlen ($str));
$a=array("0","1","2","3","4","5");

var_dump(implode(",", $a));
foreach ($a as $line){


    $tds[] = explode(" ",$line);

}
print_r($tds);
print_r(strcmp ($str,$cad2));
var_dump(strstr($str,"o"));//mal en los apuntes pg 68

//      pg: 69

// $arr=array(0,1,2,8,4,5);
// $cla=2;
// ksort ($arr);
// print_r( $arr);
// krsort ($arr);
// print_r( $arr);

// sort ($arr);
// print_r( $arr);

// rsort ($arr);
// print_r( $arr);

// print_r(array_values ($arr));

// print_r(array_keys ($arr)); 

// print_r(count ($arr));


?>

</pre>
