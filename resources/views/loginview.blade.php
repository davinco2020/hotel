<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to the Davinco</h1>
    {{-- @foreach ($dave as $dave)
        <p>{{ $dave }}</p>
    @endforeach --}}
    {{-- @for($a=0; $a<=10; $a++)
    <h2>{{ $a  }}  </h2>
        
    @endfor
    --}}
    @foreach ($name as $eagle )
       <h3> {{ $eagle }} </h3>
    @endforeach
</body>
</html>