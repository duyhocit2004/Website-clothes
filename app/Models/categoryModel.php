<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class categoryModel extends Model
{
    use HasFactory;

    protected $table = 'category';
    protected $fillable = ['id','name','parent_id'];
    public function products(){
        return $this->hasOne(productModel::class,'category_id','id');
    }
}
