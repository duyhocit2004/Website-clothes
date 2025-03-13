<?php
namespace App\Service\Size;



use App\Models\sizeModel;

class SizeService implements ISizeService {

    public function getSize(){
        return sizeModel::query()->paginate(5);
    }

    public function getSizeId($id){
        return sizeModel::query()->find($id);
    }

    public function createSize($data){
        return sizeModel::query()->create($data);
    }
    public function updateSize($id,$data){
        return sizeModel::query()->find($id)->update($data);
    }
    public function deleteSize($id){
        return sizeModel::query()->find($id)->delete();
    }
}


