<?php

use Illuminate\Database\Seeder;
use App\user;
use Illuminate\Support\Facades\Hash;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        User::create([

            'name'=>'Mohan Dhakal',
            'email'=>'mohandkl512@gmail.com',
            'password'=> Hash::make('password'),
            'remember_token'=> str_repeat(2,6),

        ]);
    }
}
