<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
<table class="table table-border shadow text-center table-striped">
<tr>
<th>post id</th>
<th>post title</th>
<th>post author</th>
<th>post delete</th>
<th>post edit</th>
</tr>
@foreach($employees as $employee)
<tr>
<td>{{$employee->id}}</td>
<td>{{$employee->post_title}}</td>
<td>{{$employee->post_author}}</td>
<td><a href="/delete/{{$employee->id}}" class="btn btn-danger">delete</a></td>
<td><a href="/edit/{{$employee->id}}" class="btn btn-success">edit</a></td>


</tr>
@endforeach

</table>
</div>
</body>
</html>
