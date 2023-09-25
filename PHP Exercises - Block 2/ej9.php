<?php
$side=[];
for ($i=0; $i < 5; $i++) { 
    $side[]=random_int(-10,10);
}


function areaOfSquare($s){
    if($s>0){
        return "Area of a esquare with sides $s ".($s*$s)."<br>";
    }else{
        throw new Exception ('The given number is negative or equal 0<br>');
    }
}
// print_r($side);
foreach ($side as $key => $value) {
    try{

        echo  areaOfSquare($value);
    }catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }
} 

?>