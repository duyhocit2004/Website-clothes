<?php

namespace App\Service\Cate;

    use App\Models\categoryModel;

    class CategoryService implements  ICategoryService{
        public function getCategories(){
            return categoryModel::query()->paginate(5);
        }

        public function createCategory($data){
            return categoryModel::query()->create($data);
        }
        public function getCategory($id){
            return categoryModel::query()->find($id);
        }
        public function updateCategory($id,$data){
//            dd($data);
            return categoryModel::query()->find($id)->update($data);
        }
        public function deleteCategory($id){
            return categoryModel::query()->find($id)->delete();
        }
    }

