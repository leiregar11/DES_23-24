<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Name</title>
</head>
<body>
    <form action="{{routoe('name.getForm'}}" method="post">
    @csrf
        <p>Name <input type="text" name="name"></p>
        <p>Lastname <input type="text" name="lastname"></p>
        <button type="submit">Send</button>
    </form>
</body>
</html>