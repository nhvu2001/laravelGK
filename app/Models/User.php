<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $table = 'user';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'username', 'password', 'fullname', 'email', 'role'
    ];

    protected $hidden = [
        'password',
    ];

    public function isAdmin() {
        return $this->role === 'admin';
    }
}
