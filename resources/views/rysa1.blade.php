<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rysa Lists</title>
</head>
<body>
    <h1>Rysa 2022</h1>
    <table border="2"><tr>
        <th>ID</th>
        <th>Name</th>
        <th>Phone number</th>
        <th>Skill</th>
        <th>Vision</th>
        <th>Mission</th>
        </tr>
@foreach ($info as $data1)
   <tr>
       <td>{{$data1['id']}}</td>
       <td>{{$data1['name']}}</td>
       <td>{{$data1['phonenumber']}}</td>
       <td>{{$data1['skill']}}</td>
       <td>{{$data1['vision']}}</td>
       <td>{{$data1['mission']}}</td>



   </tr>
   @endforeach 
    </table>


</body>
</html>