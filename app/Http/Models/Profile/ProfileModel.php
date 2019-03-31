<?php

namespace App\Http\Models\Profile;

use Illuminate\Database\Eloquent\Model;

class ProfileModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'username', 'address', 'city', 'country', 'phone', 'about', 'website', 'image', 'role', 'bidang',
    ];
}
