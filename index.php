<?php
session_start();

$url = isset($_GET['url']) ? $_GET['url'] : "/"; 

require_once ('./vendor/autoload.php');
require_once ('./commons/database-config.php');

use App\Controllers\HomeController;
use App\Controllers\ProductController;
use App\Controllers\CategoryController;

switch ($url) {
    case '/':
        $ctl = new HomeController();
        $ctl->index();
        break;
    case 'categories':
        $ctl = new CategoryController();
        $ctl->show();
        break;
    case 'add-product':
        $ctl = new ProductController();
        $ctl->add();
        break;
    case 'save-add-product':
        $ctl = new ProductController();
        $ctl->saveAdd();
        break;
    case 'edit-product':
        $ctl = new ProductController();
        $ctl->edit();
        break;
    case 'save-edit-product':
        $ctl = new ProductController();
        $ctl->saveEdit();
        break;
    case 'edit-category':
        $ctl = new CategoryController();
        $ctl->edit();
        break;
    case 'save-edit-category':
        $ctl = new CategoryController();
        $ctl->saveEdit();
        break;
    case 'add-category':
        $ctl = new CategoryController();
        $ctl->add();
        break;
    case 'save-add-category':
        $ctl = new CategoryController();
        $ctl->saveAdd();
        break;
    case 'delete-product':
        $ctl = new ProductController();
        $ctl->delete();
        break;
    case 'delete-category':
        $ctl = new CategoryController();
        $ctl->delete();
        break;
    case 'display':
        $ctl = new HomeController();
        $ctl->display();
        break;
    
    default:
        echo "đường dẫn không tồn tại";
        break;
}









     









?>