<?php

namespace App\Controllers;
use App\Models\Category;
class CategoryController extends BaseController{
       public function show(){
           $category= Category::all();
             $msg = isset($_GET['msg']) ? $_GET['msg']: null;
           $this->render('category.show-category',[
                  'listItem'=>$category,
                  'msg'=>$msg
           ]);
       }
       public function add(){
              $this->render('category.add-category',[]);
       }
       public function saveAdd(){
              $res = $_POST;

              $model = new Category();
              $model->fill($res);
              $model->save();
              header('location: ./categories?msg=thêm thành công');
       }
       public function edit(){
              $editId= $_GET['id'];
              $editId = isset($_GET['id'])? $_GET['id']:null;
              if(!$editId){
                     header('./categories?msg=Không đủ dữ liệu');
                     die;
              }
              $model = Category::find($editId);
              if(!$model){
                     $msg="ID không tồn tại";
                     header("location: ./categories?msg=$msg");
                     die;
              }

              $this->render('category.edit-category',[
                     'cate'=>$model
              ]);
       }
       public function saveEdit(){
              $editId= $_GET['id'];
              $editId = isset($_GET['id'])? $_GET['id']:null;
              if(!$editId){
                     header('./categories?msg=Không đủ dữ liệu');
                     die;
              }
              $model = Category::find($editId);
              if(!$model){
                     $msg="ID không tồn tại";
                     header("location: ./categories?msg=$msg");
                     die;
              }
              $res=$_POST;
              $model->fill($res);
              $model->save();
              header('location: ./categories?msg=Sửa thành công');
       }
       public function delete(){
              $editId= $_GET['id'];
              $editId = isset($_GET['id'])? $_GET['id']:null;
              if(!$editId){
                     header('./categories?msg=Không đủ dữ liệu');
                     die;
              }
              $model = Category::find($editId);
              if(!$model){
                     $msg="ID không tồn tại";
                     header("location: ./categories?msg=$msg");
                     die;
              }else{
                     Category::destroy($editId);
                     header('location: ./categories?msg=Xóa thành công');
                     die;
              }
       }

}

?>