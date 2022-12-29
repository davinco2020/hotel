<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!--  -->
    <form method="post" action="{{route('save.post')}}">
        @csrf
Post: <br> <input type="text" name="name" value=""> <br>
Description : <br> <textarea name="description"></textarea><br>
<button>Submit</button>    
</form>
</body>
</html>