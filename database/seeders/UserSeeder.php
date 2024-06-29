<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name'=> 'Admin',
                'email'=> 'admin@gmail.com',
                'role'=> 'admin',
                'status'=> 'active',
                'password'=> bcrypt('password')
            ],
            [
                'name'=> 'Superuser',
                'email'=> 'superuser@gmail.com',
                'role'=> 'superuser',
                'status'=> 'active',
                'password'=> bcrypt('password')
            ],
            [
                'name'=> 'User',
                'email'=> 'user@gmail.com',
                'role'=> 'user',
                'status'=> 'active',
                'password'=> bcrypt('password')
            ],
        ]);
    }
}
