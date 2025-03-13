<?php
namespace App\Service\Size;

interface ISizeService
{
    public function getSize();

    public function getSizeId($id);

    public function createSize($data);
    public function updateSize($id,$data);
    public function deleteSize($id);
}

