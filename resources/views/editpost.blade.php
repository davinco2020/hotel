<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('update.post')}}">
        @csrf
        <input type="hidden" name="id" value="{{$post->id}}" />
        Post: <input type="text" name="name" value="{{$post->name}}"/><br><br>
        Description<br><textarea name="description" value="">
        {{$post->description}}
        </textarea>
<input type="submit" value="submit" />
    </form>
</body>
</html>