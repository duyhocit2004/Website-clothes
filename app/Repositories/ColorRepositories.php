<?php

namespace App\Repositories;

use App\Service\Colors\ColorService;
class ColorRepositories{
    public $color;
    public function __construct(ColorService $color){
        $this->color = $color;
    }
    public function getColor(){
        return $this->color->getColor();

    }
    public function insertColor($color){
        return $this->color->insertColor($color);
    }
    public function getColorById($id){
        return $this->color->getColors($id);
    }
    public function updateColorById($id,$color){
        return $this->color->updateColor($id,$color);
    }
    public function deleteColorById($id){
        return $this->color->deleteColor($id);
    }
}
