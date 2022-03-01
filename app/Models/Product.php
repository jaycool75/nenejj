<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Order;
use App\Models\Category;

class Product extends Model
{
    use HasFactory;
    protected $table = 'products';

    public function order(){
        return $this->hasMany(Product::class);
    }
}
