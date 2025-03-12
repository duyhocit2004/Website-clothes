<?php

namespace App\Http\Controllers;

use App\Models\duymodel;
use Illuminate\Http\Request;

class duycontroller extends Controller
{
    public function store( Request $request){
        duymodel::created($request);
        return request()->json([
            "message" => "vourcher tao thanh cong",
        ]);
    }
}
