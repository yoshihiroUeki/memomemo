<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
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
        DB::table('users')->insert([
            [
            'name' => 'テストユーザー',
            'email' => 'test@test.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => 'テストユーザー2',
            'email' => 'test2@test.com',
            'password' => Hash::make('password123'),
            ],[
            'name' => 'テストユーザー3',
            'email' => 'test3@test.com',
            'password' => Hash::make('password123'),
            ]

        ]);
    }
}
