<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class productModel extends Model
{
    use HasFactory;

    protected $table = 'product';
    protected $fillable = [
        'SKU',
        'name_product',
        'category_id',
        'content',
        'description',
        'price',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(categoryModel::class, 'category_id', 'id');
    }
}
