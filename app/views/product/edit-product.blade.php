<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cập nhật sản phẩm</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>
<body>

    
        {{-- query string --}}
        {{-- form data --}}
        @extends ('layouts.main')
@section('main-content')
<br><br>
        <h3>Edit sản phẩm</h3>
        <form action="./save-edit-product?id={{$product->id}}" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="">Tên sản phẩm</label>
                        <input type="text" name="p_name" class="form-control" value="{{$product->p_name}}">
                    </div>
                    <div class="form-group">
                        <label for="">Danh mục</label>
                        <select name="cate_id" class="form-control">
                            @foreach ($category as $ca)
                            <option 
                                @if($ca->id == $product->cate_id) selected @endif
                                value="{{$ca->id}}">{{$ca->c_name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="">Giá sản phẩm</label>
                        <input type="number" name="p_price" class="form-control" value="{{$product->p_price}}">
                    </div>
                    <div class="form-group">
                        <label for="">Mô tả ngắn</label>
                        <textarea name="p_description" class="form-control" rows="4">{{$product->p_description}}</textarea>
                    </div>
                </div>
                <div class="col-6">
                    <div class="row">
                        <div class="col-4 offset-4">
                            <img src="{{$product->image}}" class="img-fluid">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="">Ảnh sản phẩm</label>
                        <input type="file" name="image" class="form-control" >
                    </div>
                </div>
                <div class="col-12">
                    <div class="form-group">
                        <label for="">Chi tiết</label>
                        <textarea name="p_detail" class="form-control" rows="6">{{$product->p_detail}}</textarea>
                    </div>
                </div>
                <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./" class="btn btn-danger">Hủy</a>
                </div>
            </div>
        </form>
    </div>
    <br><br><br><br>
@endsection
    
</body>
</html>