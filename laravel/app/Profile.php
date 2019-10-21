<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    protected $fillable = [
        'last_name',
        'first_name',
        'age',
        'phone_number',
        'address',
    ];

    public function user() {
        return $this->belongsTo('App\User');
    }
}
