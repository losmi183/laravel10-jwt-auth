<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Milos Glogovac',
            'email' => 'milos@mail.com',
            'password' => Hash::make('Secret123#'),
        ]);        
        DB::table('users')->insert([
            'name' => 'Kristina Vasić',
            'email' => 'kriss@mail.com',
            'password' => Hash::make('Secret123#'),
        ]);        
    }
}
