<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body style="background:<?php echo $selectedColor ?>">
<?php
$selectedColor = "";
if(isset($_POST['colors'])){
    $selectedColor = $_POST['colors'];
    setcookie("colors", $selectedColor, time() + 3600, "/"); 
} else if(isset($_COOKIE["colors"])) {
    $selectedColor = $_COOKIE["colors"];
}

$enteredName = "";
if(isset($_POST['name'])){
    $enteredName = $_POST['name'];
    setcookie("name", $enteredName, time() + 3600, "/"); 
} else if(isset($_COOKIE["name"])) {
    $enteredName = $_COOKIE["name"];
}

$selectedLanguage = "";
if(isset($_POST['languages'])){
    $selectedLanguage = $_POST['languages'];
    setcookie("languages", $selectedLanguage, time() + 3600, "/"); 
} else if(isset($_COOKIE["languages"])) {
    $selectedLanguage = $_COOKIE["languages"];
}
?>
    <form>
        <select name="colors">
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
    if (isset($_COOKIE["colors"])) {
        echo "Color: " . $_COOKIE["colors"];
    } else {
        echo "No hay información de color almacenada en las cookies.";
    }
    if (isset($_COOKIE["name"])) {
        echo "Name: " . $_COOKIE["name"];
    } else {
        echo "No hay información de name almacenada en las cookies.";
    }
    if (isset($_COOKIE["languages"])) {
        echo "languages: " . $_COOKIE["languages"];
    } else {
        echo "No hay información de languages almacenada en las cookies.";
    }
    ?>
</body>
</html>