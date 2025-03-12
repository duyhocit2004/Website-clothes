<?php

namespace App\Http\Controllers;

use App\Events\VoucherCreated;
use App\Models\VoucherModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Broadcast;
use Illuminate\Support\Facades\DB;
use function Laravel\Prompts\table;

class VoucherController extends Controller
{
    public function store (){
        dd("hi");
        // $voucher = VoucherModel::create([
        //     "title"=>$request->title,
        //     "description"=>$request->description,
        //     "discount"=>$request->discount,
        // ]);
        // Broadcast(new VoucherCreated($voucher))->toOthers();

        // return response()->json([
        //     'message' => 'Voucher created successfully',
        //     'voucher' => $voucher
        // ], 201);
    }
}
