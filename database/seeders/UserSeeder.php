<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'André Neves',
            'email' => 'andr@andr.com.br',
            'password' => Hash::make('123456789'),
        ]);

        DB::table('users')->insert([
            'name' => 'Anderson André',
            'email' => 'andersonandersonandre799@gmail.com',
            'password' => Hash::make('1234567899'),
        ]);
        DB::table('users')->insert([
            'name' => 'Vera André',
            'email' => 'vera799@gmail.com',
            'password' => Hash::make('12345678999'),
        ]);
        DB::table('users')->insert([
            'name' => 'Eliana André',
            'email' => 'eliane799@gmail.com',
            'password' => Hash::make('123456789999'),
        ]);
        DB::table('users')->insert([
            'name' => 'Maria André',
            'email' => 'maria799@gmail.com',
            'password' => Hash::make('1234567899999'),
        ]);
        DB::table('users')->insert([
            'name' => 'Jorge André',
            'email' => 'jorge799@gmail.com',
            'password' => Hash::make('12345678999999'),
        ]);
    }
}