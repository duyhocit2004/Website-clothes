<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sizeModel extends Model
{
    use HasFactory;
    protected $table = 'size';

    protected $fillable = [
        'name'
    ];

    public function ProductVariant(){
        return $this->hasMany(ProductVariant::class, 'size_id', 'id');
    }
}
