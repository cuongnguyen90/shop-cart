<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BillsTableSeeder extends Seeder
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
                'name' => 'Khach 1'
            ],
            [
                'name'=>'Khach 2'
            ]
        ];

        DB::table('bills')->insert($data);
    }
}
