<?php
namespace App\Service\product;

use App\Models\productModel;

class productService implements IproductService {

    public function getProducts(){
        return productModel::query()->get();
    }

    public function getProduct($id){

    }

    public function create($data){

    }
    public function update($id,$data){}
    public function delete($id){}
}

