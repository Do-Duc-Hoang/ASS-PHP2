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
              $msg = isset($_GET['msg']) ? $_GET['msg']: null;
              $this->render('category.add-category',[
                     'errorMsg'=>$msg
              ]);
       }
       public function saveAdd(){
              $res = $_POST;
              if($res == 0){
                     $msg="Không bỏ trống dữ liệu";
                     header("location:./add-category?msg=$msg");
                     return false;
              }else{
              $model = new Category();
              $model->fill($res);
              $model->save();
              header('location: ./categories?msg=thêm thành công');
              return true;
              }
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
              $msg = isset($_GET['msg']) ? $_GET['msg']: null;
              $this->render('category.edit-category',[
                     'cate'=>$model,
                     'errorMsg'=>$msg
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
              if($res == 0){
                     $msg="không để trống dữ liệu";
                   
                     header("location: ./edit-category?id=$editId&msg=$msg");
                     return false;
              }else{
              $model->fill($res);
              $model->save();
              header('location: ./categories?msg=Sửa thành công');
              return true;
              }
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