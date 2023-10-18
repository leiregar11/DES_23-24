<!DOCTYPE html>
<html>
<head>
<title>FormPerson</title>
</head>
<body>
<?php
    class Person{
        private $name;
        private $lastname;
        public function __construct($name,$lastname) {
            $this->name = $name;
            $this->lastname = $lastname;
        }
        public function getName(){
            return $this->name;
        }
        public function getLastname(){
            return $this->lastname;
        }
        public function __toString(){
            return " ".($this->name)." ".($this->lastname);
        }
    }
    class PersonManager{
        private $names;
        public function __construct($names="") {
            $this->names = $names;
        }
        public function addPerson($person){
            $this->names.=$person->__toString();
        }
        public function __toString(){
            return $this->names;
        }
    }

    if(isset($_GET["name"]) && isset($_GET["lastname"])){
        $person = new Person($_GET["name"], $_GET["lastname"]);
        $personManager = new PersonManager($_GET["hidden"]);
        $personManager->addPerson($person);
    }
?>
    <form method="get" action="FormsPerson.php">
        <label>Name:<input type="text" name="name"></label>
        <label>Lastname:<input type="text" name="lastname"></label>
        <input type="submit" name="send" value="Send">
        <input type="hidden" name="hidden" 
            value="<?php echo htmlspecialchars($personManager->__toString()); ?>">
        
    </form>
    <div>
    <?php
    if(isset($personManager)){
        echo "Nombres: " . htmlspecialchars($personManager->__toString());
    }
    ?>
</div>
</body>
</html>