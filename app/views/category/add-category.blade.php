<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Homepage</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

@extends ('layouts.main')
@section('main-content')
<br><br>
        <h3>Tạo mới danh mục</h3>
        <form action="./save-add-category" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên danh mục</label>
                        <input type="text" name="c_name" class="form-control">
                     
                        <p style="color: red">{{$errorMsg}}</p>
                      
                    </div>
                  
                <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./categories" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>
    <br><br><br><br>
    @endsection
</body>
</html>