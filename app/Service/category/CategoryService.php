<?php
namespace app\service\category;
use App\Models\categoryModel;

class CategoryService implements  ICategoryService{
    public function getCategories(){
        return categoryModel::get();
    }
    public function getCategory($id){}
    public function createCategory($category){}
    public function updateCategory($id,$data){}
    public function deleteCategory($id){}
}
