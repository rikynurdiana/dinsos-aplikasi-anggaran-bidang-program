<?php

namespace App\Http\Models\Member;

use Illuminate\Database\Eloquent\Model;
use DB;

class MemberModel extends Model
{
    protected $table = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'username', 'address', 'city', 'country','phone', 'about', 'website', 'image', 'role'
    ];

    public static function countMember()
    {
        $response = DB::table('users')
            ->count();

        return $response;
    }
}
