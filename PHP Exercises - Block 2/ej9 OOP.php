<?php

class Square{
    private $side;
    function __construct($side){
        if($side>0){
        $this->side=$side;
          
            
        }else{
            throw new Exception ('The given number is negative or equal 0<br>');
        }
    }
    public function areaOfSquare(){
        echo "Area of a esquare with sides $this->side ".($this->side*$this->side)."<br>";
       
    }


}

function createArray(){
    $sides=[];
    for ($j=0; $j < 2; $j++) {
        $sides[]=rand(-10,10);
    }
    return $sides;
}
function hasNegative($sides){
    foreach ($sides as $value) {
        if($value<0){
            return true;
        }
    }
    return false;
}
// $sides=createArray();
$sides=[];
while(!hasNegative($sides)){
    $sides=createArray();
}
foreach ($sides as $value) {

    try{
        $n1=new Square($value);
        $n1->areaOfSquare();

    }catch(Exception $e) {
        echo "Error: " . $e->getMessage();
    }

}



?>