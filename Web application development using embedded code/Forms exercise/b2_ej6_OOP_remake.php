<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
class Birthday {
    private $validMonths = ["january", "february", "march", "april", "may", "june", "july", "august", "september", "october", "november", "december"];
    private $birthdays = [];

    function __construct($nBirthdays="") {
        if($nBirthdays != ""){
            $this->birthdays = unserialize($nBirthdays);
        }
    }

    function addBirthday($name, $month) {
        $month = strtolower($month);
        if (in_array($month, $this->validMonths)) {
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
    
    function getBirthdays(){
        return serialize($this->birthdays);
    }
}

$birthday = new Birthday($_GET["hidden"]);

if(isset($_GET["name"]) && isset($_GET["month"])) {    
    $birthday->addBirthday($_GET["name"], $_GET["month"]);
}
?>

<form method="get" action="">
    <label>Name:<input type="text" name="name"></label>
    <label>Month:<input type="text" name="month"></label>
    <input type="submit" name="send" value="Send">
    <input type="hidden" name="hidden" value="<?php echo htmlspecialchars($birthday->getBirthdays(), ENT_QUOTES, 'UTF-8'); ?>">
</form>

<?php

$birthday->countPeople();
$birthday->showBirthdays();

?>

</body>
</html>
