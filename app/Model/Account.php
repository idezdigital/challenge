<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    public function user()
    {
        return $this->hasMany('App\Model\User');
    }
}
