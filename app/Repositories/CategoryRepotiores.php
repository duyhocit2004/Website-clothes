<?php

namespace App\Repositories;
use app\service\category\CategoryService;
class CategoryRepotiores{
    public $categoryService;
    public function __construct(CategoryService $categoryService){
        $this->categoryService = $categoryService;
    }
    public function getAll(){
        return $this->categoryService->getCategories();
    }

}
