<?php
class Power{
    private $num;
    private $power;
    
    public function __construct($num,$power=2){
        $this->num=$num;
        $this->power=$power;
    } 
    
    
    public function calculateP(){
    if ($this->power == 0) {
        echo "1<br>";
    } elseif ($this->power > 0) {
        $result = 1;
        for ($i = 0; $i < $this->power; $i++) {
            $result *= $this->num;
        }
        echo $result."<br>";
    } else {
         $result = 1;
        for ($i = 0; $i < abs($this->power); $i++) {
            $result /= $this->num;
        }
        echo $result."<br>";
    }

    // return ($num**$power);
    // return pow($num,$power);
}
}

$n1=new Power(2);
$n1->calculateP();

$n2=new Power(2,1);
$n2->calculateP();

?>