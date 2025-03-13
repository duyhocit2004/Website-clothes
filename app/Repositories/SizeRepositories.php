<?php

namespace App\Repositories;

use App\Service\Size\SizeService;

class SizeRepositories{
    public  $SizeService;
    public function __construct( SizeService $SizeService){
        $this->SizeService = $SizeService;
    }

    public function getSize(){
        return $this->SizeService->getSize();
    }

    public function GetSizeId($id){
        return $this->SizeService->getSizeId($id);
    }

    public function createSize($data){
        return $this->SizeService->createSize($data);
    }
    public function updateSize($id,$data){
        return $this->SizeService->updateSize($id,$data);
    }
    public function deleteSize($id){
        return $this->SizeService->deleteSize($id);
    }


}
