<?php
namespace App\Repositories;

use App\Service\product\ProductService;

class ProductRepositories {
    public $productService;

    public function __construct(ProductService $productService) {
        $this->productService = $productService;
    }
    public function getProduct(){
        return $this->productService->getProducts();
    }

}
