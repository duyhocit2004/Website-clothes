<?php

namespace App\Repositories;

use App\Models\albumImage;
use App\Models\productModel;
use App\Service\product\productService;

class ProductRepositories
{
    public $productService;

    public function __construct(productService $productService)
    {
        $this->productService = $productService;
    }

    public function getProduct()
    {
        return $this->productService->getProducts();
    }

    public function getIdProduct($id)
    {
        return productModel::find($id);
    }

    public function insert($data)
    {
        return productModel::create($data);
    }

    public function insertImage($productId, $imageUrl)
    {
        return albumImage::create([
            'product_id' => $productId,
            'image_url' => $imageUrl
        ]);
    }
}
