<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body >

    <form  action="cookie+session.php">
        <select name="color">
            <option value="red">red</option>
            <option value="green">green</option>
            <option value="blue">blue</option>
        </select>
        <p>Name: <input type="text" name="name"></p>
        <select name="languages">
            <option value="php">php</option>
            <option value="java">java</option>
            <option value="JavaScript">JavaScript</option>
        </select>
        <br>
        <input type="submit" value="Send">
    </form>
    <?php
    if (isset($_COOKIE["color"])) {
        echo "Color: " . $_COOKIE["color"];
    } else {
        echo "No hay información de color almacenada en las cookies.";
    }
  
    ?>
</body>
<?php
if (isset($_GET["color"])) {
    if (isset($_GET["color"])) {
        $color = $_GET['color'];
        setcookie("color",$color);
    } else if (isset($_COOKIE["color"])) {
        $color = $_COOKIE['color'];
    }
    echo "<style>
    body{
        background: $color;
    }
    <style>";
}

if (isset($_GET["name"])) {
    session_start();
    $arr[]=$_SESSION["name"];
}


?>
</html>