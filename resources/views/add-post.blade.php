<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Post</title>
</head>
<body>
    <form action="{{route('save.post')}}" method='post'>
        
        @csrf
      Post  <input type="text" name="name" value=" " /><br>
        Description: <br><textarea name="description"></textarea><br>
    <button>submit</button>
    </form>
    
</body>
</html>