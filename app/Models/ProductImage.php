<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class ProductImage extends Model
{
    use HasFactory;

    protected $table='product_images';
    protected $fillable=[
        'product_id',
        'images',
    ];

    public function products(){
        return $this->belongsTo(Product::class);
    }
}
