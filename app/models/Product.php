<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model{
    protected $table = "products";
    
    public $fillable=['id','p_name','p_price','image','p_description','p_detail','cate_id'];
}

?>