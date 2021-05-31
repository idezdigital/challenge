<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Model
{

    protected $fillable = ['name', 'corporate_name', 'trading_name', 'email', 'cpf', 'phone', 'password'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function accounts()
    {
        return $this->hasMany('App\Model\Account');
    }
}
