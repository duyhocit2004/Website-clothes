<?php
namespace App\Repositories;

use App\Service\product\productService;

class ProductRepositories {
    public $productService;

    public function __construct(productService $productService) {
        $this->productService = $productService;
    }
    public function getProduct(){
        return $this->productService->getProducts();
    }

}
