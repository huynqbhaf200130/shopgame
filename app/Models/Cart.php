<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    use HasFactory;
    protected $table = "cart";
    protected $fillable=['product_id','user_id'];
    protected $primaryKey ='cart_id';
    public $timestamps=false;
    
    public function product(){
        return $this->hasMany(Product::class);
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }
}

