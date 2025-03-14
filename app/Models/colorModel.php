<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class colorModel extends Model
{
    use HasFactory;
    protected $table = 'color';
    protected $fillable = ['name'];
    public function ProductVariant(){
        return $this->hasMany(ProductVariant::class,'color_id','id');
    }
}
