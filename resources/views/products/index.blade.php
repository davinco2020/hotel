<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome Products</h1>
    <h3>{{ $products }}</h3>
    {{-- @for ($a=1, $a<10, $a++)
     <h3>$a</h3>
        
    @endfor --}}
    @foreach ($name as $eagle)
        {{ $eagle }}
    @endforeach
</body>
</html>