<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $data = [
            [
                'name' => 'Admin',
                'email' => 'admin@gmail.com',
                'role' => 3,
                'password' => bcrypt('123456')
            ],
            [
                'name' => 'Guest',
                'email' => 'guest@gmail.com',
                'role' => 3,
                'password' => bcrypt('123456')
            ]
        ];

        DB::table('users')->insert($data);
    }
}
