<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Name</title>
</head>
<body>
    <form action="{{routoe('age.getForm'}}" method="post">
    @csrf
        <h2> Hello {{ $name ." ". $lastname}}</h2>
        <p>Age <input type="text" name="age"></p>
        <input type="hidden" name="name" value="{{$name}}">
        <input type="hidden" name="lastname" value="{{$lastname}}">
        <button type="submit">Send</button>
    </form>
</body>
</html>