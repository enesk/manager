<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class UsersProfile extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname',
        'lastname',
        'company',
        'street',
        'houseno',
        'zipcode',
        'city',
        'tel'
    ];
}
