<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User;

class Users extends User
{
    use HasFactory;
    protected $table="user";
    protected $fillable=[
        'name',
        'email',
        'password'
    ];
}
