<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable = ['transaction_type', 'value', 'user_id', 'account_id', 'user_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function account()
    {
        return $this->belongsTo('App\Model\Account');
    }
}
