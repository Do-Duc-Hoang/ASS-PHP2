<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
@extends ('layouts.main')
@section('main-content')
<br><br>
    <div class="container">
         <table>
           <thead>
             <th>ID</th>
             <th>Name</th>
             <th colspan="2">
                <a href="./add-category" class="btn btn-success">Add new</a>
            </th>
           </thead>
           <tbody>
             @foreach ($listItem as $ca)
                 <tr>
                    <td>{{$ca->id}}</td>
                    <td>{{$ca->c_name}}</td> 
                    <td><a href="./edit-category?id={{$ca->id}}">Sửa</a></td>
                  <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./delete-category?id={{$ca->id}}">Xóa</a></td>               
                 </tr>
             @endforeach
           </tbody>
         </table>
        <p style="color: red;">{{$msg}}</p>
    </div>
    <br><br><br><br>
    @endsection
   
</body>
</html>