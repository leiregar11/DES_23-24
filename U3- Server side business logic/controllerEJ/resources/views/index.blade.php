<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <form action="{{ route('name.form') }}" method="get">
    @csrf
    <button type="submit" >FORM</button>
</form>
<form action="{{ route('age.form') }}" method="get">
    <button type="submit">AGE</button>
</form>




</body>
</html>