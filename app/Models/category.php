<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class category extends Model
{
    use HasFactory;

    public function product(){
        return $this->hasMany(product::class);
    }
    protected $fillable = [
        "name"
    ];
}
