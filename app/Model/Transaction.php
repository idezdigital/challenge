<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function account()
    {
        return $this->belongsTo('App\Model\Account');
    }
}
