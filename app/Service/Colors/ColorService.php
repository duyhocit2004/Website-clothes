<?php

namespace App\Service\Colors;


use App\Models\colorModel;


class ColorService implements IColorService{
    public function getColor(){
        return colorModel::query()->paginate(8);
    }
    public function insertColor($color){
        return colorModel::query()->insert($color);
    }
    public function getColors($id){
        $color = colorModel::query()->find($id);
        return $color;
    }
    public function updateColor($id,$color){
        $color1 = colorModel::query()->find($id);

        $color1->update([
            'name'=>$color['name'],
        ]);

        return $color;
    }
    public function deleteColor($color){
        $color = colorModel::query()->find($color);
        $color->delete();
        return $color;
    }
}
