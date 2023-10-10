<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form >
Name: <input type="text" name="name" >

E-mail: <input type="text" name="email" >

Website: <input type="text" name="website" >

Comment: <textarea name="comment" rows="5" cols="40"></textarea>

Gender:
<input type="radio" name="gender"

value="female">Female
<input type="radio" name="gender"

value="male">Male
<input type="radio" name="gender"

value="other">Other</input>
<input type="submit" value="Enviar"></p>
</form>
<?php 
echo "Your name is ".($_GET['name']);
echo "Your email ".($_GET['email']);
echo ($_GET['website']);
echo "Comment: ".($_GET['comment']);
    if (($_GET['gender']) && ($_GET['gender'])=="female") echo "Gender: female"; 
    if (($_GET['gender']) && ($_GET['gender'])=="male") echo "Gender: male";
    if (($_GET['gender']) && ($_GET['gender'])=="other") echo "Gender: Other";
    
    


?>
</body>
</html>