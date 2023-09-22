<?php
// https://www.php.net/manual/es/language.oop5.basic.php
class Person{
    public $dni;
    public $firstName;
    public $lastName;

    public function __construct(string $dni,string $firstName, string $lastName) {
        $this->dni = $dni;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
    }


    function fullName(){
        return "Person: $this->firstname . ' ' . $this->lastname";
    }
}

class User extends Person{
    public $points;
    function getPuntos(){
        return $this->points;
    }
    function setPuntos($points) {
        $this->points = $points;
    }
    public function getFullName() {
        return "User: " . parent::getFullName();
    }

}


?>