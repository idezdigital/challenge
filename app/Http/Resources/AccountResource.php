<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use App\Model\User;

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
        //dd($request);
        //return parent::toArray($request);   protected $fillable = ['agencia', 'numero', 'digito', 'tipo_conta', 'user_id'];
        return [
            'id' => $this->id,
            'agencia' => $this->agencia,
            'numero' => $this->numero,
            'digito' => $this->digito,
            'tipo_conta' => $this->tipo_conta,
            'user' => $this->accountUser($this->user_id)
        ];
    }

    private function accountUser($user_id)
    {

        $data = User::findOrfail($user_id);
        return $data;
    }
}
