<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mohan Dhakal',
            'username'=> 'mohan12',
            'email' => 'mohandkl.512@gmail.com',
            'password' => Hash::make('mohandkl@50'),
        ]);
    }
}
