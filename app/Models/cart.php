<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class cart extends Model
{
    use HasFactory;
    protected $fillable =[
        "user_id",
        "product_id",
        "quantity",
        "total_price",
    ];

    public function product(){
        return $this->belongsTo(product::class,"product_id");
    }
    public function user(){
        return $this->belongsTo(User::class,"user_id");
    }
}
