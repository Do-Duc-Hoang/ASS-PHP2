<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>

<?php $__env->startSection('main-content'); ?>
<br><br>
    <div id="container">
          <h3>Edit danh mục</h3>
          <form action="./save-edit-category?id=<?php echo e($cate->id); ?>" method="POST">
             <div class="form-group">
             <label for="">Tên danh mục</label>
             <input type="text" name="c_name" value="<?php echo e($cate->c_name); ?>" class="form-control">
             <p style="color: red"><?php echo e($errorMsg); ?></p>
             </div>
             <div class=" col-12 text-center">
                    <button type="submit" class="btn btn-info">Lưu</button>
                    <a href="./categories" class="btn btn-danger">Hủy</a>
                </div>
          
          </form>
    </div>
    <br><br><br><br>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\XAMPP\htdocs\ASS-PHP2\ASS-PHP2\app\views/category/edit-category.blade.php ENDPATH**/ ?>