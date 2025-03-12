<?php
namespace App\Service\product;

interface IproductService
{
    public function getProducts();

    public function getProduct($id);

    public function create($data);
}

