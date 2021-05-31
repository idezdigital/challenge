<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('transactions')->insert(
            [
                [
                    'transaction_type' => 'Recarga de Celular',
                    'value' => 10,
                    'user_id' => 1000,
                    'account_id' => 1
                ],
                [
                    'transaction_type' => 'Transferência',
                    'value' => 10,
                    'user_id' => 1000,
                    'account_id' => 1
                ],
                [
                    'transaction_type' => 'Depósito',
                    'value' => 10,
                    'user_id' => 1000,
                    'account_id' => 1
                ],
                [
                    'transaction_type' => 'Depósito',
                    'value' => 333,
                    'user_id' => 1000,
                    'account_id' => 2
                ],
                [
                    'transaction_type' => 'Depósito',
                    'value' => 333,
                    'user_id' => 1001,
                    'account_id' => 3
                ]
            ]
        );
    }
}
