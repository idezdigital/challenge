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
        //return parent::toArray($request);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'cpf' => $this->cpf,
            'telephone' => $this->phone,
            'email' => $this->email,
            'accounts' => $this->details()
        ];
        // $data[] = AccountResource::collection($this->accounts);

        // return $data;
    }

    private function details(): array
    {
        $data[] = AccountResource::collection($this->accounts);

        return $data;
    }
}
