<?php
namespace App\Controllers;
use App\Models\Product;
use App\Models\Category;

class ProductController extends BaseController{
         public function add(){
             $category = Category::all();
             $this->render('product.add-product',[
                  'cate'=>$category
             ]);
         }
         
         public function saveAdd(){
             $rd = $_POST;
             $imgFile=$_FILES['image'];
             var_dump($rd);
             $model = new Product();
             $model->fill($rd);
             



             $filename="";
		if($imgFile['size']>0){
			$filename=uniqid().'-'.$imgFile['name'];
			move_uploaded_file($imgFile['tmp_name'],'./public/uploads/'.$filename);
            $filename='public/uploads/'.$filename;
        }
            $model->image = $filename;
            $model->save();
            header('location: ./');
         
      }
      public function edit(){
          $editId= isset($_GET['id']) ? $_GET['id'] : null;
          if(!$editId){
              
              header('location: ./?msg=Không đủ thông tin');
              die;
          }

          $model =Product::find($editId);
          if (!$model) {
             $msg="không tồn tại Id";
             header("location: ./?msg=$model");
             die;
          }
        $category = Category::all();
        $this->render('product.edit-product',[
             'category'=>$category,
             'product'=>$model
        ]);
      }
      public function saveEdit(){
          $editId = $_GET['id'];
        $editId= isset($_GET['id']) ? $_GET['id'] : null;
        if(!$editId){
            
            header('location: ./?msg=Không đủ thông tin');
            die;
        }

        $model =Product::find($editId);
        if (!$model) {
           $msg="không tồn tại Id";
           header("location: ./?msg=$model");
           die;
        }
        $res = $_POST;
        $model->fill($res);
        $imgFile = $_FILES['image'];
        var_dump($res);
       
        $filename=$model->image;
        if($imgFile['size']>0){
			$filename=uniqid().'-'.$imgFile['name'];
			move_uploaded_file($imgFile['tmp_name'],'./public/uploads/'.$filename);
            $filename='public/uploads/'.$filename;
            
        }
            $model->image = $filename;
            $model->save();
            header('location: ./?msg="Sửa thành công"');
         

      }
      public function delete(){
          $delId=$_GET['id'];
          $delId= isset($_GET['id']) ? $_GET['id']: null;
          if(!$delId){
              header('location:./?msg=không đủ thông tin');
              die;
          }
          $model = Product::find($delId);
         if (!$model) {
             $msg ="id không tồn tại";
         }else{
             Product::destroy($delId);
             $msg="Xóa thành công";
         }
         header("location: ./?msg=$msg");
        

      }
}


?>