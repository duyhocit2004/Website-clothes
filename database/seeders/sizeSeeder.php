<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class sizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Size = ['M', 'S', 'L', 'XL', 'XXL'];
        foreach ($Size as $Sizes) {
            DB::table('size')->insert([
                'name' => $Sizes
            ]);
        }
    }
}
