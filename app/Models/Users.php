<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Users extends Model
{
    use HasFactory;

    protected $table = 'users';

    protected $fillable = ['first_name', 'last_name', 'age', 'email', 'password', 'created_at', 'updated_at'];

    protected $hidden = ['password'];
}
