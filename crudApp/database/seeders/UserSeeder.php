<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\str;

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
            'name' => "kartik",
            'email' => "kartik@wrkva.xyz",
            'username' => "kartik",
            'password' => Hash::make('12'), // password
            'remember_token' => Str::random(10),
        ]);
    }
}
