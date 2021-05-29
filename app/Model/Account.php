<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{


    protected $fillable = ['agencia', 'numero', 'digito', 'tipo_conta', 'user_id'];
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
        //return $this->hasMany('App\Model\User');
    }

    public function transaction()
    {
        return $this->hasMany(Account::class, 'account_id');
        //return $this->hasMany('App\Model\User');
    }
}
