<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Name</title>
</head>
<body>
<form action="{{routoe('index'}}" method="post">
    @csrf
        <h2> Hello {{ $name ." ". $lastname}}</h2>
        <h2> Your age is: {{ $age }}</h2>
        
        <button type="submit">Back</button>
    </form>
</body>
</html>