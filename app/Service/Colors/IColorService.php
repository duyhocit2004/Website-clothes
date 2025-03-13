<?php

namespace App\Service\Colors;

interface IColorService{
    public function getColor();
    public function insertColor($color);
    public function getColors($id);
    public function updateColor($id,$color);
    public function deleteColor($color);
}
