<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border='2'>
        <tr>
            
                <th>ID</th>
                <th>Name</th>
                <th>Description</th>
                <th>Operations</th>
                

            
        </tr>
        @foreach ($posts as $post)

        <tr>
            
            <td>{{$post->id}} </td>
            <td>{{$post->name}}  </td>
            <td>{{$post->description}}    </td>
            <td>
                <a href="/delete/{{$post->id}}">Delete</a>
                <a href="/edit/{{$post->id}}">Edith</a>
        
        </td>

            
        </tr>
        @endforeach
    </table>
</body>
</html>