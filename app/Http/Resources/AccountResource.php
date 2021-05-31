<?php

namespace App\Http\Resources;

use App\Model\Transaction;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\User;
use Illuminate\Support\Str;

class AccountResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'bank_branch' => $this->bank_branch,
            'account_number' => $this->account_number,
            'digit' => $this->digit,
            'account_type' => $this->account_type,
            'user' => $this->accountUser($request),
            'transactions' => $this->transactionAccount()
        ];
    }


    /**
     * Sets the additional user information.
     *
     * 
     * @return object
     */
    private function accountUser(): object
    {

        $data = User::find($this->user_id);

        if (Str::upper($this->account_type) == Str::upper('personal')) {
            $data->makeHidden(
                'corporate_name',
                'trading_name',
                'cnpj',
                'created_at',
                'updated_at',
                'email',
                'phone',
                'password'
            )->toArray();
            return $data;
        }

        $data->makeHidden(
            'created_at',
            'updated_at',
            'cpf',
            'email',
            'phone',
            'password'
        )->toArray();
        return $data;
    }

    /**
     * Sets the additional account transactions.
     *
     * 
     * @return object
     */
    private function transactionAccount(): object
    {
        $data = Transaction::where('account_id', $this->id)->get();
        return $data;
    }
}
