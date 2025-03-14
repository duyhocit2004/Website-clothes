<?php

namespace App\Service\Cate;

interface ICategoryService {
    public function getCategories();
    public function getCategory($id);

    public function createCategory($data);
    public function updateCategory($id,$data);
    public function deleteCategory($id);
}
