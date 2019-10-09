<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
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
              'name'=>'Hoa quả nhập',
              'slug'=>'hoa-qua-nhap'
          ] ,
          [
              'name'=>'Hải sản',
              'slug'=>'hai-san'
          ]
        ];

        DB::table('categories')->insert($data);
    }
}
