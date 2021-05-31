<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\User;
use App\Model\Account;

class UserResource extends JsonResource
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
            'name' => $this->name,
            'cpf' => $this->cpf,
            'telephone' => $this->phone,
            'email' => $this->email,
            'accounts' => $this->accountComplement()
        ];
    }

    /**
     * Sets the additional account information.
     *
     * 
     * @return object
     */
    private function accountComplement(): object
    {
        $data = Account::where('user_id', $this->id)->get();

        return $data;
    }
}
