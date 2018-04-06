<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Organization extends Model
{
    protected $fillable = [
        'name',
        'street',
        'houseno',
        'zipcode',
        'city',
        'tel',
        'email',
        'website',
        'user_id',
        'plan_id'
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }
}
