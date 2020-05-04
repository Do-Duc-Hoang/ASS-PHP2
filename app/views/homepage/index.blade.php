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
    <p>{{$msg}}</p>
    <table>
         <thead>
           <th>ID</th>
           <th>Name</th>
           <th>Price</th>
           <th>Image</th>
           <th>Des</th>
           <th>Detail</th>
           <th>Cate_id</th>
           <th colspan="2">
                <a href="./add-product" class="btn btn-success">Add new</a>
            </th>
         </thead>
         <tbody>
            @foreach ($listItem as $pro)
                <tr>  
                  <td>{{$pro->id}}</td>
                  <td>{{$pro->p_name}}</td>
                  <td>{{$pro->p_price}}</td>
                  <td><img src="{{$pro->image}}" class="img-avatar" width="100"></td>
                  <td>{{$pro->p_description}}</td>
                  <td>{{$pro->p_detail}}</td>
                  <td>{{$pro->cate_id}}</td>
                  <td><a href="./edit-product?id={{$pro->id}}">Sửa</a></td>
                  <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./delete-product?id={{$pro->id}}">Xóa</a></td>
                
                </tr>
            @endforeach
         </tbody>
    </table>
    </div>
    <br><br><br><br>
    @endsection
</body>
</html>