<?php
// https://www.php.net/manual/es/language.oop5.basic.php

    class Person{
        private $dni;
        private $firstName;
        private $lastName;

        public function __construct( $dni, $firstName, $lastName) {
            $this->dni = $dni;
            $this->firstName = $firstName;
            $this->lastName = $lastName;
        }
        public function getDni() {
            return $this->dni;
        }

        public function getFirstName() {
            return $this->firstName;
        }

        public function getLastName() {
            return $this->lastName;
        }

        // Métodos de escritura
        public function setDni($dni) {
            $this->dni = $dni;
        }

        public function setFirstName($firstName) {
            $this->firstName = $firstName;
        }

        public function setLastName($lastName) {
            $this->lastName = $lastName;
        }

        public function getFullName() {
            return "Person: " . $this->firstName . " " . $this->lastName."<br>";
        }
    }


    class User extends Person {
        private $points;

        public function __construct($dni, $firstname, $lastname, $points) {
            parent::__construct($dni, $firstname, $lastname);
            $this->points = $points;
        }

        public function getPuntos() {
            return $this->points;
        }

        public function setPuntos($points) {
            $this->points = $points;
        }

        public function getFullName() {
            // return "User: " . $this->$firstname . " " . $this->lastname."<br>";
            return "User: " .  parent::getFirstName() . " " .  parent::getLastName()."<br>";
        }

        public function checkPoints() {
            if ($this->points < 100) {
                return "You have less than 100 points.<br>";
            } else {
                return "You have 100 or more points.<br>";
            }
        }
    }

    $person = new Person("123456789", "John", "Doe");
    echo $person->getFullName();
    $user = new User("987654321", "Alice", "Smith", 50);
    echo $user->getFullName();
    echo "Points: " . $user->getPuntos(); 
    echo $user->checkPoints();

?>