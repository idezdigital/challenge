<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Account extends Model
{
    protected $fillable = ['bank_branch', 'account_number', 'digit', 'account_type', 'user_id'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\belongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function transaction()
    {
        return $this->hasMany(Account::class, 'account_id');
    }
}
