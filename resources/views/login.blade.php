<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Welcome to this site </h1>
    <form method="post" action="users">
        @csrf
        <h2>Username: <input type="text" name='username' /></h2>
        <span style='color:red;'>@error('username'){{$message}}@enderror</span>
        <h2>Username: <input type="password" name='password' /></h2>
        <button>Submit</button>

    </form>
</body>
</html>