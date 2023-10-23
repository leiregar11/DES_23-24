<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
@foreach($array as $index => $item)
    @if($index % 2 !== 0)
        <p style="background-color: green;">
        
    @else
        <p>
    @endif       
            {{ $index }}
            {{ $item }}
        </p>
    
@endforeach
</body>
</html>