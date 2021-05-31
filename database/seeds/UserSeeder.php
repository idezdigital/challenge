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
        DB::table('users')->insert(
            [
                [
                    'id' => 1000,
                    'name' => 'Idez Teste',
                    'phone' => '19999999999',
                    'corporate_name' => 'Idez Digital',
                    'trading_name' => 'Idez SA',
                    'email' => 'idezteste@gmail.com',
                    'password' => Hash::make('password'),
                ],
                [
                    'id' => 1001,
                    'name' => 'Jader Moura',
                    'phone' => '19999999999',
                    'corporate_name' => 'Jader Digital',
                    'trading_name' => 'Jader SA',
                    'email' => 'Jader@gmail.com',
                    'password' => Hash::make('password'),
                ]
            ]
        );
    }
}
