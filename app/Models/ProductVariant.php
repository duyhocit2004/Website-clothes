<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;
    public $table = 'product_variants';
    protected $fillable = [
        'product_id',
        'color_id',
        'size_id',
        'price',
        'quantity',
    ];
    public function product(){
        return $this->belongsTo(productModel::class , 'product_id','id');
    }
    public function color(){
        return $this->belongsTo(colorModel::class , 'color_id','id');
    }
    public function size(){
        return $this->belongsTo(sizeModel::class , 'size_id','id');
    }
}
