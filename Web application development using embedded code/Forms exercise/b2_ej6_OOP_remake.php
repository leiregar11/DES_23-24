<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
class Birthday {
    private $birthdays = array(
        "january" => array("Ainara", "Xabi"),
        "february" => array("Pedro", "Irati", "Ibai"),
        "march" => array("Ander", "Juan", "María", "Alejandro"),
        "april" => array("Ana", "Iker", "Carlos", "María"),
        "may" => array("Marta", "Sergio", "Isabel"),
        "june" => array("Andrés", "Natalia", "Gabriel", "Susana", "Javier"),
        "july" => array("Carmen", "Rodrigo"),
        "august" => array(),
        "september" => array(),
        "october" => array(),
        "november" => array(),
        "december" => array()
    );

    function __construct() {
    }

    function addBirthday($name, $month) {
        $month = strtolower($month);
        if (array_key_exists($month, $this->birthdays)) {
            $this->birthdays[$month][] = $name;
        } else {
            echo "Invalid month.";
        }
    }

    function countPeople() {
        $countNames = 0;
        foreach ($this->birthdays as $month => $names) {
            $countNames += count($names);
        }
        echo "<p>There are $countNames names in this list</p>";
    }

    function showBirthdays() {
        foreach ($this->birthdays as $month => $names) {
            echo "<p style='color: blue'>$month</p>";
            echo "<p>" . implode("<br> ", $names) . "</p>";
        }
    }
}

$birthday = new Birthday();

if(isset($_GET["name"]) && isset($_GET["month"])) {
    $birthday->addBirthday($_GET["name"], $_GET["month"]);
}
?>

<form method="get" action="">
    <label>Name:<input type="text" name="name"></label>
    <label>Month:<input type="text" name="month"></label>
    <input type="submit" name="send" value="Send">
    
</form>

<?php
$birthday->showBirthdays();
$birthday->countPeople();
?>
</body>
</html>


