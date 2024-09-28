<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class product extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "quantity",
        "price",
        "category_id",
        "image",
    ];

    public function category(){
        return $this->belongsTo(category::class);
    }

    public function getimageAttribute($value){
        return "images/products/". $value;
    }

    public function cart(){
        return $this->hasMany(Cart::class,"product_id");
    }
    
}
