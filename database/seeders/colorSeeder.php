<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class colorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $color = ['red', 'green', 'blue'];
        foreach ($color as $colors) {
            DB::table('color')->insert([
                'name' => $colors
            ]);
        }

    }
}
