<?php

namespace App\Http\Models\Kategori;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\QueryException as Exception;
use DB;
use Session;

class KategoriModel extends Model
{
    protected $table = 'pmks_kategori';

    protected $fillable = [
        'bidang',
        'kategori',
        'deskripsi',
        'jumlah_orang',
        'sudah_ditangani',
        'belum_ditangani',
        'gambar',
        'dibuat',
        'diubah',
    ];

    public static function countKategori()
    {
        $response = DB::table('pmks_kategori')
            ->count();

        return $response;
    }

    public static function getDataKategori()
    {
        $response = DB::table('pmks_kategori')
            ->select('kategori','jumlah_orang')
            ->get();

        return $response;
    }

    public static function countJumahOrang()
    {
        $response = DB::table('pmks_kategori')
            ->select(DB::raw('SUM(jumlah_orang) as total'))
            ->first();

        return $response;
    }

}
