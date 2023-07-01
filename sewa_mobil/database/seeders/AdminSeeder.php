<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'name'=>'admin',
            'email'=>'asu@gmail.com',
            'password'=>bcr,
            'is_admin'=>'1',
        ]);
    }
}
