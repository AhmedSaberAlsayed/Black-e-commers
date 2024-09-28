<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class order extends Model
{
    use HasFactory;
    protected $fillable = [
        "order_date",
        "payment_status",
        "payment_amount",
        "payment_method",
    ];
}
