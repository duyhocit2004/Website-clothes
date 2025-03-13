<?php

namespace App\Repositories;

use App\Service\Cate\CategoryService;

class CategoryRepositories{
    public  $CategoryService;
    public function __construct( CategoryService $CategoryService){
        $this->CategoryService = $CategoryService;
    }
    public function getAll(){
        return $this->CategoryService->getCategories();
    }

}
