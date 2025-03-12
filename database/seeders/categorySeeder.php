<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class categorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $listCategory = [
            'áo dài','áo ngắn','áo phong cách'
        ];
        foreach ($listCategory as $category) {
            DB::table('category')->insert([
                'name'=>$category
            ]);
        }

    }
}
