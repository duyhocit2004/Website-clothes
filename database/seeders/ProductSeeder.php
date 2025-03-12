<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('product')->insert([
                'SKU'=>'@@22',
                'name_product'=>'áo dài chuyển thống',
                'category_id'=> rand('1','3'),
                'content'=>'áo hay',
            'description'=>'áo chất liệu vừa vặn vừa với người dùng',
            'price'=>23333,
            'image'=>'ádasdas',
        ]);
        }

    }
}
