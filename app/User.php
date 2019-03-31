<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'username', 'address', 'city', 'country', 'phone', 'about', 'website', 'image', 'role','bidang',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public static function totalBlog($name)
    {
        $result = DB::table('users')
            ->join('blogs', 'users.id', '=', 'blogs.creator_id')
            ->where('users.name','=', $name)
            ->count();

        return $result;
    }

    public static function totalComment($name)
    {
        $result = DB::table('users')
            ->join('comments', 'users.id', '=', 'comments.creator_id')
            ->where('users.name','=', $name)
            ->count();

        return $result;
    }

    public static function totalDataPmks($name)
    {
        $result = DB::table('pmks_data')
            ->join('pmks_status', 'pmks_data.no_kartu_keluarga', '=', 'pmks_status.no_kartu_keluarga')
            ->where('pmks_status.nama_pengawas', $name)
            ->groupBy('pmks_data.no_kartu_keluarga')
            ->whereColumn('pmks_data.nama_anggota_keluarga', 'pmks_data.nama_responden')
            ->count();

        return $result;
    }
}
