A form to get the name of the user:
<!DOCTYPE html>
<html>
<head>
<title>From example</title>
<meta charset = “UTF-8”>
</head>
<body>
<form >
<p>Name: <input type="text" name="firstName"></p>
<p><input type="submit" value="Enviar"></p>
</form>
<?php
echo "Your name is ".($_GET['firstName']);
?>

</body>
</html>
