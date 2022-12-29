<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Oghara Rysa </title>
</head>
<body>
    <h1>Ethiope West RYSA</h1>
    <form method="post" action="send">
        @csrf
    <input type="text" placeholder="your Name" name="name" />
    <input type="text" placeholder="phone number" name="phonenumber" />
    <input type="text" placeholder="skill" name="skill" /><br> <br>
    <input type="text" placeholder="your Vision" name="vision" />
    <input type="text" placeholder="your Mission" name="mission" />
    <button> Submit</button><button><a href="/info">View</a></button>
<button><a href="/rysa1">Rysa List </a></button>


    </form>
</body>
</html>