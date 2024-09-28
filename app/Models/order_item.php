<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order_item extends Model
{
    use HasFactory;
    protected $fillable = [
        "user_id",
        "product_id",
        "order_id",
        "quantity",
        "total_price",
    ];
}
