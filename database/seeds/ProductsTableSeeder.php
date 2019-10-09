<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Kiwi Xanh',
                'slug' => Str::slug('Kiwi Xanh'),
                'description' => 'Abc',
                'code' => 'ABC123',
                'price' => 19999
            ],
            [
                'name' => 'Cam ',
                'slug' => Str::slug('Cam '),
                'description' => 'Abc',
                'code' => 'ABC1213',
                'price' => 19999
            ]

        ];

        DB::table('products')->insert($data);
    }
}
