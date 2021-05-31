<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert(
            [
                [
                    'bank_branch' => 10,
                    'account_number' => 5345,
                    'digit' => 8,
                    'account_type' => 'Company',
                    'user_id' => 1000,
                ],
                [
                    'bank_branch' => 2,
                    'account_number' => 5345,
                    'digit' => 4,
                    'account_type' => 'Personal',
                    'user_id' => 1000,
                ],
                [
                    'bank_branch' => 10,
                    'account_number' => 5345,
                    'digit' => 8,
                    'account_type' => 'Company',
                    'user_id' => 1001,
                ]
            ]
        );
    }
}
