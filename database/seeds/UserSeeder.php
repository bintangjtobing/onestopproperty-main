<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
            'name' => 'Bintang Tobing',
            'username' => 'bintangjtobing',
            'email' => Str::random(20) . '@gmail.com',
            'password' => Hash::make('libra2110'),
            'status' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Rodry',
            'username' => 'rodry',
            'email' => Str::random(20) . '@gmail.com',
            'password' => Hash::make('rodry123'),
            'status' => 1,
        ]);
        DB::table('users')->insert([
            'name' => 'Administrator',
            'username' => 'administrator',
            'email' => Str::random(20) . '@gmail.com',
            'password' => Hash::make('12345678'),
            'status' => 1,
        ]);
    }
}
