<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UsersBillingDetail extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'iban',
        'bic',
        'firstname',
        'lastname',
        'paypal',
        'terms_accepted',
        'user_id',
    ];
}
