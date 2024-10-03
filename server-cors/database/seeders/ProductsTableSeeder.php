<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'codigo' => 'PROD001',
                'name' => 'Producto 1',
                'price' => 199,
                'url' => 'https://i.ibb.co/2YNfZf6/601360.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'codigo' => 'PROD002',
                'name' => 'Producto 2',
                'price' => 299,
                'url' => 'https://i.ibb.co/BZHykpX/150178.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'codigo' => 'PROD003',
                'name' => 'Producto 3',
                'price' => 399,
                'url' => 'https://i.ibb.co/xFrTTgb/701994.webp',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
