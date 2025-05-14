<?php

namespace App\Service\product;

use App\Models\productModel;
use App\Repositories\ProductRepositories;

class productService implements IproductService
{
    // public $productService;

    // public function __construct(ProductRepositories $productService){

    //   $this->productService = $productService;

    // }

    public function getProducts()
    {
        return productModel::query()->paginate(10);
    }

    public function getProduct($id) {

        return productModel::findOrFail($id);
    }

    public function create($data) {

    }

    public function update($id, $data) {

    }

    public function delete($id) {

    }
}
