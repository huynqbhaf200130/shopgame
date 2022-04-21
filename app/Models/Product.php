<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "product";
    protected $fillable=['product_name','product_price','product_image','product_des','category_id'];
    protected $primaryKey ='product_id';
    public $timestamps=false;
}
