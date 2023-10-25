<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name'=>'Cristhian Efrain',
            'email'=>'qwe@qwe',

            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'Andre Luque Alfaro',
            'email'=>'andre@gmail.com',

            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'Lino Alex Huamanvilca',
            'email'=>'lino@gmail.com',

            'password'=>bcrypt('12345678')
        ]);
        User::create([
            'name'=>'kevin arturo',
            'email'=>'arturo@gmail.com',

            'password'=>bcrypt('12345678')
        ]);
    }
}
