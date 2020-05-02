<?php
namespace App\Controllers;
use App\Models\Product;

class HomeController extends BaseController{
         public function index(){
             $product= Product::all();
             $msg = isset($_GET['msg']) ? $_GET['msg']:null;
             $this->render('homepage.index',[
                 'listItem' => $product,
                 'msg'=>$msg
             ]);
         }
         public function display(){
              $this->render('layouts.main',[]);
              
         }
}

?>