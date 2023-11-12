<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\ProductImage;

class Product extends Model
{
    use HasFactory;
    protected $table='products';
    protected $fillable=[
        'product_name',
        'product_price',
        'product_promo',
        'product_description',
        'product_category',
        'cover',
    ];

    public function product_images(){
        return $this->hasMany(ProductImage::class);
    }
}
