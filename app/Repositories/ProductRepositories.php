<?php
namespace App\Repositories;

use App\Service\product\sizeService;

class ProductRepositories {
    public $productService;

    public function __construct(sizeService $productService) {
        $this->productService = $productService;
    }
    public function getProduct(){
        return $this->productService->getProducts();
    }

}
