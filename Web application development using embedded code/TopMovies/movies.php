<?php
    class Movie{
        private $name;
        private $isan;
        private $year;
        private $punctuation;
        
        public function __construct($name,$isan,$year,$punctuation){
            $this->name=$name;
            $this->isan=$isan;
            $this->year=$year;
            $this->punctuation=$punctuation;
        }

        public function getName(){
            return $this->name;
        }
        public function getIsan(){
            return $this->isan;
        }
        public function getYear(){
            return $this->year;
        }
        public function getPunctuation(){
            return $this->punctuation;
        }
        public function __toString(){
            return "<td> ".($this->name)."</td> <td> ".($this->isan)."</td><td> ".($this->year)."</td><td> ".($this->punctuation)."</td>";
        }
    
    }
    class Cinema{
        private $films=[];
        public function __construct($films=""){
            $this->films;
        }
        public function addFilm($film){
            $ISAN=$film->getIsan();
            if(!array_key_exists($ISAN,$this->films) && strlen($ISAN)==8){
                if($film->getName()!=""&&$film->getYear()!=""&&$film->getPunctuation()!="")
            }else{
                if(array_key_exists($ISAN,$this->films)){
                    throw new Exception ("The ISAN already exists");
                }else{
                    throw new Exception ("The ISAN must have 8 digits.");
                }
                
            }
            $this->
        }
    }
    if(!isset($_GET["name"]) && !isset($_GET["isan"])){
        echo "Missing data, make sure that at least the name or the ISAN are entered.";
        $personManager = new Cinema($_GET["hidden"]);

    }else{
        
    }

?>
