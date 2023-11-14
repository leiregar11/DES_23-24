<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Mountains in Europe Climbed After 2000:</h2>
<ul>
    @foreach ($mountainsInEurope as $mountain)
        <li>{{ $mountain->name }}</li>
    @endforeach
</ul>

<h2>Tall Mountains or Not in a Range and Not Starting with a Vowel:</h2>
<ul>
    @foreach ($tallOrNotInRange as $mountain)
        <li>{{ $mountain->name }}</li>
    @endforeach
</ul>
</body>
</html>