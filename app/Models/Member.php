<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Member extends Model
{
    protected $fillable = [
        'firstname',
        'lastname',
        'street',
        'houseno',
        'zipcode',
        'city',
        'tel',
        'email',
        'donation',
        'organization_id'
    ];
}