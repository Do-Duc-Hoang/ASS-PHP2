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
    <div class="container">
    <p><?php echo e($msg); ?></p>
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
            <?php $__currentLoopData = $listItem; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $pro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>  
                  <td><?php echo e($pro->id); ?></td>
                  <td><?php echo e($pro->p_name); ?></td>
                  <td><?php echo e($pro->p_price); ?></td>
                  <td><img src="<?php echo e($pro->image); ?>" class="img-avatar" width="100"></td>
                  <td><?php echo e($pro->p_description); ?></td>
                  <td><?php echo e($pro->p_detail); ?></td>
                  <td><?php echo e($pro->cate_id); ?></td>
                  <td><a href="./edit-product?id=<?php echo e($pro->id); ?>">Sửa</a></td>
                  <td><a onclick="return confirm('Bạn có chắc chắn muốn xóa?');" href="./delete-product?id=<?php echo e($pro->id); ?>">Xóa</a></td>
                
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
         </tbody>
    </table>
    </div>
    <br><br><br><br>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\HP\Desktop\XAMPP\htdocs\ASS-PHP2\ASS-PHP2\app\views/homepage/index.blade.php ENDPATH**/ ?>