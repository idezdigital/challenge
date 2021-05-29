<?php

namespace App\Services;

use App\Model\User;



class UserService
{
    public function chekUnique($cpf, $cnpj, $email)
    {
        $user = new User;

        $flights = $user::where('cpf', '=', "$cpf")
            ->orWhere('cnpj', "$cnpj")
            ->orWhere('name', "$email")
            ->exists();
    }
}
