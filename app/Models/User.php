<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';

    // Champs modifiables
    protected $fillable = [
        'username', 'real_name', 'password', 'mail',
    ];

    // Masquer les champs sensibles
    protected $hidden = [
        'password', 'two_factor_secret', 'two_factor_recovery_codes', 'auth_ticket',
    ];
}
