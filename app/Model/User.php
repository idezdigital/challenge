<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{

    protected $fillable = ['name', 'razao_social', 'nome_fantasia', 'email', 'cpf', 'phone', 'password'];

    public function accounts()
    {
        return $this->hasMany('App\Model\Account');
    }
}
